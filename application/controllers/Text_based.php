<?php
    class Text_based extends CI_Controller{
        public function index() {
            //echo $slug;
            //Check Login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			//$data['patient'] = $this->patient_model->get_patient(1);
			$data['tb_tests'] = $this->text_based_model->get_all_tb_tests();
			//$data['access'] = 'edit';
			$this->load->view('templates/header');
			$this->load->view('text_based/all',$data);
		}
		

        //New or Edit Text Based Report
        public function new_text_based(){
            //echo "New or Edit Text Based";
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
				$this->load->view('text_based/new', $data);
				$this->load->view('templates/footer');
            }
            else{
				$cat_data['test_name'] = $this->input->post('category_name');
				$cat_data['test_slug'] = strtolower(url_title($this->input->post('category_name')));
				$no_of_tests = $this->input->post('no_of_tests');

				$this->text_based_model->new_text_based($cat_data); //Working
				$this->text_based_model->new_test_table($cat_data['test_slug']); //Working

				$rows = $no_of_tests;

				for($i=1;$i<=$rows;$i++){
					$temp = "row".$i;
					//echo "<br><br><br>";
					$table_data['col_name'] = $this->input->post($temp.'input1');
					$table_data['col_slug'] = strtolower(url_title($this->input->post($temp.'input1')));
					$table_data['cat'] = $this->input->post($temp.'input2');

					$this->text_based_model->insert_into_test_table($cat_data['test_slug'],$table_data); //Working

					}
					
					//echo "<br>";
					//print_r($no_of_conditions);
					redirect('text_based/edit_interpretations/'.$cat_data['test_slug']);
				}
                
			}
			
		//Delete Text Based
		public function delete_text_based($slug){
			$this->text_based_model->delete_text_based($slug);
			redirect('text_based');
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
			$data['columns'] = $this->text_based_model->get_column_names($test_slug);


			$this->form_validation->set_rules('hid_slug','hid_slug','required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('text_based/interpretations',$data);
				$this->load->view('templates/footer');
			}
			else {
				//echo "Submitted";
				$datainsert = array();
				foreach($data['columns'] as $column){
					$datainsert[$column->col_slug] = $this->input->post($column->col_slug);
				}
				//print_r($datainsert);
				$this->text_based_model->set_interpretations($test_slug,$data['columns'],$datainsert);
				redirect('text_based');

			}

		}


    }
    
