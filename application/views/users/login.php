<?php echo validation_errors(); ?>
<div class="row microscopebg">
    <div class="col-md-3">
          
    </div>
      
	<div class="text-center col-md-6">
		<h1 class="PageTitle"><?= $title ?></h1>
		<hr>
		<div class="FormBorder">
		<?php echo form_open('users/login'); ?>
	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">Username</label>
	        	</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="username" class="form-control" placeholder="Enter Username" required>
				</div>
	        </div>
	        <br><hr>

	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">Password</label>
	       		</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
				</div>
	        </div>
	        <br><hr>

	        <button type="submit" class="btn btn-primary">Login</button>
	    <?php echo form_close(); ?>
	    </div>
	</div>

	<div class="col-md-3">
         
    </div>
    <br><br><br>
</div>

