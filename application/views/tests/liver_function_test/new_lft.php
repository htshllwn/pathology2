<div class="container">

<h2><?= $title ?></h2><br><br>

<?php echo form_open('tests/new_lft/'.$patient_id); ?>

			<input type="hidden" name="hid_patient_id" class="form-control" value="<?php echo $patient_id ?>">
	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">BILIRUBIN TOTAL</label>
	        	</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="bil_tot" class="form-control">
				</div>
	        </div>
	        <br><hr>

	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">BILIRUBIN DIRECT</label>
	       		</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="bil_dir" class="form-control">
				</div>
	        </div>
	        <br><hr>

	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">BILIRUBIN INDIRECT</label>
	        	</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="bil_indir" class="form-control">
				</div>
	        </div>
	        <br><hr>

	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">ASPARTATE AMINOTRANSFERASE (SGOT)</label>
	        	</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="sgot" class="form-control">
				</div>
	        </div>
	        <br><hr>

	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">ALANINE AMINOTRANSFERASE (SGPT)</label>
	        	</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="sgpt" class="form-control">
				</div>
	        </div>
	        <br><hr>

	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">ALKALINE PHOSPHATASE</label>
	        	</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="alk_phos" class="form-control">
				</div>
	        </div>
	        <br><hr>

	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">PROTEIN TOTAL</label>
	        	</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="pro_tot" class="form-control">
				</div>
	        </div>
	        <br><hr>

	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">ALBUMIN</label>
	        	</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="albumin" class="form-control">
				</div>
	        </div>
	        <br><hr>

	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">GLOBULIN</label>
	        	</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="globulin" class="form-control">
				</div>
	        </div>
	        <br><hr>

	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">A:G RATIO</label>
	        	</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="ag_ratio" class="form-control">
				</div>
	        </div>
	        <br><hr>
	       
	        <button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close(); ?>

</div>