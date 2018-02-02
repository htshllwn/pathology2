<?php
	class Account_model extends CI_Model{
		public function __construct(){
			$this->load->database();
        }

        //Get All Accounts
        public function get_accounts($lab_id = NULL) {

			if($lab_id != NULL) {
				$this->db->where('lab_id',$lab_id);
			}
			$this->db->order_by('date','desc');

            $query = $this->db->get('accounts');
			return ($query->result());
        }

        //Create New Account
		public function register_account($data){
			$this->db->insert('accounts',$data);
		}

		//Edit lab
		public function edit_account($acc_id, $data){
			$this->db->set($data);
			$this->db->where('id',$acc_id);
			$this->db->update('accounts');
		}


        //Get single account details
		public function get_account($acc_id){
			$this->db->where('id',$acc_id);
			$query = $this->db->get('accounts');
			return $query->row();

			if($query->num_rows() == 1){
				return $query->row(0);
			}
			else{
				return false;
			}
		}
		
		//Get Total Amount of a LAB
		public function get_total_amount($lab_id){
			
			$this->db->select_sum('amount');
			$this->db->from('accounts');
			$this->db->where('lab_id',$lab_id);
			$query = $this->db->get();
			return $query->row()->amount;

		}

		//Get Total Due of a LAB
		public function get_total_due($lab_id){
			
			$this->db->select_sum('due');
			$this->db->from('accounts');
			$this->db->where('lab_id',$lab_id);
			$query = $this->db->get();
			return $query->row()->due;

		}


        //Delete Account
		public function delete_account($acc_id){
			$query = $this->db->where('id',$acc_id);
			$query = $this->db->get('accounts');

			if($query->num_rows() == 1){
				$this->db->where('id',$acc_id);
				return $this->db->delete('accounts');
				//echo "deleted";
				
			}
			else{
				return 0;
			}
		}

    }