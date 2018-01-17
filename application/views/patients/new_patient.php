
<div class="row microscopebg">
    <div class="col-md-3">
          
    </div>
      
	<div class="text-center col-md-6">
		<h1 class="PageTitle"><?= $title ?></h1>
		<hr>
		<div class="FormBorder">
		<?php echo form_open('patients/new_patient'); ?>
	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">Patient Name</label>
	        	</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="name"class="form-control" placeholder="Enter Patient Name" required>
				</div>
	        </div>
	        <br><hr>

	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">Age</label>
	       		</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="age" class="form-control" placeholder="Enter Age" onkeypress="return IsNumber(event , this);" required>
				</div>
	        </div>
	        <br><hr>

	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">Gender</label>
	        	</div>
	        	<div class="col-xs-12 col-sm-6 col-md-8">
	        		<select name="gender" class="form-control">
	            		<option value="M">Male</option>
	            		<option value="F">Female</option>
	            		<option value="O">Other</option>
	          		</select>
	          	</div>
	        </div>
	        <br><hr>

	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">Mobile Number</label>
	       		</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="mobile" id="mobile"  id="mobile" class="form-control" placeholder='Enter Mobile' maxlength="10" onClick="(this.value='')" onkeypress="return IsNumber(event , this);"  />
				</div>
	        </div>
	        <br><hr>

	        <div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">Referred By</label>
	        	</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="ref_by" class="form-control" placeholder="Referred by" required>
				</div>
	        </div>
	        <br><hr>

			<div class="form-group">
	        	<div class="col-xs-6 col-md-4">
	        		<label class="FormLabel">Due Amount</label>
	        	</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="ref_by" class="form-control" placeholder="Due Amount" required>
				</div>
	        </div>
	        <br><hr>

	        <button onclick="return mobileNoValidation();" type="submit" class="btn btn-primary">Submit</button>
	    <?php echo form_close(); ?>
	    </div>
	</div>

	<div class="col-md-3">
         
    </div>
    <br><br><br>
</div>
<script >

	function mobileNoValidation()
{
var mobile=parseInt(document.getElementById('mobile').value );




//var reg = /^([0-9]{10,10})$/;
var reg = /^\d{10}$/;




if(reg.test(mobile) == false) {


alert('Please Enter Valid mobile number');  document.getElementById('mobile').focus();
return false;
}
}
</script>
<script >
	
function IsNumber(evt,x)
 {

         var charCode = (evt.which) ? evt.which : event.keyCode ; //alert(charCode);

   if(charCode != 46 && charCode != 45){ // . = 46 , - = 45
         if ((charCode > 31 && (charCode < 48 || charCode > 57)) )
            return false;
   //alert($('#txtts').val());
    var s= $(x).val().split('.') ; if(s[1].length > 1){ return false ;};
         return true;
   }else
   if(charCode==45){ if($(x).val().length!=0) return false ; }
  
    if(charCode==46){
     if($(x).val().indexOf('.')!='-1'){ return false ;};
     }
   
   var s= $(x).val().split('.') ; if(s[1].length > 1){ return false ;};
   return true;
      }
 

</script>
