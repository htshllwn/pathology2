<div class="container">
	<h2><?= $title ?></h2><br><br>
    <a class="btn btn-default" href="<?php echo base_url().'tests/new_lipid_profile/'.$patient_id; ?>"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New</a>
    <br>
    <br>
	<table class="table table-striped table-hover table-condensed">
                <tr class="info">
                    <th>Cholesterol Total</th>
                    <th>Triglycerides</th>
                    <th>Cholesterol HDL</th>
                    <th>Cholesterol LDL</th>
                    <th>Cholesterol VLDL</th>
                    <th>CHOL HDL Ratio</th>
                    <th>Date</th>
                    <th></th>
                </tr>

                <?php foreach($tests as $test): ?>
                    <?php $link = '../../tests/print_lipid_profile/'.$patient_id.'/'.$test->id; ?>
                    <?php $del_link = '../../tests/delete_lipid_profile/'.$patient_id.'/'.$test->id; ?>
                    <tr class="warning">
                        
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->cholestrol_total ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->triglycerides ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->cholestrol_hdl ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->cholestrol_ldl ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->cholestrol_vldl ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->chol_hdl_ratio ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->created_at ?></td>
                        <td onclick="window.location.href='<?php echo $del_link; ?>';return false;" ><button class="btn btn-danger">Delete</button></td>
                    
                    </tr>
                <?php endforeach; ?>
            </table><br>

            
</div>