<?php $interpretations = "<strong><u>Interpretation(s)</u></strong><br><ul>"; ?>
<div class="container">
	<strong>COMPLETE BLOOD COUNT (CBC)</strong>
	<br>
	<div class="row report-head">
		<div class="col-md-4">
			<strong>Tests</strong>
		</div>

		<div class="col-md-2">
			<strong>Results</strong>
		</div>
		
		<div class="col-md-1">
		</div>

		<div class="col-md-4">
			<strong>Biological Reference Range</strong>
		</div>

		<div class="col-md-1">
			<strong>Units</strong>
		</div>
	</div>
	<br>

	<?php if($cbc->hemoglobin != NULL): ?>
	<div class="row">
		<div class="col-md-4">
			HEMOGLOBIN
		</div>

		<div class="col-md-2">
			<?php if($cbc->hemoglobin < 12.0): ?>
				<strong><?php echo $cbc->hemoglobin; ?></strong>
			<?php elseif($cbc->hemoglobin > 15.0): ?>
				<strong><?php echo $cbc->hemoglobin; ?></strong>
			<?php else: ?>
				<?php echo $cbc->hemoglobin; ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-1">
			<?php if($cbc->hemoglobin < 12.0): ?>
				<strong>Low</strong>
			<?php elseif($cbc->hemoglobin > 15.0): ?>
				<strong>High</strong>
			<?php endif; ?>
		</div>

		<div class="col-md-4">
			12.0 - 15.0<br>
		</div>

		<div class="col-md-1">
			g/dL
		</div>
	</div>
	<?php $interpretations .= "<li><u>Hemoglobin</u>: <br>"; ?>
	<?php endif; ?>
	<br>

	<?php if($cbc->hematocrit != NULL): ?>
	<div class="row">
		<div class="col-md-4">
			HEMATOCRIT
		</div>

		<div class="col-md-2">
			<?php if($cbc->hematocrit < 36.0): ?>
				<strong><?php echo $cbc->hematocrit; ?></strong>
			<?php elseif($cbc->hematocrit > 46.0): ?>
				<strong><?php echo $cbc->hematocrit; ?></strong>
			<?php else: ?>
				<?php echo $cbc->hematocrit; ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-1">
			<?php if($cbc->hematocrit < 36.0): ?>
				<strong>Low</strong>
			<?php elseif($cbc->hematocrit > 46.0): ?>
				<strong>High</strong>
			<?php endif; ?>
		</div>

		<div class="col-md-4">
			36.0 - 46.0<br>
		</div>

		<div class="col-md-1">
			%
		</div>
	</div>
	<?php $interpretations .= "<li><u>Hematocrit</u>: <br>"; ?>
	<?php endif; ?>
	<br>

	<?php if($cbc->rbc_count != NULL): ?>
	<div class="row">
		<div class="col-md-4">
			RBC COUNT
		</div>

		<div class="col-md-2">
			<?php if($cbc->rbc_count < 3.80): ?>
				<strong><?php echo $cbc->rbc_count; ?></strong>
			<?php elseif($cbc->rbc_count > 4.80): ?>
				<strong><?php echo $cbc->rbc_count; ?></strong>
			<?php else: ?>
				<?php echo $cbc->rbc_count; ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-1">
			<?php if($cbc->rbc_count < 3.80): ?>
				<strong>Low</strong>
			<?php elseif($cbc->rbc_count > 4.80): ?>
				<strong>High</strong>
			<?php endif; ?>
		</div>

		<div class="col-md-4">
			3.80 - 4.80<br>
		</div>

		<div class="col-md-1">
			10^6/uL
		</div>
	</div>
	<?php $interpretations .= "<li><u>RBC COUNT</u>: <br>"; ?>
	<?php endif; ?>
	<br>

	<?php if($cbc->mcv != NULL): ?>
	<div class="row">
		<div class="col-md-4">
			MCV
		</div>

		<div class="col-md-2">
			<?php if($cbc->mcv < 83.0): ?>
				<strong><?php echo $cbc->mcv; ?></strong>
			<?php elseif($cbc->mcv > 101.0): ?>
				<strong><?php echo $cbc->mcv; ?></strong>
			<?php else: ?>
				<?php echo $cbc->mcv; ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-1">
			<?php if($cbc->mcv < 83.0): ?>
				<strong>Low</strong>
			<?php elseif($cbc->mcv > 101.0): ?>
				<strong>High</strong>
			<?php endif; ?>
		</div>

		<div class="col-md-4">
			83.0 - 101.0<br>
		</div>

		<div class="col-md-1">
			fL
		</div>
	</div>
	<?php $interpretations .= "<li><u>MCV</u>: <br>"; ?>
	<?php endif; ?>
	<br>

	<?php if($cbc->mch != NULL): ?>
	<div class="row">
		<div class="col-md-4">
			MCH
		</div>

		<div class="col-md-2">
			<?php if($cbc->mch < 27.0): ?>
				<strong><?php echo $cbc->mch; ?></strong>
			<?php elseif($cbc->mch > 32.0): ?>
				<strong><?php echo $cbc->mch; ?></strong>
			<?php else: ?>
				<?php echo $cbc->mch; ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-1">
			<?php if($cbc->mch < 27.0): ?>
				<strong>Low</strong>
			<?php elseif($cbc->mch > 32.0): ?>
				<strong>High</strong>
			<?php endif; ?>
		</div>

		<div class="col-md-4">
			27.0 - 32.0<br>
		</div>

		<div class="col-md-1">
			pg
		</div>
	</div>
	<?php $interpretations .= "<li><u>MCH</u>: <br>"; ?>
	<?php endif; ?>
	<br>

	<?php if($cbc->mchc != NULL): ?>
	<div class="row">
		<div class="col-md-4">
			MCHC
		</div>

		<div class="col-md-2">
			<?php if($cbc->mchc < 31.5): ?>
				<strong><?php echo $cbc->mchc; ?></strong>
			<?php elseif($cbc->mchc > 34.5): ?>
				<strong><?php echo $cbc->mchc; ?></strong>
			<?php else: ?>
				<?php echo $cbc->mchc; ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-1">
			<?php if($cbc->mchc < 31.5): ?>
				<strong>Low</strong>
			<?php elseif($cbc->mchc > 34.5): ?>
				<strong>High</strong>
			<?php endif; ?>
		</div>

		<div class="col-md-4">
			31.5 - 34.5<br>
		</div>

		<div class="col-md-1">
			g/dL
		</div>
	</div>
	<?php $interpretations .= "<li><u>MCHC</u>: <br>"; ?>
	<?php endif; ?>
	<br>

	<?php if($cbc->rdw_cv != NULL): ?>
	<div class="row">
		<div class="col-md-4">
			RDW-CV
		</div>

		<div class="col-md-2">
			<?php if($cbc->rdw_cv < 11.6): ?>
				<strong><?php echo $cbc->rdw_cv; ?></strong>
			<?php elseif($cbc->rdw_cv > 14.0): ?>
				<strong><?php echo $cbc->rdw_cv; ?></strong>
			<?php else: ?>
				<?php echo $cbc->rdw_cv; ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-1">
			<?php if($cbc->rdw_cv < 11.6): ?>
				<strong>Low</strong>
			<?php elseif($cbc->rdw_cv > 14.0): ?>
				<strong>High</strong>
			<?php endif; ?>
		</div>

		<div class="col-md-4">
			11.6 - 14.0<br>
		</div>

		<div class="col-md-1">
			%
		</div>
	</div>
	<?php $interpretations .= "<li><u>RDW-CV</u>: <br>"; ?>
	<?php endif; ?>
	<br>

	<?php if($cbc->platelet_count != NULL): ?>
	<div class="row">
		<div class="col-md-4">
			PLATELET COUNT
		</div>

		<div class="col-md-2">
			<?php if($cbc->platelet_count < 150): ?>
				<strong><?php echo $cbc->platelet_count; ?></strong>
			<?php elseif($cbc->platelet_count > 410): ?>
				<strong><?php echo $cbc->platelet_count; ?></strong>
			<?php else: ?>
				<?php echo $cbc->platelet_count; ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-1">
			<?php if($cbc->platelet_count < 150): ?>
				<strong>Low</strong>
			<?php elseif($cbc->platelet_count > 410): ?>
				<strong>High</strong>
			<?php endif; ?>
		</div>

		<div class="col-md-4">
			150 - 410<br>
		</div>

		<div class="col-md-1">
			10^3/uL
		</div>
	</div>
	<?php $interpretations .= "<li><u>PLATELET COUNT</u>: <br>"; ?>
	<?php endif; ?>
	<br>

	<?php if($cbc->total_leucocyte_count != NULL): ?>
	<div class="row">
		<div class="col-md-4">
			TOTAL LEUCOCYTE COUNT
		</div>

		<div class="col-md-2">
			<?php if($cbc->total_leucocyte_count < 4.0): ?>
				<strong><?php echo $cbc->total_leucocyte_count; ?></strong>
			<?php elseif($cbc->total_leucocyte_count > 11.0): ?>
				<strong><?php echo $cbc->total_leucocyte_count; ?></strong>
			<?php else: ?>
				<?php echo $cbc->total_leucocyte_count; ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-1">
			<?php if($cbc->total_leucocyte_count < 4.0): ?>
				<strong>Low</strong>
			<?php elseif($cbc->total_leucocyte_count > 11.0): ?>
				<strong>High</strong>
			<?php endif; ?>
		</div>

		<div class="col-md-4">
			4.0 - 11.0<br>
		</div>

		<div class="col-md-1">
			10^3/uL
		</div>
	</div>
	<?php $interpretations .= "<li><u>TOTAL LEUCOCYTE COUNT</u>: <br>"; ?>
	<?php endif; ?>
	<br>

	<?php $interpretations .= "</ul>"; ?>
	<div class="row">
		<?php echo $interpretations; ?>
	</div>
	<br>
	<br>
	<button onclick="window.print();" class="btn btn-primary printButton">Print</button>
	<br><br>
</div>