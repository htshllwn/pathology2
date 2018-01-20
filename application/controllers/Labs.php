<?php
    class Labs extends CI_Controller {
        public function index() {
            //echo "In Labs";
            //Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}


            $data['labs'] = $this->lab_model->get_labs();

            $this->load->view('templates/header');
            $this->load->view('labs/all',$data);
            $this->load->view('templates/footer');
        }

        //New or Edit Lab
        public function new_lab($lab_id = NULL){
            //Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

            if($lab_id != NULL) {
				$data['lab'] = $this->lab_model->get_lab($lab_id);
				$data['mode'] = 'edit';
			}
			else {
				$data['mode'] = 'new';
            }
            
            $this->form_validation->set_rules('name','Name','required');

            if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('labs/new',$data);
				$this->load->view('templates/footer');	
            }
            else{
                $dataInsert = array(
                    'lab_name' => $this->input->post('name'),
                    'lab_add' => $this->input->post('add'),
                    'lab_phone' => $this->input->post('phone'),
                    'lab_email' => $this->input->post('email')
                    );
    
                if($lab_id != NULL){
                    //echo "Edit Lab";
                    $this->lab_model->edit_lab($lab_id, $dataInsert);
                }
                else {
                    //echo "New Lab";
                    $this->lab_model->register_lab($dataInsert);
                }

                redirect('labs');
            }


        }


        //Delete a Lab
		public function delete_lab($lab_id){
			//echo "deleting ".$id;
			$this->lab_model->delete_lab($lab_id);
			
			//echo " ".$result." ".$result2;
			redirect('labs');
		}

    }