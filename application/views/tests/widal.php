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
    <?php $interpretations .= "<li>The Widal test is positive if TO antigen titer is more than 1:160 in an active infection, or if TH antigen titer is more than 1:160 in past infection or in immunized persons.<br>"; ?>
    <?php $interpretations .= "<li>A single Widal test is of little clinical relevance due to the high number of cross-reacting infections, including malaria. If no other tests (either bacteriologic culture or more specific serology) are available, a fourfold increase in the titer (e.g., from 1:40 to 1:640) in the course of the infection, or a conversion from an IgM reaction to an IgG reaction of at least the same titer, would be consistent with a typhoid infection.<br>"; ?>
    <?php $interpretations .= "<li>2-mercaptoethanol is often added to the Widal test. This agent more easily denatures the IgM class of antibodies, so if a decrease in the titer is seen after using this agent, it means that the contribution of IgM has been removed leaving the IgG component. This differentiation of antibody classes is important as it allows for the distinction of a recent (IgM) from an old infection (IgG).<br>"; ?>
    <?php $interpretations .= "</ul>"; ?>
    <div class="row">
		<?php echo $interpretations; ?>
	</div>
    <br><br>

    <button onclick="window.print();" class="btn btn-primary printButton">Print</button>
	<br><br>

</div>