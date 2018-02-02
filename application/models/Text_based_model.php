<?php 
    class Text_based_model extends CI_Model{

        public function __construct(){
            $this->load->database();
        }

        //Get the names of all tests
		public function get_all_tests(){
			$this->db->order_by('test_name');
			$query = $this->db->get('text_based');
			return ($query->result());
        }
        
        //Get the name of test
		public function get_test($slug){
			$this->db->where('test_slug',$slug);
			$query = $this->db->get('text_based');
			return ($query->result());
		}

        //Get the names of all tests
		public function get_all_tb_tests(){
			$this->db->order_by('test_name');
			$query = $this->db->get('text_based');
			return ($query->result());
        }

        //Get column names by slug
		public function get_column_names($slug){
			$tb_name = $slug;
			$query = $this->db->get($tb_name);
			return ($query->result());
		}
        
        //Insert new Category in text_based table
		public function new_text_based($data){
            $this->db->insert('text_based',$data);
            //echo "Inserted";
        }
        
        //Create new test table
		public function new_test_table($tb_name){

			$this->load->dbforge();

			$fields['id'] = array(
									'type' => 'INT',
									'constraint' => 11,
									'null' => FALSE,
									'auto_increment' =>TRUE
										);

			$fields['col_name'] = array(
									'type' => 'VARCHAR',
									'constraint' => 255,
									'null' => FALSE
										);

			$fields['col_slug'] = array(
									'type' => 'VARCHAR',
									'constraint' => 255,
									'null' => FALSE
										);

			$fields['cat'] = array(
									'type' => 'VARCHAR',
									'constraint' => 255,
									'null' => FALSE
										);

			$fields['interpretations'] = array(
									'type' => 'text',
									'null' => TRUE
                                        );
                            
			$this->dbforge->add_field($fields);
			$this->dbforge->add_key('id',TRUE);
			$this->dbforge->create_table($tb_name);
        }
        
        //Insert columns info into test table
		public function insert_into_test_table($tb_name,$data){
			$this->db->insert($tb_name,$data);
        }
        
        //Delete text_based
		public function delete_text_based($tb_slug){
			$this->load->dbforge();
			$this->db->where('test_slug',$tb_slug);
			$this->db->delete('text_based');
			$this->dbforge->drop_table($tb_slug,TRUE);
        }
        
        
        //Set Interpretations
		public function set_interpretations($tb_slug,$columns,$data){

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


			foreach($columns as $column){
				//print_r($data[$column->col_slug]);
				$this->db->set('interpretations', $data[$column->col_slug]);
				$this->db->where('col_slug', $column->col_slug);
				$this->db->update($tb_slug);
			}
		}

    }