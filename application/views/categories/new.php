<div id="container" class="container">
	<h2><?= $title ?></h2><br><br>
	<?php echo validation_errors(); ?>
	<?php echo form_open('categories/new_cat'); ?>
		<div  class="form-group">
	        	<div class="col-md-2">
	        		<label class="FormLabel">Category Name</label>
	        	</div>
				<div class="col-md-4">
					<input type="text" name="category_name" class="form-control">
				</div>
	    
	        	<div class="col-md-3">
	        		<label class="FormLabel">Number of Tests in Category</label>
	        	</div>
				<div class="col-md-3">
					<input type="text" id="input_no_of_tests" name="no_of_tests" class="form-control">
					

				</div>
	    </div>
	    <br><hr>
	    <div class="form-group">

	    	<div id="colHead1" class="col-md-3">
	    		
	    	</div>

	    	<div id="colHead2" class="col-md-2">
	    		
	    	</div>

	    	<div id="colHead3" class="col-md-1">
	    		
	    	</div>

	    	<div id="colHead4" class="col-md-6">
	    		
	    	</div>

	    </div>
	    <div id="catForm" class="form-group">
	    	
	    </div>
	    

	    <button id="nextButton" type="button" class="btn btn-primary" onclick="addElement();">Next</button>
	    <button type="submit" class="btn btn-primary btn-hidden" id="submit">Submit</button>
	<?php echo form_close(); ?>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/new-category.js"></script>

