<div class="container">
    <h2><?= $title; ?></h2>
	<hr>
	<a class="btn btn-default" href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New</a>
    <br><br>
	<input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Patients" title="Type in a Category">
	<br>
	<br>
    
		
		
			<!-- <div class="list-group" id="myUL">
                <?php foreach($patients as $patient): ?>
        		<a href="#" class="list-group-item info"><?php echo $patient->name ?></a>
        		<?php endforeach; ?>
        	</div> -->

            <table   id='myTable' class="table table-striped table-hover table-condensed">
                <tr class="info">
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Mobile</th>
                    <th>Referred By</th>
                    <th>Due Amount</th>
                    <th>Registered At</th>
                    <th></th>
                    <th></th>
                </tr>

                <?php foreach($patients as $patient): ?>
                    <?php $link = 'patients/details/'.$patient->id; ?>
                    <?php $edit_link = 'patients/new_patient/'.$patient->id; ?>
                    <?php $del_link = 'patients/delete_patient/'.$patient->id; ?>
                    <tr class="warning">
                        
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;"><?php echo $patient->name ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;"><?php echo $patient->age ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;"><?php echo $patient->gender ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;"><?php echo $patient->mobile ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;"><?php echo $patient->ref_by ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;"><?php echo $patient->due_amount ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;"><?php echo date("d/M/Y h:i:s a", strtotime($patient->created_at)); ?></td>
                        <td onclick="window.location.href='<?php echo $edit_link; ?>';return false;"><button class="btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></td>
                        <td onclick="window.location.href='<?php echo $del_link; ?>';return false;"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                    
                    </tr>
                <?php endforeach; ?>
            </table>

    	
	
		
</div>
<script>
	function myFunction() {
    var input, filter, table, tr, td, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table= document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName('td')[0];
        if(td){
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";

        }
    }
    }
}
</script>