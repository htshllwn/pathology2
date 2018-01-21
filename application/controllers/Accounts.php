<?php
    class Accounts extends CI_Controller {
        public function index() {
            //echo "In Accounts";
            //Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}


            $data['accounts'] = $this->account_model->get_accounts();
            $data['mode'] = "all_labs";
            $this->load->view('templates/header');
            $this->load->view('accounts/all',$data);
            $this->load->view('templates/footer');
        }

        //New or Edit Account
        public function new_account($acc_id = NULL){
            //Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
            }
            
            $data['labs'] = $this->lab_model->get_labs();

            if($acc_id != NULL) {
				$data['account'] = $this->account_model->get_account($acc_id);
				$data['mode'] = 'edit';
			}
			else {
				$data['mode'] = 'new';
            }
            
            $this->form_validation->set_rules('test_name','Test Name','required');

            if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('accounts/new',$data);
				$this->load->view('templates/footer');	
            }
            else{
                $dataInsert = array(
                    'patient_name' => $this->input->post('patient_name'),
                    'test_name' => $this->input->post('test_name'),
                    'lab_id' => $this->input->post('lab_id'),
                    'amount' => $this->input->post('amount'),
                    'due' => $this->input->post('due'),
                    'date' => $this->input->post('date')
                    );
    
                if($acc_id != NULL){
                    //echo "Edit Lab";
                    $this->account_model->edit_account($acc_id, $dataInsert);
                }
                else {
                    //echo "New Lab";
                    $this->account_model->register_account($dataInsert);
                }

                redirect('accounts');
            }


        }

        //Delete a Account
		public function delete_account($acc_id){
			//echo "deleting ".$id;
			$this->account_model->delete_account($acc_id);
			
			//echo " ".$result." ".$result2;
			redirect('accounts');
		}
    }