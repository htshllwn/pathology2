<?php
	class Tests extends CI_Controller{

		public function index($slug,$p_id){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			//echo $slug;
			$data['title'] = $this->tests_model->get_title($slug);
			$data['columns'] = $this->tests_model->get_column_names($slug);
			$data['patient'] = $this->patient_model->get_patient($p_id);
			$data['patient_id'] = $p_id;
			$data['slug'] = $slug;
			$data['test_details'] = $this->tests_model->get_test_details($slug,$p_id);

			$this->load->view('templates/header');
			$this->load->view('patients/details',$data);
			$this->load->view('tests/old',$data);
			$this->load->view('templates/footer');
		}

		//Print Test
		public function print_test($slug,$p_id,$test_id){

			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			//echo $slug;
			//echo $p_id;
			//echo $test_id;

			$data['title'] = $this->tests_model->get_title($slug);
			$data['columns'] = $this->tests_model->get_column_names($slug);
			$data['patient'] = $this->patient_model->get_patient($p_id);
			$data['patient_id'] = $p_id;
			$data['slug'] = $slug;
			$data['test_details'] = $this->tests_model->get_single_test_details($slug,$p_id,$test_id);

			$this->load->view('templates/header');

			if($data['test_details']){
				$this->load->view('patients/details',$data);
				$this->load->view('tests/print',$data);
			}
			else{
				//echo "not found";
			}

			$this->load->view('templates/footer');

		}

		//New Test
		public function new_test($slug,$p_id){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['title'] = $this->tests_model->get_title($slug);
			$data['columns'] = $this->tests_model->get_column_names($slug);
			$data['patient'] = $this->patient_model->get_patient($p_id);
			$data['patient_id'] = $p_id;
			$data['slug'] = $slug;



			//echo $slug.' '.$p_id;

			$this->form_validation->set_rules('hid_patient_id','hid_patient_id','required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('tests/new',$data);
				$this->load->view('templates/footer');
			}
			else{
				//echo "Submitted";
				$datainsert = array();
				foreach($data['columns'] as $column){
					$datainsert[$column->col_slug] = $this->input->post($column->col_slug);
				}
				//print_r($datainsert);
				$this->tests_model->new_test($slug,$p_id,$datainsert);
				redirect('tests/'.$slug.'/'.$p_id);
			}

		}

		//Delete Test
		public function delete_test($slug,$p_id,$test_id){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$result = $this->tests_model->delete_test($slug,$test_id);
			//print_r($result);
			redirect('tests/'.$slug.'/'.$p_id);

		}

		//New Text based test
		public function text_based($tb_slug,$p_id){
			//echo 'text based for '.$p_id;

			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['patient'] = $this->patient_model->get_patient($p_id);
			$data['columns'] = $this->text_based_model->get_column_names($tb_slug);
			$data['title'] = $this->text_based_model->get_test($tb_slug);
			

			$this->load->view('templates/header');
			$this->load->view('patients/details',$data);
			$this->load->view('tests/text_based',$data);
			$this->load->view('templates/footer');


		}

		//Blood Widal Table
		public function widal($p_id){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['patient'] = $this->patient_model->get_patient($p_id);

			$this->load->view('templates/header');
			$this->load->view('patients/details',$data);
			$this->load->view('tests/widal',$data);
			$this->load->view('templates/footer');

		}

		//Receipt
		public function receipt($p_id){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['patient'] = $this->patient_model->get_patient($p_id);
			$data['tests'] = $this->tests_model->get_all_tests();
			$data['tb_tests'] = $this->text_based_model->get_all_tests();
			$this->load->view('templates/header');
			$this->load->view('patients/details',$data);
			$this->load->view('tests/receipt',$data);
			$this->load->view('templates/footer');

		}
	}