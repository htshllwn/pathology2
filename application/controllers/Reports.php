<?php 
	class Reports extends CI_Controller{
		public function new_report(){
			$this->load->view('templates/header');
			$this->load->view('reports/new');
			$this->load->view('templates/footer');
		}
	}