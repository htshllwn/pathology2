<?php $interpretations = "<strong><u>Interpretation(s)</u></strong><br><ul>"; ?>
<div class="container">
	<strong>LIVER FUNCTION TEST - LFT</strong>
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

	<?php if($lft->bil_tot != NULL): ?>
	<div class="row">
		<div class="col-md-4">
			BILIRUBIN TOTAL
		</div>

		<div class="col-md-2">
			<?php if($lft->bil_tot < 0.30): ?>
				<strong><?php echo $lft->bil_tot; ?></strong>
			<?php elseif($lft->bil_tot > 1.20): ?>
				<strong><?php echo $lft->bil_tot; ?></strong>
			<?php else: ?>
				<?php echo $lft->bil_tot; ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-1">
			<?php if($lft->bil_tot < 0.30): ?>
				<strong>Low</strong>
			<?php elseif($lft->bil_tot > 1.20): ?>
				<strong>High</strong>
			<?php endif; ?>
		</div>

		<div class="col-md-4">
			0.30 - 1.20<br>
		</div>

		<div class="col-md-1">
			mg/dL
		</div>
	</div>
	<?php $interpretations .= "<li><u>Bilirubin Total</u>: <br>"; ?>
	<?php endif; ?>
	<br>

	<?php if($lft->bil_dir != NULL): ?>
	<div class="row">
		<div class="col-md-4">
			BILIRUBIN DIRECT
		</div>

		<div class="col-md-2">
			<?php if($lft->bil_dir < 0.00): ?>
				<strong><?php echo $lft->bil_dir; ?></strong>
			<?php elseif($lft->bil_dir > 0.30): ?>
				<strong><?php echo $lft->bil_dir; ?></strong>
			<?php else: ?>
				<?php echo $lft->bil_dir; ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-1">
			<?php if($lft->bil_dir < 0.00): ?>
				<strong>Low</strong>
			<?php elseif($lft->bil_dir > 0.30): ?>
				<strong>High</strong>
			<?php endif; ?>
		</div>

		<div class="col-md-4">
			0.00 - 0.30<br>
		</div>

		<div class="col-md-1">
			mg/dL
		</div>
	</div>
	<?php $interpretations .= "<li><u>Bilirubin Direct</u>: <br>"; ?>
	<?php endif; ?>
	<br>
	
	<?php if($lft->bil_indir != NULL): ?>
	<div class="row">
		<div class="col-md-4">
			BILIRUBIN INDIRECT
		</div>

		<div class="col-md-2">
			<?php if($lft->bil_indir < 0.20): ?>
				<strong><?php echo $lft->bil_indir; ?></strong>
			<?php elseif($lft->bil_indir > 1.00): ?>
				<strong><?php echo $lft->bil_indir; ?></strong>
			<?php else: ?>
				<?php echo $lft->bil_indir; ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-1">
			<?php if($lft->bil_indir < 0.20): ?>
				<strong>Low</strong>
			<?php elseif($lft->bil_indir > 1.00): ?>
				<strong>High</strong>
			<?php endif; ?>
		</div>

		<div class="col-md-4">
			0.20 - 1.00<br>
		</div>

		<div class="col-md-1">
			mg/dL
		</div>
	</div>
	<?php $interpretations .= "<li><u>Bilirubin Indirect</u>: <br>"; ?>
	<?php endif; ?>
	<br>

	<?php if($lft->sgot != NULL): ?>
	<div class="row">
		<div class="col-md-4">
			ASPARTATE AMINOTRANSFERASE (SGOT)
		</div>

		<div class="col-md-2">
			<?php if($lft->sgot >= 34.0): ?>
				<strong><?php echo $lft->sgot; ?></strong>
			<?php else: ?>
				<?php echo $lft->sgot; ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-1">
			<?php if($lft->sgot >= 34.0): ?>
				<strong>High</strong>
			<?php endif; ?>
		</div>

		<div class="col-md-4">
			&lt;34.0<br>
		</div>

		<div class="col-md-1">
			U/L
		</div>
	</div>
	<?php $interpretations .= "<li><u>SGOT</u>: <br>"; ?>
	<?php endif; ?>
	<br>

	<?php if($lft->sgpt != NULL): ?>
	<div class="row">
		<div class="col-md-4">
			ALANINE AMINOTRANSFERASE (SGPT)
		</div>

		<div class="col-md-2">
			<?php if($lft->sgpt < 10): ?>
				<strong><?php echo $lft->sgpt; ?></strong>
			<?php elseif($lft->sgpt > 49): ?>
				<strong><?php echo $lft->sgpt; ?></strong>
			<?php else: ?>
				<?php echo $lft->sgpt; ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-1">
			<?php if($lft->sgpt < 10): ?>
				<strong>Low</strong>
			<?php elseif($lft->sgpt > 49): ?>
				<strong>High</strong>
			<?php endif; ?>
		</div>

		<div class="col-md-4">
			10 - 49<br>
		</div>

		<div class="col-md-1">
			U/L
		</div>
	</div>
	<?php $interpretations .= "<li><u>SGPT</u>: <br>"; ?>
	<?php endif; ?>
	<br>

	<?php if($lft->alk_phos != NULL): ?>
	<div class="row">
		<div class="col-md-4">
			ALKALINE PHOSPHATASE
		</div>

		<div class="col-md-2">
			<?php if($lft->alk_phos < 46): ?>
				<strong><?php echo $lft->alk_phos; ?></strong>
			<?php elseif($lft->alk_phos > 116): ?>
				<strong><?php echo $lft->alk_phos; ?></strong>
			<?php else: ?>
				<?php echo $lft->alk_phos; ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-1">
			<?php if($lft->alk_phos < 46): ?>
				<strong>Low</strong>
			<?php elseif($lft->alk_phos > 116): ?>
				<strong>High</strong>
			<?php endif; ?>
		</div>

		<div class="col-md-4">
			46 - 116<br>
		</div>

		<div class="col-md-1">
			U/L
		</div>
	</div>
	<?php $interpretations .= "<li><u>Alkaline Phos.</u>: <br>"; ?>
	<?php endif; ?>
	<br>

	<?php if($lft->pro_tot != NULL): ?>
	<div class="row">
		<div class="col-md-4">
			PROTEIN TOTAL
		</div>

		<div class="col-md-2">
			<?php if($lft->pro_tot < 5.7): ?>
				<strong><?php echo $lft->pro_tot; ?></strong>
			<?php elseif($lft->pro_tot > 8.2): ?>
				<strong><?php echo $lft->pro_tot; ?></strong>
			<?php else: ?>
				<?php echo $lft->pro_tot; ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-1">
			<?php if($lft->pro_tot < 5.7): ?>
				<strong>Low</strong>
			<?php elseif($lft->pro_tot > 8.2): ?>
				<strong>High</strong>
			<?php endif; ?>
		</div>

		<div class="col-md-4">
			5.7 - 8.2<br>
		</div>

		<div class="col-md-1">
			g/dL
		</div>
	</div>
	<?php $interpretations .= "<li><u>Protein TOT.</u>: <br>"; ?>
	<?php endif; ?>
	<br>

	<?php if($lft->albumin != NULL): ?>
	<div class="row">
		<div class="col-md-4">
			ALBUMIN
		</div>

		<div class="col-md-2">
			<?php if($lft->albumin < 3.2): ?>
				<strong><?php echo $lft->albumin; ?></strong>
			<?php elseif($lft->albumin > 4.8): ?>
				<strong><?php echo $lft->albumin; ?></strong>
			<?php else: ?>
				<?php echo $lft->albumin; ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-1">
			<?php if($lft->albumin < 3.2): ?>
				<strong>Low</strong>
			<?php elseif($lft->albumin > 4.8): ?>
				<strong>High</strong>
			<?php endif; ?>
		</div>

		<div class="col-md-4">
			3.2 - 4.8<br>
		</div>

		<div class="col-md-1">
			g/dL
		</div>
	</div>
	<?php $interpretations .= "<li><u>Albumin</u>: <br>"; ?>
	<?php endif; ?>
	<br>

	<?php if($lft->globulin != NULL): ?>
	<div class="row">
		<div class="col-md-4">
			GLOBULIN
		</div>

		<div class="col-md-2">
			<?php if($lft->globulin < 2.0): ?>
				<strong><?php echo $lft->globulin; ?></strong>
			<?php elseif($lft->globulin > 4.1): ?>
				<strong><?php echo $lft->globulin; ?></strong>
			<?php else: ?>
				<?php echo $lft->globulin; ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-1">
			<?php if($lft->globulin < 2.0): ?>
				<strong>Low</strong>
			<?php elseif($lft->globulin > 4.1): ?>
				<strong>High</strong>
			<?php endif; ?>
		</div>

		<div class="col-md-4">
			2.0 - 4.1<br>
		</div>

		<div class="col-md-1">
			g/dL
		</div>
	</div>
	<?php $interpretations .= "<li><u>Globulin</u>: <br>"; ?>
	<?php endif; ?>
	<br>

	<?php if($lft->ag_ratio != NULL): ?>
	<div class="row">
		<div class="col-md-4">
			A:G RATIO
		</div>

		<div class="col-md-2">
			<?php if($lft->ag_ratio < 1.0): ?>
				<strong><?php echo $lft->ag_ratio; ?></strong>
			<?php elseif($lft->ag_ratio > 2.1): ?>
				<strong><?php echo $lft->ag_ratio; ?></strong>
			<?php else: ?>
				<?php echo $lft->ag_ratio; ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-1">
			<?php if($lft->ag_ratio < 1.0): ?>
				<strong>Low</strong>
			<?php elseif($lft->ag_ratio > 2.1): ?>
				<strong>High</strong>
			<?php endif; ?>
		</div>

		<div class="col-md-4">
			1.0 - 2.1<br>
		</div>

		<div class="col-md-1">
			Ratio
		</div>
	</div>
	<?php $interpretations .= "<li><u>A:G Ratio</u>: <br>"; ?>
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