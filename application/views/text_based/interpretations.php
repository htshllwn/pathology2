<div class="container">
	<h2><?= $title ?></h2><br><br>

	<?php echo form_open('text_based/edit_interpretations/'.$slug); ?>
		<input type="hidden" name="hid_slug" class="form-control" value="<?php echo $slug ?>">

		<?php foreach($columns as $column): ?>
		<?php $temp = $column->col_slug; ?>
			<div class="form-group">
				<div class="col-xs-6 col-md-4">
					<label class="FormLabel"><?php echo strtoupper($column->col_name); ?></label>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<input type="text" name="<?php echo $column->col_slug; ?>" class="form-control" value="<?php echo $column->interpretations; ?>">
				</div>
			</div>
		    <br><hr>
		<?php endforeach; ?>

		<button type="submit" class="btn btn-primary">Submit</button>

	<?php echo form_close(); ?>

</div>