<?php
	class Category_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		//Insert new Category in tests table
		public function new_category($data){
			$this->db->insert('tests',$data);
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

			$fields['units'] = array(
									'type' => 'VARCHAR',
									'constraint' => 255,
									'null' => FALSE
										);

			$fields['reference'] = array(
									'type' => 'text',
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

		//Create new test-conditions table
		public function new_test_conditions_table($tb_name){

			$tb_name .= '-conditions';
			$this->load->dbforge();

			$fields['id'] = array(
									'type' => 'INT',
									'constraint' => 11,
									'null' => FALSE,
									'auto_increment' =>TRUE
										);

			$fields['col_slug'] = array(
									'type' => 'VARCHAR',
									'constraint' => 255,
									'null' => FALSE
										);

			$fields['con1'] = array(
									'type' => 'VARCHAR',
									'constraint' => 255,
									'null' => FALSE
										);

			$fields['val1'] = array(
									'type' => 'FLOAT',
									'null' => FALSE
										);

			$fields['and_or'] = array(
									'type' => 'VARCHAR',
									'constraint' => 255,
									'null' => TRUE
										);

			$fields['con2'] = array(
									'type' => 'VARCHAR',
									'constraint' => 255,
									'null' => TRUE
										);

			$fields['val2'] = array(
									'type' => 'FLOAT',
									'null' => TRUE
										);

			$fields['result'] = array(
									'type' => 'VARCHAR',
									'constraint' => 255,
									'null' => FALSE
										);

			$fields['show_y_n'] = array(
									'type' => 'CHAR',
									'constraint' => 1,
									'null' => FALSE
										);

			$this->dbforge->add_field($fields);
			$this->dbforge->add_key('id',TRUE);
			$this->dbforge->create_table($tb_name);
		}

		//Create new test-detials table
		public function new_test_details_table($tb_name){
			
			$this->load->dbforge();

			$fields['id'] = array(
									'type' => 'INT',
									'constraint' => 11,
									'null' => FALSE,
									'auto_increment' =>TRUE
										);

			$fields['patient-id'] = array(
									'type' => 'INT',
									'constraint' => 11,
									'null' => FALSE
										);

			$cols = $this->get_col_slugs($tb_name);
			foreach($cols as $col){
				//print_r($col->col_slug);
				$temp_col = $col->col_slug;

				$fields[$temp_col] = array(
										'type' => 'FLOAT',
										'null' => TRUE
											);
				//print_r($fields[$temp_col]);
			}
			

			//print_r($cols);
			$tb_name .= '-details';
			$this->dbforge->add_field($fields);
			$this->dbforge->add_field("`created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP");
			$this->dbforge->add_key('id',TRUE);
			$this->dbforge->add_key('patient-id');
			$this->dbforge->create_table($tb_name);
			$this->db->query("ALTER TABLE `".$tb_name."`
  ADD CONSTRAINT `".$tb_name."_ibfk_1` FOREIGN KEY (`patient-id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;");
		}

		//Insert columns info into test table
		public function insert_into_test_table($tb_name,$data){
			$this->db->insert($tb_name,$data);
		}

		//Insert conditions into test-conditions table
		public function insert_into_test_conditions_table($tb_name,$data){
			$tb_name .= '-conditions';
			$this->db->insert($tb_name,$data);
		}

		//Get col_slugs of a test table
		public function get_col_slugs($tb_name){
			$query = $this->db->get($tb_name);
			return $query->result();
		}

		//Delete Category
		public function delete_category($tb_slug){
			$this->load->dbforge();
			$this->db->where('test_slug',$tb_slug);
			$this->db->delete('tests');
			$this->dbforge->drop_table($tb_slug.'-details',TRUE);
			$this->dbforge->drop_table($tb_slug.'-conditions',TRUE);
			$this->dbforge->drop_table($tb_slug,TRUE);
		}

		//Set Interpretations
		public function set_interpretations($tb_slug,$columns,$data){

			foreach($columns as $column){
				//print_r($data[$column->col_slug]);
				$this->db->set('interpretations', $data[$column->col_slug]);
				$this->db->where('col_slug', $column->col_slug);
				$this->db->update($tb_slug);
			}
		}

	}