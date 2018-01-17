
<?php $interpretations = "<strong><u>Interpretation(s)</u></strong><br><ul>"; ?>

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
			<?php $interpretations .= "<li>".$column->interpretations."<br>"; ?>
		<?php endif; ?>
		<br>
	<?php endforeach; ?>

	<?php $interpretations .= "</ul>"; ?>
	<div class="row">
		<?php echo $interpretations; ?>
	</div>
	<br>
	<br>
	<button onclick="window.print();" class="btn btn-primary printButton">Print</button>
	<br><br>
</div>