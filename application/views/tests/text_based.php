<?php $interpretations = "<strong><u>Interpretation(s)</u></strong><br><ul>"; ?>
<?php $pass = FALSE; ?>
<div class="container">
    <div class="print-hidden">
        <h2>Text Based</h2><br><br>
    </div>
    
    
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <input type="text" value="<?php echo $title[0]->test_name; ?>" placeholder="Test Title" class="form-control text-based text-based-title" id="testTitle" style="">
        </div>
        <div class="col-md-4"></div>
    </div>

    <div id="textTests">
    <?php foreach($columns as $column): ?>
        <div class="row">
        <div class="form-group">
            <div class="col-xs-6 col-md-4">
                <?php if($column->cat == 'TITLE'): ?>
                    <input type="text" class="form-control text-based text-based-title2" value="<?php echo $column->col_name ?>" placeholder="Test Name">
                <?php elseif($column->cat == 'TEST'): ?>
                    <input type="text" class="form-control text-based" value="<?php echo $column->col_name ?>" placeholder="Test Name">
                <?php endif; ?>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <?php if($column->cat == 'TEST'): ?>
                    <input type="text" class="form-control text-based" placeholder="Test Details">
                <?php endif; ?>
            </div>
        </div>
        <?php
            if($column->interpretations != NULL){
                $pass = TRUE;
                $interpretations .= "<li>".$column->interpretations."<br>";
            }          
        ?>
    </div>
    <?php endforeach; ?>
    </div>
    <br><br>
    <?php $interpretations .= "</ul>"; ?>
	<div class="row">
        <?php 
            if($pass){
                echo $interpretations;
            }    
        ?>
	</div>
	<br>
	<br>

    <div>
	<div class="row">

		<div class="col-md-6">
			<img src="<?php echo base_url().'assets/img/Sign_LT.jpg'; ?>" width="200" height="100"><br>
		</div>
		
		<div class="col-md-6">
			<img src="<?php echo base_url().'assets/img/Sign_MD.jpg'; ?>" width="200" height="100" align="right" style="margin-right: 20px;"><br>
		</div>

	</div>

	<div class="row">

			<div class="col-md-6">
				<h4 style="padding-left: 25px;">
					Lab Technician<br>
					D.Kushwah<br>
					Reg. No. 11269/2010<br>
				</h4>
			</div>
			
			<div class="col-md-6">
			<h4 style="float: right; padding-right: 0px;">
				<span style="text-align: left; padding-right: 0px;">
					Consultant Pathologist<br>
					Dr. Rajesh Kumar, <small>MBBS, MD</small><br>
					Reg. No. MP 2808<br>
				</span>
			</h4>
			</div>
	
	</div>

	
    </div>
    
    <div>
        <!--
        <button type="button" class="btn btn-default glyphicon glyphicon-plus print-hidden" onclick="addTest();"></button>
        <button type="button" class="btn btn-default glyphicon glyphicon-minus print-hidden" onclick="removeTest();"></button>
        -->
        <button onclick="window.print();" class="btn btn-primary printButton">Print</button>
    </div>
    <br><br>

</div>

<script  type="text/javascript" src="<?php echo base_url(); ?>assets/js/text_based.js"></script>
