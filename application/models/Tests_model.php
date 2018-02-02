<?php
	class Tests_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		//Get the names of all tests
		public function get_all_tests(){
			$this->db->order_by('test_name');
			$query = $this->db->get('tests');
			return ($query->result());
		}

		//Get column names by slug
		public function get_column_names($slug){
			$tb_name = $slug;
			$query = $this->db->get($tb_name);
			return ($query->result());
		}

		//Get title by slug
		public function get_title($slug){
			$this->db->where('test_slug',$slug);
			$query = $this->db->get('tests');
			return ($query->row()->test_name);
		}

		//Get test details by slug and patient_id
		public function get_test_details($slug,$p_id){
			$tb_name = $slug.'-details';
			$this->db->where('patient-id',$p_id);
			$query = $this->db->get($tb_name);
			return ($query->result());
		}

		//Get Single Test Details
		public function get_single_test_details($slug,$p_id,$test_id){

			$this->db->where('id',$test_id);
			$this->db->where('patient-id',$p_id);
			$tb_name = $slug.'-details';
			$query = $this->db->get($tb_name);

			if($query->num_rows() == 1){
				return $query->row(0);
				//echo $query->row(0);
			}
			else{
				return FALSE;
			}
		}

		//Get Conditions based on table_slug and col_slug
		public function get_conditions($table_slug,$col_slug){
			$tb_name = $table_slug.'-conditions';
			$this->db->where('col_slug',$col_slug);
			$query = $this->db->get($tb_name);
			return ($query->result());
		}

		//New Test
		public function new_test($slug,$p_id,$data){
			$tb_name = $slug.'-details';

			foreach ($data as $index => $temp) {
				if($temp == ""){
					//echo $temp;
					$data[$index] = NULL;
					//echo $temp;
				}
			}
			$pass = 0;
			foreach ($data as $index => $temp) {
				//echo $data[$index];
				if($temp !=NULL){
					//echo $temp;
					$pass = 1;
					//echo $temp;
				}
				
			}
			$data['patient-id'] = $p_id;

			if ($pass == 1) {
				$this->db->insert($tb_name,$data);	
				//echo "data inserted";
			}
		}

		//Delete Test
		//Delete Lipid Profile with id
		public function delete_test($slug,$test_id){

			$tb_name = $slug.'-details';
			$query = $this->db->where('id',$test_id);
			
			$query = $this->db->get($tb_name);

			if($query->num_rows() == 1){
				$this->db->where('id',$test_id);
				return $this->db->delete($tb_name);
				
			}
			else{
				return 0;
			}
		}
	}