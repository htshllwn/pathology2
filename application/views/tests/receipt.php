<div class="container">
    <textarea id="tests" hidden>
        <?php foreach($tests as $test){
            echo "\n".$test->test_name;
        }
        foreach($tb_tests as $tb_test){
            echo "\n".$tb_test->test_name;
        }
        ?>
    </textarea>
    <div class="row">
        <div class="col-md-7">
            <select id="select1" class="form-control">
            </select>
        </div>
        <div class="col-md-5">
            <input id="input1" type="text" class="form-control">
        </div>
    </div>
</div>

<script  type="text/javascript" src="<?php echo base_url(); ?>assets/js/receipt.js"></script>