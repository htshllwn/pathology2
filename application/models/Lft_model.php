<?php
	class Lft_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		//Insert New LFT Record
		public function new_lft($patient_id,$data){
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
			$data['patient_id'] = $patient_id;
			//echo $pass;
			//print_r($data);
			
			if ($pass == 1) {
				$this->db->insert('liver_function_test',$data);	
				echo "data inserted";
			}
			
		}

		//Get All LFTs of a patient_id
		public function get_lfts($patient_id){
			$this->db->where('patient_id',$patient_id);
			$this->db->order_by('created_at','DESC');
			$query = $this->db->get('liver_function_test');
			return $query->result();
		}

		//Get Specific LFT of a test id
		public function get_lft($id){
			$this->db->where('id',$id);
			
			$query = $this->db->get('liver_function_test');

			if($query->num_rows() == 1){
				return $query->row(0);
				//echo $query->row(0);
			}
			else{
				return FALSE;
			}
		}

		//Delete LFT with id
		public function delete_lft($id){
			$query = $this->db->where('id',$id);
			
			$query = $this->db->get('liver_function_test');

			if($query->num_rows() == 1){
				$this->db->where('id',$id);
				return $this->db->delete('liver_function_test');
				
			}
			else{
				return 0;
			}
		}

		//Delete patient
		public function delete_patient($patient_id){
			$query = $this->db->where('patient_id',$patient_id);
			$query = $this->db->get('liver_function_test');

			if($query->num_rows() >= 1){
				$this->db->where('patient_id',$patient_id);
				return $this->db->delete('liver_function_test');
				//echo "deleted";
				
			}
			else{
				return 0;
			}
		}

	}
