<div class="container">

    <h2>Account Details</h2><br><br>

    

    <?php
			if($mode === 'edit'){
				echo form_open('accounts/new_account/'.$account->id);
			}
			else {
				echo form_open('accounts/new_account');
			}
			 
    ?>

        <div class="form-group">
            <div class="col-xs-6 col-md-4">
                <label class="FormLabel">Patient Name</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <input type="text" name="patient_name" class="form-control" value="<?php if($mode === 'edit') { echo $account->patient_name; } ?>">
            </div>
        </div>
        <br><hr>

        <div class="form-group">
            <div class="col-xs-6 col-md-4">
                <label class="FormLabel">Test Name</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <input type="text" name="test_name" class="form-control" value="<?php if($mode === 'edit') { echo $account->test_name; } ?>">
            </div>
        </div>
        <br><hr>

        <div class="form-group">
            <div class="col-xs-6 col-md-4">
                <label class="FormLabel">Lab</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <select name="lab_id" class="form-control">

                    <?php foreach($labs as $lab): ?>

                        <option value="<?php echo $lab->id; ?>" 
							<?php if($mode === 'edit') {
								if($account->lab_id === $lab->id){
									echo 'selected="selected"';
								}
							 } ?> 
						><?php echo $lab->lab_name; ?></option>

                    <?php endforeach; ?>

                </select>
            </div>
        </div>
        <br><hr>

        <div class="form-group">
            <div class="col-xs-6 col-md-4">
                <label class="FormLabel">Amount</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <input type="text" name="amount" class="form-control" value="<?php if($mode === 'edit') { echo $account->amount; } ?>">
            </div>
        </div>
        <br><hr>

        <div class="form-group">
            <div class="col-xs-6 col-md-4">
                <label class="FormLabel">Due</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <input type="text" name="due" class="form-control" value="<?php if($mode === 'edit') { echo $account->due; } ?>">
            </div>
        </div>
        <br><hr>

        <div class="form-group">
            <div class="col-xs-6 col-md-4">
                <label class="FormLabel">Date</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <input type="date" name="date" class="form-control" value="<?php if($mode === 'edit') { echo $account->date; } ?>">
            </div>
        </div>
        <br><hr>

        

        <button type="submit" class="btn btn-primary">Submit</button>
    

    <?php echo form_close(); ?>

</div>