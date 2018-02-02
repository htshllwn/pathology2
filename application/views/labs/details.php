<div class="container">

	<div class="row patient-details" style="text-transform: uppercase;">
		<div class="col-md-7">
			<strong><p>Name : <?php echo $lab->lab_name; ?></p></strong>
			<p>Add : <?php echo $lab->lab_add; ?></p>
		</div>
		<div class="col-md-5">
			<p>Mobile : <?php echo $lab->lab_phone; ?></p>
			<p>Email : <span style="text-transform: lowercase;"><?php echo $lab->lab_email; ?></span></p>
		</div>
	</div>
	<br>

    <div>
        <p><strong>Total Amount: </strong><?= $total_amount ?></p>
        <p><strong>Total Due: </strong><?= $total_due ?></p>
    </div>
    <br>

</div>