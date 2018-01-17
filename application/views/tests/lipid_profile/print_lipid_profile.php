<?php $interpretations = "<strong><u>Interpretation(s)</u></strong><br><ul>"; ?>
<div class="container">
	<strong>LIPID PROFILE</strong>
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

	<?php if($lipid_profile->cholestrol_total != NULL): ?>
	<div class="row">
		<div class="col-md-4">
			CHOLESTEROL TOTAL
		</div>

		<div class="col-md-2">
			<?php if($lipid_profile->cholestrol_total >= 200.0 && $lipid_profile->cholestrol_total <= 239.0): ?>
				<strong><?php echo $lipid_profile->cholestrol_total; ?></strong>
			<?php elseif($lipid_profile->cholestrol_total >= 240.0): ?>
				<strong><?php echo $lipid_profile->cholestrol_total; ?></strong>
			<?php else: ?>
				<?php echo $lipid_profile->cholestrol_total; ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-1">
			<?php if($lipid_profile->cholestrol_total >= 200.0 && $lipid_profile->cholestrol_total <= 239.0): ?>
				<strong>Borderline</strong>
			<?php elseif($lipid_profile->cholestrol_total >= 240.0): ?>
				<strong>High</strong>
			<?php endif; ?>
		</div>

		<div class="col-md-4">
			&lt;200.0 DESIRABLE<br>
			200.0 - 239.0 BORDERLINE<br>
			&gt;/=240.0 HIGH<br>
		</div>

		<div class="col-md-1">
			mg/dL
		</div>
	</div>
	<?php $interpretations .= "<li><u>Cholesterol</u>: The body uses cholesterol to help build cells and produce hormones. Too much cholesterol in the blood can build up inside arteries, forming what is known as plaque.<br>"; ?>
	<?php endif; ?>
	<br>

	<?php if($lipid_profile->triglycerides != NULL): ?>
	<div class="row">
		<div class="col-md-4">
			TRIGLYCERIDES
		</div>

		<div class="col-md-2">
			<?php if($lipid_profile->triglycerides >= 150 && $lipid_profile->triglycerides <= 199): ?>
				<strong><?php echo $lipid_profile->triglycerides; ?></strong>
			<?php elseif($lipid_profile->triglycerides >= 200 && $lipid_profile->triglycerides <= 499): ?>
				<strong><?php echo $lipid_profile->triglycerides; ?></strong>
			<?php elseif($lipid_profile->triglycerides >= 500): ?>
				<strong><?php echo $lipid_profile->triglycerides; ?></strong>
			<?php else: ?>
				<?php echo $lipid_profile->triglycerides; ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-1">
			<?php if($lipid_profile->triglycerides >= 150 && $lipid_profile->triglycerides <= 199): ?>
				<strong>Borderline</strong>
			<?php elseif($lipid_profile->triglycerides >= 200 && $lipid_profile->triglycerides <= 499): ?>
				<strong>High</strong>
			<?php elseif($lipid_profile->triglycerides >= 500): ?>
				<strong>Very High</strong>
			<?php endif; ?>
		</div>

		<div class="col-md-4">
			&lt;150 NORMAL<br>
			150 - 199 BORDERLINE<br>
			200 - 499 HIGH<br>
			&gt;/=500 VERY HIGH<br>
		</div>

		<div class="col-md-1">
			mg/dL
		</div>
	</div>
	<?php $interpretations .= "<li><u>Triglycerides</u>: Having a high triglyceride level along with a high LDL cholesterol may increase your chances of having heart disease more than having only a high LDL cholesterol level.<br>"; ?>
	<?php endif; ?>
	<br>

	<?php if($lipid_profile->cholestrol_hdl != NULL): ?>
	<div class="row">
		<div class="col-md-4">
			CHOLESTEROL HDL, DIRECT
		</div>

		<div class="col-md-2">
			<?php if($lipid_profile->cholestrol_hdl < 40.0): ?>
				<strong><?php echo $lipid_profile->cholestrol_hdl; ?></strong>
			<?php elseif($lipid_profile->cholestrol_hdl >= 60.0): ?>
				<strong><?php echo $lipid_profile->cholestrol_hdl; ?></strong>
			<?php else: ?>
				<?php echo $lipid_profile->cholestrol_hdl; ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-1">
			<?php if($lipid_profile->cholestrol_hdl < 40.0): ?>
				<strong>Low</strong>
			<?php elseif($lipid_profile->cholestrol_hdl >= 60.0): ?>
				<strong>High</strong>
			<?php endif; ?>
		</div>

		<div class="col-md-4">
			&lt;40.0 LOW<br>
			40.0 - 60.0 NORMAL<br>
			&gt;/=60.0 HIGH<br>
		</div>

		<div class="col-md-1">
			mg/dL
		</div>
	</div>
	<?php $interpretations .= "<li><u>HDL</u>: A high level of HDL cholesterol may lower your chances of developing heart disease or stroke.<br>"; ?>
	<?php endif; ?>
	<br>

	<?php if($lipid_profile->cholestrol_ldl != NULL): ?>
	<div class="row">
		<div class="col-md-4">
			CHOLESTEROL LDL, CALCULATED
		</div>

		<div class="col-md-2">
			<?php if($lipid_profile->cholestrol_ldl >= 130 && $lipid_profile->cholestrol_ldl <= 159): ?>
				<strong><?php echo $lipid_profile->cholestrol_ldl; ?></strong>
			<?php elseif($lipid_profile->cholestrol_ldl >= 160 && $lipid_profile->cholestrol_ldl <= 189): ?>
				<strong><?php echo $lipid_profile->cholestrol_ldl; ?></strong>
			<?php elseif($lipid_profile->cholestrol_ldl >= 190): ?>
				<strong><?php echo $lipid_profile->cholestrol_ldl; ?></strong>
			<?php else: ?>
				<?php echo $lipid_profile->cholestrol_ldl; ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-1">
			<?php if($lipid_profile->cholestrol_ldl >= 130 && $lipid_profile->cholestrol_ldl <= 159): ?>
				<strong>Borderline</strong>
			<?php elseif($lipid_profile->cholestrol_ldl >= 160 && $lipid_profile->cholestrol_ldl <= 189): ?>
				<strong>High</strong>
			<?php elseif($lipid_profile->cholestrol_ldl >= 190): ?>
				<strong>Very High</strong>
			<?php endif; ?>
		</div>

		<div class="col-md-4">
			&lt;100 OPTIMAL<br>
			100 - 129 NEAR OPTIMAL<br>
			130 - 159 BORDERLINE HIGH<br>
			160 - 189 HIGH<br>
			&gt;/=190 VERY HIGH<br>
		</div>

		<div class="col-md-1">
			mg/dL
		</div>
	</div>
	<?php $interpretations .= "<li><u>LDL</u>: A high LDL cholesterol level may increase your chances of developing heart disease.<br>"; ?>
	<?php endif; ?>
	<br>

	<?php if($lipid_profile->cholestrol_vldl != NULL): ?>
	<div class="row">
		<div class="col-md-4">
			CHOLESTEROL VLDL, CALCULATED
		</div>

		<div class="col-md-2">
			<?php if($lipid_profile->cholestrol_vldl > 30.0): ?>
				<strong><?php echo $lipid_profile->cholestrol_vldl; ?></strong>
			<?php else: ?>
				<?php echo $lipid_profile->cholestrol_vldl; ?>
			<?php endif; ?>
		</div>
		
		<div class="col-md-1">
			<?php if($lipid_profile->cholestrol_vldl > 30.0): ?>
				<strong>High</strong>
			<?php endif; ?>
		</div>

		<div class="col-md-4">
			&lt;/=30.0 NORMAL<br>
			&gt;30.0 HIGH<br>
		</div>

		<div class="col-md-1">
			mg/dL
		</div>
	</div>
	<?php $interpretations .= "<li><u>VLDL</u>: A high VLDL cholesterol level can cause the buildup of cholesterol in your arteries and increases your risk of heart disease and stroke.<br>"; ?>
	<?php endif; ?>
	<br>

	<?php if($lipid_profile->chol_hdl_ratio != NULL): ?>
	<div class="row">
		<div class="col-md-4">
			CHOL / HDL RATIO
		</div>

		<div class="col-md-2">
			<?php if($lipid_profile->chol_hdl_ratio >= 7.1 && $lipid_profile->chol_hdl_ratio <= 11.0): ?>
				<strong><?php echo $lipid_profile->chol_hdl_ratio; ?></strong>
			<?php elseif($lipid_profile->chol_hdl_ratio > 11.0): ?>
				<strong><?php echo $lipid_profile->chol_hdl_ratio; ?></strong>
			<?php else: ?>
				<?php echo $lipid_profile->chol_hdl_ratio; ?>	
			<?php endif; ?>
		</div>
		
		<div class="col-md-1">
			<?php if($lipid_profile->chol_hdl_ratio >= 7.1 && $lipid_profile->chol_hdl_ratio <= 11.0): ?>
				<strong>Moderate</strong>
			<?php elseif($lipid_profile->chol_hdl_ratio > 11.0): ?>
				<strong>High</strong>	
			<?php endif; ?>
		</div>

		<div class="col-md-4">
			3.3 - 4.4 LOW RISK<br>
			4.5 - 7.0 AVERAGE RISK<br>
			7.1 - 11.0 MODERATE RISK<br>
			&gt;11.0 HIGH RISK<br>
		</div>

		<div class="col-md-1">
			Ratio
		</div>
	</div>
	<?php $interpretations .= "<li><u>CHOL / HDL Ratio</u>:  An optimal ratio is less than 3.5-to-1. A higher ratio means a higher risk of heart disease.<br>"; ?>
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