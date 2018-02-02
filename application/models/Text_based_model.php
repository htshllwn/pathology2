<?php 
    class Text_based_model extends CI_Model{

        public function __construct(){
            $this->load->database();
        }

        //Get the names of all tests
		public function get_all_tb_tests(){
			$this->db->order_by('test_name');
			$query = $this->db->get('text_based');
			return ($query->result());
		}

    }