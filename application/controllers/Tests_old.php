<?php
	class Tests_old extends CI_Controller{
		public function categories(){
			$data['title'] = 'Select Category';

			$this->load->view('templates/header');
			$this->load->view('tests/categories',$data);
			$this->load->view('templates/footer');
		}

		//Lipid Profile
		public function lipid_profile($patient_id){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$data['patient_id'] = $patient_id;
			$data['patient'] = $this->patient_model->get_patient($patient_id);
			$data['tests'] = $this->lipid_model->get_lipid_profiles($patient_id);
			$data['title'] = "Lipid Profile";

			//print_r($data['tests']);
			$this->load->view('templates/header');
			$this->load->view('patients/details',$data);
			$this->load->view('tests/lipid_profile/old_lipid_profile',$data);
			$this->load->view('templates/footer');
		}

		//New Lipid Profile
		public function new_lipid_profile($patient_id){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['title'] = 'Lipid Profile';
			$data['patient_id'] = $patient_id;
			$this->form_validation->set_rules('hid_patient_id','hid_patient_id','required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('tests/lipid_profile/new_lipid_profile',$data);
				$this->load->view('templates/footer');
			}
			else{
				$data = array(
								'cholestrol_total' => $this->input->post('cholestrol_total'),
								'triglycerides' => $this->input->post('triglycerides'),
								'cholestrol_hdl' => $this->input->post('cholestrol_hdl'),
								'cholestrol_ldl' => $this->input->post('cholestrol_ldl'),
								'cholestrol_vldl' => $this->input->post('cholestrol_vldl'),
								'chol_hdl_ratio' => $this->input->post('chol_hdl_ratio')
								);

				//print_r($data);

				$this->lipid_model->new_lipid($patient_id,$data);
				//echo "inserted Successfully";
				redirect('tests/lipid_profile/'.$patient_id);
				
			}
		}

		//Print Lipid Profile
		public function print_lipid_profile($patient_id,$lipid_id){

			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['patient'] = $this->patient_model->get_patient($patient_id);
			$data['lipid_profile'] = $this->lipid_model->get_lipid_profile($lipid_id);
			//print_r($data['lipid_profile']);
			$this->load->view('templates/header');

			if($data['patient']){
				$data['title'] = 'Details of '.$data['patient']->name;
				$this->load->view('patients/details',$data);
				$this->load->view('tests/lipid_profile/print_lipid_profile',$data);
			}
			else{
				echo "not found";
			}

			$this->load->view('templates/footer');
			
		}

		//Delete Lipid Profile
		public function delete_lipid_profile($patient_id,$lipid_id){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$result = $this->lipid_model->delete_lipid($lipid_id);
			redirect('tests/lipid_profile/'.$patient_id);

		}

		//------------------------------------------------------- LIVER FUNCTION  TEST ---------------------------------------------------------------//

		//Liver Function Test
		public function lft($patient_id){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$data['patient_id'] = $patient_id;
			$data['patient'] = $this->patient_model->get_patient($patient_id);
			$data['tests'] = $this->lft_model->get_lfts($patient_id);
			$data['title'] = "Liver Function Test";

			//print_r($data['tests']);
			$this->load->view('templates/header');
			$this->load->view('patients/details',$data);
			$this->load->view('tests/liver_function_test/old_lft',$data);
			$this->load->view('templates/footer');
		}

		//New LIVER FUNCTION TEST
		public function new_lft($patient_id){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['title'] = 'Liver Function Test';
			$data['patient_id'] = $patient_id;
			$this->form_validation->set_rules('hid_patient_id','hid_patient_id','required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('tests/liver_function_test/new_lft',$data);
				$this->load->view('templates/footer');
			}
			else{
				$data = array(
								'bil_tot' => $this->input->post('bil_tot'),
								'bil_dir' => $this->input->post('bil_dir'),
								'bil_indir' => $this->input->post('bil_indir'),
								'sgot' => $this->input->post('sgot'),
								'sgpt' => $this->input->post('sgpt'),
								'alk_phos' => $this->input->post('alk_phos'),
								'pro_tot' => $this->input->post('pro_tot'),
								'albumin' => $this->input->post('albumin'),
								'globulin' => $this->input->post('globulin'),
								'ag_ratio' => $this->input->post('ag_ratio')
								);

				//print_r($data);

				$this->lft_model->new_lft($patient_id,$data);
				//echo "inserted Successfully";
				redirect('tests/lft/'.$patient_id);
				
			}
		}

		//Print Liver Function Test
		public function print_lft($patient_id,$lft_id){

			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['patient'] = $this->patient_model->get_patient($patient_id);
			$data['lft'] = $this->lft_model->get_lft($lft_id);
			//print_r($data['lipid_profile']);
			$this->load->view('templates/header');

			if($data['patient']){
				$data['title'] = 'Details of '.$data['patient']->name;
				$this->load->view('patients/details',$data);
				$this->load->view('tests/liver_function_test/print_lft',$data);
			}
			else{
				echo "not found";
			}

			$this->load->view('templates/footer');
			
		}

		//Delete LFT
		public function delete_lft($patient_id,$lft_id){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$result = $this->lft_model->delete_lft($lft_id);
			redirect('tests/lft/'.$patient_id);

		}


		//------------------------------------------------------- COMPLETE BLOOD COUNT ---------------------------------------------------------------//

		//COMPLETE BLOOD COUNT
		public function cbc($patient_id){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$data['patient_id'] = $patient_id;
			$data['patient'] = $this->patient_model->get_patient($patient_id);
			$data['tests'] = $this->cbc_model->get_cbcs($patient_id);
			$data['title'] = "Complete Blood Count";

			//print_r($data['tests']);
			$this->load->view('templates/header');
			$this->load->view('patients/details',$data);
			$this->load->view('tests/complete_blood_count/old_cbc',$data);
			$this->load->view('templates/footer');
		}

		//New Complete Blood Count
		public function new_cbc($patient_id){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['title'] = 'Complete Blood Count';
			$data['patient_id'] = $patient_id;
			$this->form_validation->set_rules('hid_patient_id','hid_patient_id','required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('tests/complete_blood_count/new_cbc',$data);
				$this->load->view('templates/footer');
			}
			else{
				$data = array(
								'hemoglobin' => $this->input->post('hemoglobin'),
								'hematocrit' => $this->input->post('hematocrit'),
								'rbc_count' => $this->input->post('rbc_count'),
								'mcv' => $this->input->post('mcv'),
								'mch' => $this->input->post('mch'),
								'mchc' => $this->input->post('mchc'),
								'rdw_cv' => $this->input->post('rdw_cv'),
								'platelet_count' => $this->input->post('platelet_count'),
								'total_leucocyte_count' => $this->input->post('total_leucocyte_count')
								);

				//print_r($data);

				$this->cbc_model->new_cbc($patient_id,$data);
				//echo "inserted Successfully";
				redirect('tests/cbc/'.$patient_id);
				
			}
		}

		//Print Complete Blood Count
		public function print_cbc($patient_id,$cbc_id){

			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$data['patient'] = $this->patient_model->get_patient($patient_id);
			$data['cbc'] = $this->cbc_model->get_cbc($cbc_id);
			//print_r($data['lipid_profile']);
			$this->load->view('templates/header');

			if($data['patient']){
				$data['title'] = 'Details of '.$data['patient']->name;
				$this->load->view('patients/details',$data);
				$this->load->view('tests/complete_blood_count/print_cbc',$data);
			}
			else{
				echo "not found";
			}

			$this->load->view('templates/footer');
			
		}

		//Delete CBC
		public function delete_cbc($patient_id,$cbc_id){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$result = $this->cbc_model->delete_cbc($cbc_id);
			redirect('tests/cbc/'.$patient_id);

		}


		//------------------------------------------------------- DIFFERENTIAL LEUKOCYTE COUNT ---------------------------------------------------------------//

		//DIFFERENTIAL LEUKOCYTE COUNT
		public function dlc($patient_id){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$data['patient_id'] = $patient_id;
			$data['patient'] = $this->patient_model->get_patient($patient_id);
			$data['tests'] = $this->cbc_model->get_dlcs($patient_id);
			$data['title'] = "Differential Leukocyte Count";

			//print_r($data['tests']);
			$this->load->view('templates/header');
			$this->load->view('patients/details',$data);
			$this->load->view('tests/differential_leukocyte_count/old_dlc',$data);
			$this->load->view('templates/footer');
		}

	}