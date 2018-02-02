<div class="container">

<h2><?= $title ?></h2><br><br>

<?php echo form_open('tests/new_cbc/'.$patient_id); ?>

			<input type="hidden" name="hid_patient_id" class="form-control" value="<?php echo $patient_id ?>">
	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">HEMOGLOBIN</label>
	        	</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="hemoglobin" class="form-control">
				</div>
	        </div>
	        <br><hr>

	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">HEMATOCRIT</label>
	       		</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="hematocrit" class="form-control">
				</div>
	        </div>
	        <br><hr>

	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">RBC COUNT</label>
	        	</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="rbc_count" class="form-control">
				</div>
	        </div>
	        <br><hr>

	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">MCV</label>
	        	</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="mcv" class="form-control">
				</div>
	        </div>
	        <br><hr>

	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">MCH</label>
	        	</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="mch" class="form-control">
				</div>
	        </div>
	        <br><hr>

	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">MCHC</label>
	        	</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="mchc" class="form-control">
				</div>
	        </div>
	        <br><hr>

	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">RDW-CV</label>
	        	</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="rdw_cv" class="form-control">
				</div>
	        </div>
	        <br><hr>

			<div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">PLATELET COUNT</label>
	        	</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="platelet_count" class="form-control">
				</div>
	        </div>
	        <br><hr>

	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">TOTAL LEUCOCYTE COUNT</label>
	        	</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="total_leucocyte_count" class="form-control">
				</div>
	        </div>
	        <br><hr>
	       
	        <button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close(); ?>

</div>