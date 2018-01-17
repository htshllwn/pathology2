<?php
	class Cbc_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		//Insert New CBC Record
		public function new_cbc($patient_id,$data){
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
				$this->db->insert('complete_blood_count',$data);	
				echo "data inserted";
			}
			
		}

		//Get All CBCs of a patient_id
		public function get_cbcs($patient_id){
			$this->db->where('patient_id',$patient_id);
			$this->db->order_by('created_at','DESC');
			$query = $this->db->get('complete_blood_count');
			return $query->result();
		}

		//Get Specific CBC of a test id
		public function get_cbc($id){
			$this->db->where('id',$id);
			
			$query = $this->db->get('complete_blood_count');

			if($query->num_rows() == 1){
				return $query->row(0);
				//echo $query->row(0);
			}
			else{
				return FALSE;
			}
		}


		//Delete CBC with id
		public function delete_cbc($id){
			$query = $this->db->where('id',$id);
			
			$query = $this->db->get('complete_blood_count');

			if($query->num_rows() == 1){
				$this->db->where('id',$id);
				return $this->db->delete('complete_blood_count');
				
			}
			else{
				return 0;
			}
		}

		//Delete patient
		public function delete_patient($patient_id){
			$query = $this->db->where('patient_id',$patient_id);
			$query = $this->db->get('complete_blood_count');

			if($query->num_rows() >= 1){
				$this->db->where('patient_id',$patient_id);
				return $this->db->delete('complete_blood_count');
				//echo "deleted";
				
			}
			else{
				return 0;
			}
		}

}


