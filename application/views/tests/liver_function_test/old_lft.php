<div class="container">
	<h2><?= $title ?></h2><br><br>
    <a class="btn btn-default" href="<?php echo base_url().'tests/new_lft/'.$patient_id; ?>"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New</a>
    <br>
    <br>
	<table class="table table-striped table-hover table-condensed">
                <tr class="info">
                    <th>Bilirubin TOT</th>
                    <th>Bilirubin DIR</th>
                    <th>Bilirubin IND</th>
                    <th>SGOT</th>
                    <th>SGPT</th>
                    <th>Alk. Phos.</th>
                    <th>Protein TOT</th>
                    <th>Albumin</th>
                    <th>Globulin</th>
                    <th>A:G Ratio</th>
                    <th>Date</th>
                    <th></th>
                </tr>

                <?php foreach($tests as $test): ?>
                    <?php $link = '../../tests/print_lft/'.$patient_id.'/'.$test->id; ?>
                    <?php $del_link = '../../tests/delete_lft/'.$patient_id.'/'.$test->id; ?>
                    <tr class="warning">
                        
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->bil_tot ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->bil_dir ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->bil_indir ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->sgot ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->sgpt ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->alk_phos ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->pro_tot ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->albumin ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->globulin ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->ag_ratio ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test->created_at ?></td>
                        <td onclick="window.location.href='<?php echo $del_link; ?>';return false;" ><button class="btn btn-danger">Delete</button></td>
                    
                    </tr>
                <?php endforeach; ?>
            </table><br>

            
</div>