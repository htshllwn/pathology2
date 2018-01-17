<div class="container">
    
	

	<div class="row patient-details" style="text-transform: uppercase;">
		<div class="col-md-7">
			<strong><p>Name : <?php echo $patient->name; ?></p></strong>
			<p>Age : <?php echo $patient->age; ?></p>
			<p>Gender : <?php echo $patient->gender; ?></p>
		</div>
		<div class="col-md-5">
			<p>Mobile : <?php echo $patient->mobile; ?></p>
			<p>Referred By : <?php echo $patient->ref_by; ?></p>
			<p>Date : <?php echo date("d-m-Y H:i:s"); ?></p>
		</div>
	</div>
	<br>
</div>
	