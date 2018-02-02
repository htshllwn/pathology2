<?php
    class Text_based extends CI_Controller{
        public function index() {
            //echo $slug;
            //Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			//$data['patient'] = $this->patient_model->get_patient(1);
			$data['tb_tests'] = $this->text_based_model->get_all_tb_tests();
			//$data['access'] = 'edit';
			$this->load->view('templates/header');
			$this->load->view('text_based/all',$data);
        }

        //New or Edit Text Based Report
        public function new_text_based(){
            //echo "New or Edit Text Based";
            $data['title'] = 'New Test Category';

			$this->form_validation->set_rules('category_name','Category Name','required');
			$this->form_validation->set_rules('no_of_tests','No. of Tests','required');

			/*
			$this->load->view('templates/header');
			$this->load->view('categories/new', $data);
			$this->load->view('templates/footer');
			*/

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('text_based/new', $data);
				$this->load->view('templates/footer');
            }
            else{
                
            }


        }
    }