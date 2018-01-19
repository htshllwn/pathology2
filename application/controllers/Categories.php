<?php
	class Categories extends CI_Controller{
		public function index(){
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			//$data['patient'] = $this->patient_model->get_patient(1);
			$data['tests'] = $this->tests_model->get_all_tests();
			$data['access'] = 'edit';
			$this->load->view('templates/header');
			$this->load->view('tests/categories',$data);
		}

		//Delete Test Category
		public function delete($slug){
			$this->category_model->delete_category($slug);
			redirect('categories');
		}

		//New Test Category
		public function new(){
			$data['title'] = 'New Test Category';

			$this->form_validation->set_rules('category_name','Category Name','required');
			$this->form_validation->set_rules('no_of_tests','No. of Tests','required');

			/*
			$this->load->view('templates/header');
			$this->load->view('categories/new', $data);
			$this->load->view('templates/footer');
			*/

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('categories/new', $data);
				$this->load->view('templates/footer');
			}
			else{
				$cat_data['test_name'] = $this->input->post('category_name');
				$cat_data['test_slug'] = strtolower(url_title($this->input->post('category_name')));
				$no_of_tests = $this->input->post('no_of_tests');

				//print_r($cat_data);
				$this->category_model->new_category($cat_data); //Working
				$this->category_model->new_test_table($cat_data['test_slug']); //Working
				$this->category_model->new_test_conditions_table($cat_data['test_slug']); //Working
				$rows = $no_of_tests;

				for($i=1;$i<=$rows;$i++){
					$temp = "row".$i;
					//echo "<br><br><br>";
					$table_data['col_name'] = $this->input->post($temp.'input1');
					$table_data['col_slug'] = strtolower(url_title($this->input->post($temp.'input1')));
					$table_data['units'] = $this->input->post($temp.'input3');
					$table_data['reference'] = $this->input->post($temp.'input2');
					//print_r($table_data);
					$this->category_model->insert_into_test_table($cat_data['test_slug'],$table_data); //Working

					$no_of_conditions = $this->input->post($temp."hid_con_count");
					for($j=1;$j<=$no_of_conditions;$j++){
						$con_temp = $temp."con".$j;
						$condition_data['col_slug'] = $table_data['col_slug'];
						$condition_data['con1'] = $this->input->post($con_temp."input4");
						$condition_data['val1'] = $this->input->post($con_temp."input5");
						$condition_data['and_or'] = $this->input->post($con_temp."input10");
						$condition_data['con2'] = $this->input->post($con_temp."input7");
						$condition_data['val2'] = $this->input->post($con_temp."input8");
						$condition_data['result'] = $this->input->post($con_temp."input6");
						$show_hide = $this->input->post($con_temp."input11");

						if($condition_data['and_or'] == "NULL"){
							$condition_data['and_or'] = NULL;
							$condition_data['con2'] = NULL;
							$condition_data['val2'] = NULL;
						}

						if($show_hide == "SHOW"){
							$condition_data['show_y_n'] = 'Y';
						}
						else{
							$condition_data['show_y_n'] = 'N';
						}
						//echo "<br>";
						//print_r($condition_data);
						$this->category_model->insert_into_test_conditions_table($cat_data['test_slug'],$condition_data); //Working
					}
					
					//echo "<br>";
					//print_r($no_of_conditions);
					
				}

				$this->category_model->new_test_details_table($cat_data['test_slug']); //Working
				redirect('categories/edit_interpretations/'.$cat_data['test_slug']);
			}
		}

		//Edit Interpretations
		public function edit_interpretations($test_slug){
			//print_r($test_slug);
			//Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$data['title'] = 'Interpretations';
			$data['slug'] = $test_slug;
			$data['columns'] = $this->tests_model->get_column_names($test_slug);


			$this->form_validation->set_rules('hid_slug','hid_slug','required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('categories/interpretations',$data);
				$this->load->view('templates/footer');
			}
			else {
				echo "Submitted";
				$datainsert = array();
				foreach($data['columns'] as $column){
					$datainsert[$column->col_slug] = $this->input->post($column->col_slug);
				}
				//print_r($datainsert);
				$this->category_model->set_interpretations($test_slug,$data['columns'],$datainsert);
				redirect('categories');

			}

		}
	}