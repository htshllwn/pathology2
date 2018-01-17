<?php
	class Patient_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		//Create New Patient
		public function register_patient($data){
			$this->db->insert('patients',$data);
		}

		//Get all patients
		public function get_patients(){
			$this->db->order_by('created_at','DESC');
			$query = $this->db->get('patients');
			return $query->result();
		}

		//Get single patient details
		public function get_patient($patient_id){
			$this->db->where('id',$patient_id);
			$query = $this->db->get('patients');
			return $query->row();

			if($query->num_rows() == 1){
				return $query->row(0);
			}
			else{
				return false;
			}
		}

		//Delete patient
		public function delete_patient($id){
			$query = $this->db->where('id',$id);
			$query = $this->db->get('patients');

			if($query->num_rows() == 1){
				$this->db->where('id',$id);
				return $this->db->delete('patients');
				//echo "deleted";
				
			}
			else{
				return 0;
			}
		}
	}