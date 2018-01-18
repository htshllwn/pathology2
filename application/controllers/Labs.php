<?php
    class Labs extends CI_Controller {
        public function index() {
            //echo "In Labs";

            $this->load->view('templates/header');
            $this->load->view('labs/all');
            $this->load->view('templates/footer');
        }
    }