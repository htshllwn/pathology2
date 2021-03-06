
<?php $interpretations = "<strong><u>Interpretation(s)</u></strong><br><ul>"; ?>
<?php $pass = FALSE; ?>
<div class="container">
	<strong><?= strtoupper($title) ?></strong>
	<br>
	<div class="row report-head">
		<div class="col-md-4">
			<strong>Tests</strong>
		</div>

		<div class="col-md-2">
			<strong>Results</strong>
		</div>
		
		<div class="col-md-1">
		</div>

		<div class="col-md-4">
			<strong>Biological Reference Range</strong>
		</div>

		<div class="col-md-1">
			<strong>Units</strong>
		</div>
	</div>
	<br>

	<?php foreach($columns as $column): ?>
		<?php $temp_slug = $column->col_slug; ?>
		<?php if($test_details->$temp_slug != NULL): ?>

			<?php $result = ''; ?>
			<?php $bold = FALSE; ?>
					<?php $conditions = $this->tests_model->get_conditions($slug,$temp_slug); ?>
					<?php foreach($conditions as $condition):?>
						<?php
								$temp_con_string = $test_details->$temp_slug;
								switch($condition->con1){

									case 'LESSERTHAN':
										$temp_con_string .= " < ";
										break;

									case 'LESSERTHANEQUAL':
										$temp_con_string .= " <= ";
										break;

									case 'GREATERTHAN':
										$temp_con_string .= " > ";
										break;

									case 'GREATERTHANEQUAL':
										$temp_con_string .= " >= ";
										break;

									case 'EQUAL':
										$temp_con_string .= " == ";
										break;
								}
								$temp_con_string .= $condition->val1;

								if($condition->and_or != NULL){
									switch($condition->and_or){
										
										case 'AND':
											$temp_con_string .= " && ";
											break;

										case 'OR':
											$temp_con_string .= " || ";
											break;
									}
									$temp_con_string .= $test_details->$temp_slug;
									switch($condition->con2){

										case 'LESSERTHAN':
											$temp_con_string .= " < ";
											break;

										case 'LESSERTHANEQUAL':
											$temp_con_string .= " <= ";
											break;

										case 'GREATERTHAN':
											$temp_con_string .= " > ";
											break;

										case 'GREATERTHANEQUAL':
											$temp_con_string .= " >= ";
											break;

										case 'EQUAL':
											$temp_con_string .= " == ";
											break;
									}
									$temp_con_string .= $condition->val2;
								}
								//echo $temp_con_string;
								$temp_condition = eval("return(".$temp_con_string.");");
								if($temp_condition){
										//echo 'inside val1';
										if($condition->show_y_n == 'Y'){

											$result = '<strong>'.ucfirst(strtolower($condition->result)).'</strong>';
											$bold = TRUE;
											break;
										}
									}
							
						?>
					<?php endforeach; ?>

			<div class="row">

				<div class="col-md-4">
					<?php echo strtoupper($column->col_name); ?>
				</div>

				<div class="col-md-2">
					<?php if($bold): ?>
						<strong><?php echo $test_details->$temp_slug ?></strong>
					<?php else: ?>
						<?php echo $test_details->$temp_slug ?>
					<?php endif; ?>
				</div>

				<div class="col-md-1">
					<?php echo $result; ?>
				</div>

				<div class="col-md-4">
					<?php echo $column->reference; ?>
				</div>

				<div class="col-md-1">
					<?php echo $column->units; ?>
				</div>
			</div>
			<?php
				if($column->interpretations != NULL){
					$pass = TRUE;
					$interpretations .= "<li>".$column->interpretations."<br>";
				}          
        	?>
			<br>
		<?php endif; ?>
		
	<?php endforeach; ?>

	<?php $interpretations .= "</ul>"; ?>
	<div class="row">
		<?php 
            if($pass){
                echo $interpretations;
            }    
        ?>
	</div>
	<br>
	<br>

	<div>
	<div class="row">

		<div class="col-md-6">
			<img src="<?php echo base_url().'assets/img/Sign_LT.jpg'; ?>" width="200" height="100"><br>
		</div>
		
		<div class="col-md-6">
			<img src="<?php echo base_url().'assets/img/Sign_MD.jpg'; ?>" width="200" height="100" align="right" style="margin-right: 20px;"><br>
		</div>

	</div>

	<div class="row">

			<div class="col-md-6">
				<h4 style="padding-left: 25px;">
					Lab Technician<br>
					D.Kushwah<br>
					Reg. No. 11269/2010<br>
				</h4>
			</div>
			
			<div class="col-md-6">
			<h4 style="float: right; padding-right: 0px;">
				<span style="text-align: left; padding-right: 0px;">
					Consultant Pathologist<br>
					Dr. Rajesh Kumar, <small>MBBS, MD</small><br>
					Reg. No. MP 2808<br>
				</span>
			</h4>
			</div>
	
	</div>

	
	</div>

	<button onclick="window.print();" class="btn btn-primary printButton">Print</button>
	<br><br>
</div>