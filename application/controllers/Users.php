<?php 
	class Users extends CI_Controller{

		//Admin Login
		public function login(){

			$data['title'] = 'PATHOLOGY';

			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/login',$data);
				$this->load->view('templates/footer');
			}
			else{
				//Get Username
				$username = $this->input->post('username');
				//Get and encrypt password
				$password = md5($this->input->post('password'));

				//Login User
				$user_id = $this->user_model->login($username,$password);

				if($user_id){
					//Create Session
					$user_data = array(
										'user_id' => $user_id,
										'username' => $username,
										'logged_in' => TRUE
										);
					$this->session->set_userdata($user_data);

					//Set Message
					$this->session->set_flashdata('user_loggedin','You have successfully logged in');
					redirect('patients/new_patient');
				}
				else{
					//Set Message
					$this->session->set_flashdata('login_failed','Invalid username/password');
					redirect('users/login');
				}
			}

			//redirect('patients/new_patient');
		}

		public function logout(){
			//Unset user_data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('username');

			//Set message
			$this->session->set_flashdata('user_loggedout','You are now logged out');
			redirect('users/login');
		}
	}