<div class="container">
	<h2><?= $title ?></h2><br><br>
    <a class="btn btn-default" href="<?php echo base_url().'tests/new_cbc/'.$patient_id; ?>"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New</a>
    <br>
    <br>
	<table class="table table-striped table-hover table-condensed">
                <tr class="info">
                    <th>Hemoglobin</th>
                    <th>Hematocrit</th>
                    <th>RBC Count</th>
                    <th>MCV</th>
                    <th>MCH</th>
                    <th>MCHC</th>
                    <th>RDW-CV</th>
                    <th>Platelet Count</th>
                    <th>Total Leucocyte Count</th>
                    <th>Date</th>
                    <th></th>
                </tr>

                <?php foreach($tests as $test): ?>
                    <?php $link = '../../tests/print_cbc/'.$patient_id.'/'.$test->id; ?>
                    <?php $del_link = '../../tests/delete_cbc/'.$patient_id.'/'.$test->id; ?>
                    <tr class="warning">
                        
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->hemoglobin ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->hematocrit ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->rbc_count ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->mcv ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->mch ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->mchc ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->rdw_cv ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->platelet_count ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->total_leucocyte_count ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->created_at ?></td>
                        <td onclick="window.location.href='<?php echo $del_link; ?>';return false;" ><button class="btn btn-danger">Delete</button></td>
                    
                    </tr>
                <?php endforeach; ?>
            </table><br>

            
</div>