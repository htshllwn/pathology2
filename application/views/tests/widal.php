<div class="container">
    <span style="text-align: center;">
        <h2>BLOOD WIDAL (By Slide Method)</h2>
    </span>
	<br>
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th style="text-align: center;">Dilution</th>
                <th style="text-align: center;">1:40</th>
                <th style="text-align: center;">1:80</th>
                <th style="text-align: center;">1:160</th>
                <th style="text-align: center;">1:320</th>
            </tr>

            <tr>
                <td style="text-align: center;">S.Typhi ‘’o’’</th>
                <td style="text-align: center;"><input type="text" class="text-based" style="text-align: center;"></th>
                <td style="text-align: center;"><input type="text" class="text-based" style="text-align: center;"></th>
                <td style="text-align: center;"><input type="text" class="text-based" style="text-align: center;"></th>
                <td style="text-align: center;"><input type="text" class="text-based" style="text-align: center;"></th>
            </tr>

            <tr>
                <td style="text-align: center;">S.Typhi ‘’H’’</th>
                <td style="text-align: center;"><input type="text" class="text-based" style="text-align: center;"></th>
                <td style="text-align: center;"><input type="text" class="text-based" style="text-align: center;"></th>
                <td style="text-align: center;"><input type="text" class="text-based" style="text-align: center;"></th>
                <td style="text-align: center;"><input type="text" class="text-based" style="text-align: center;"></th>
            </tr>

            <tr>
                <td style="text-align: center;">S. Paratyphi ‘’AH’’</th>
                <td style="text-align: center;"><input type="text" class="text-based" style="text-align: center;"></th>
                <td style="text-align: center;"><input type="text" class="text-based" style="text-align: center;"></th>
                <td style="text-align: center;"><input type="text" class="text-based" style="text-align: center;"></th>
                <td style="text-align: center;"><input type="text" class="text-based" style="text-align: center;"></th>
            </tr>

            <tr>
                <td style="text-align: center;">S. Paratyphi ‘’BH’’</th>
                <td style="text-align: center;"><input type="text" class="text-based" style="text-align: center;"></th>
                <td style="text-align: center;"><input type="text" class="text-based" style="text-align: center;"></th>
                <td style="text-align: center;"><input type="text" class="text-based" style="text-align: center;"></th>
                <td style="text-align: center;"><input type="text" class="text-based" style="text-align: center;"></th>
            </tr>

        </tbody>
    </table>

    <br><br>

    <p style="text-align: center;">(SIGNIFICANT TITRE 1:80 OR MORE)</p>

    <br><br>

    <?php $interpretations = "<strong><u>Interpretation(s)</u></strong><br><ul>"; ?>
    <?php $interpretations .= "<li>The Widal test is is a presumptive serological test for enteric fever or undulant fever whereby bacteria causing typhoid and malaria fever are mixed with a serum containing specific antibodies obtained from an infected individual.<br>"; ?>
    <?php $interpretations .= "<li>The diagnostic ability of Widal test is debatable as the test method has a low sensitivity, specificity and positive predictive value (PPV).<br>"; ?>
    <?php $interpretations .= "<li>Widal test relies on the demonstration of a rising titer of antibodies in paired samples 10 to 14 days apart.<br>"; ?>
    <?php $interpretations .= "</ul>"; ?>
    <div class="row">
		<?php echo $interpretations; ?>
	</div>
    <br><br>

    <button onclick="window.print();" class="btn btn-primary printButton">Print</button>
	<br><br>

</div>