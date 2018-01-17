<?php 
	class Patients extends CI_Controller{

		//List all Patients
		public function index(){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['title'] = "Patients";
			$data['patients'] = $this->patient_model->get_patients();

			$this->load->view('templates/header');
			$this->load->view('patients/all_patients',$data);
			//print_r($data['patients']);
			$this->load->view('templates/footer');
		}


		//Create new patient
		public function new_patient(){

			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['title'] = 'PATHOLOGY';

			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('age','Age','required');
			$this->form_validation->set_rules('gender','Gender','required');
			$this->form_validation->set_rules('mobile','Mobile','required');
			$this->form_validation->set_rules('ref_by','Referred By','required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('patients/new_patient',$data);
				$this->load->view('templates/footer');	
			}
			else{
				$data = array(
								'name' => $this->input->post('name'),
								'age' => $this->input->post('age'),
								'gender' => $this->input->post('gender'),
								'mobile' => $this->input->post('mobile'),
								'ref_by' => $this->input->post('ref_by')
								);
				$this->patient_model->register_patient($data);
				$this->session->set_flashdata('patient_reg','Patient added successfully');
				redirect('patients');
			}

			
		}

		//Details of a patient
		public function details($patient_id){

			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['patient'] = $this->patient_model->get_patient($patient_id);
			$data['tests'] = $this->tests_model->get_all_tests();
			$data['access'] = 'view';
			//print_r($data['tests']);
			$this->load->view('templates/header');

			if($data['patient']){
				$data['title'] = 'Details of '.$data['patient']->name;
				$this->load->view('patients/details',$data);
				$this->load->view('tests/categories',$data);	
			}
			else{
				echo "not found";
			}
			
			//print_r($data['patients']);
			$this->load->view('templates/footer');

		}

		//Delete a patient
		public function delete_patient($id){
			//echo "deleting ".$id;
			$this->patient_model->delete_patient($id);
			
			//echo " ".$result." ".$result2;
			redirect('patients');
		}
	}