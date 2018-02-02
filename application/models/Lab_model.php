<?php
	class Lab_model extends CI_Model{
		public function __construct(){
			$this->load->database();
        }

        //Create New Lab
		public function register_lab($data){
			$this->db->insert('labs',$data);
		}

		//Edit lab
		public function edit_lab($lab_id, $data){
			$this->db->set($data);
			$this->db->where('id',$lab_id);
			$this->db->update('labs');
		}

        //Get All Labs
        public function get_labs() {
            $query = $this->db->get('labs');
			return ($query->result());
        }

        //Get single lab details
		public function get_lab($lab_id){
			$this->db->where('id',$lab_id);
			$query = $this->db->get('labs');
			return $query->row();

			if($query->num_rows() == 1){
				return $query->row(0);
			}
			else{
				return false;
			}
        }
        
        //Delete lab
		public function delete_lab($lab_id){
			$query = $this->db->where('id',$lab_id);
			$query = $this->db->get('labs');

			if($query->num_rows() == 1){
				$this->db->where('id',$lab_id);
				return $this->db->delete('labs');
				//echo "deleted";
				
			}
			else{
				return 0;
			}
		}
    }