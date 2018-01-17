<div class="container">
    <div class="print-hidden">
        <h2>Text Based</h2><br><br>
    </div>
    
    
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <input type="text" placeholder="Test Title" class="form-control text-based text-based-title" id="testTitle" style="">
        </div>
        <div class="col-md-4"></div>
    </div>

    <br>

    <br>
    <div id="textTests">
        <br><div class="form-group">
            <div class="col-xs-6 col-md-4">
                <input type="text" class="form-control text-based" placeholder="Test Name">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
                <input type="text" class="form-control text-based" placeholder="Test Details">
            </div>
        </div><br>
    </div>
    <br><br>
    <div>
        <button type="button" class="btn btn-default glyphicon glyphicon-plus print-hidden" onclick="addTest();"></button>
        <button type="button" class="btn btn-default glyphicon glyphicon-minus print-hidden" onclick="removeTest();"></button>
        <button onclick="window.print();" class="btn btn-primary printButton">Print</button>
    </div>

</div>

<script  type="text/javascript" src="<?php echo base_url(); ?>assets/js/text_based.js"></script>
