<div class="container">

<h2><?= $title ?></h2><br><br>

<?php echo form_open('tests/new_lipid_profile/'.$patient_id); ?>

			<input type="hidden" name="hid_patient_id" class="form-control" value="<?php echo $patient_id ?>">
	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">CHOLESTEROL TOTAL</label>
	        	</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="cholestrol_total" class="form-control">
				</div>
	        </div>
	        <br><hr>

	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">TRGLYCERIDES</label>
	       		</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="triglycerides" class="form-control">
				</div>
	        </div>
	        <br><hr>

	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">CHOLESTEROL HDL, DIRECT</label>
	        	</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="cholestrol_hdl" class="form-control">
				</div>
	        </div>
	        <br><hr>

	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">CHOLESTEROL LDL, CALCULATED</label>
	        	</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="cholestrol_ldl" class="form-control">
				</div>
	        </div>
	        <br><hr>

	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">CHOLESTEROL VLDL, CALCULATED</label>
	        	</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="cholestrol_vldl" class="form-control">
				</div>
	        </div>
	        <br><hr>

	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">CHOL HDL RATIO</label>
	        	</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="chol_hdl_ratio" class="form-control">
				</div>
	        </div>
	        <br><hr>
	       
	        <button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close(); ?>

</div>