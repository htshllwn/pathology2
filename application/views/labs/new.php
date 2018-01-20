<div class="container">

    <h2>Lab Details</h2><br><br>

    

    <?php
			if($mode === 'edit'){
				echo form_open('labs/new_lab/'.$lab->id);
			}
			else {
				echo form_open('labs/new_lab');
			}
			 
    ?>

        <div class="form-group">
            <div class="col-xs-6 col-md-4">
                <label class="FormLabel">Lab Name</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <input type="text" name="name" class="form-control" value="<?php if($mode === 'edit') { echo $lab->lab_name; } ?>">
            </div>
        </div>
        <br><hr>

        <div class="form-group">
            <div class="col-xs-6 col-md-4">
                <label class="FormLabel">Lab Address</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <input type="text" name="add" class="form-control" value="<?php if($mode === 'edit') { echo $lab->lab_add; } ?>">
            </div>
        </div>
        <br><hr>

        <div class="form-group">
            <div class="col-xs-6 col-md-4">
                <label class="FormLabel">Lab Contact</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <input type="text" name="phone" class="form-control" value="<?php if($mode === 'edit') { echo $lab->lab_phone; } ?>">
            </div>
        </div>
        <br><hr>

        <div class="form-group">
            <div class="col-xs-6 col-md-4">
                <label class="FormLabel">Lab Email</label>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <input type="text" name="email" class="form-control" value="<?php if($mode === 'edit') { echo $lab->lab_email; } ?>">
            </div>
        </div>
        <br><hr>

        <button type="submit" class="btn btn-primary">Submit</button>
    

    <?php echo form_close(); ?>

</div>