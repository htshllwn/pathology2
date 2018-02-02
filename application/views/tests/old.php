<div class="container">
	<h2><?= $title ?></h2><br><br>
    <a class="btn btn-default" href="<?php echo base_url().'tests/new_test/'.$slug.'/'.$patient_id; ?>"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> new_test</a>
    <br>
    <br>
    <table class="table table-striped table-hover table-condensed">
    	<tr class="info">

    		<?php foreach($columns as $column): ?>
    			<th><?php echo $column->col_name ?></th>
    		<?php endforeach; ?>

    			<th>Date</th>
    			<th></th>
    	</tr>

    	<?php foreach($test_details as $test_detail): ?>
    		<?php $link = '../../tests/print_test/'.$slug.'/'.$patient_id.'/'.$test_detail->id; ?>
            <?php $del_link = '../../tests/delete_test/'.$slug.'/'.$patient_id.'/'.$test_detail->id; ?>
                <tr class="warning">
                	
                	<?php foreach($columns as $column): ?>
                		<?php $temp = $column->col_slug ?>
                		<td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test_detail->$temp ?></td>
                	<?php endforeach; ?>
                		<td onclick="window.location.href='<?php echo $link; ?>';return false;" ><?php echo $test_detail->created_at ?></td>
                		<td onclick="window.location.href='<?php echo $del_link; ?>';return false;" ><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                </tr>
        <?php endforeach; ?>
    </table>
</div>
