<div class="container">

    <h2>Labs</h2>
	<hr>
	<a class="btn btn-default" href="<?php echo base_url(); ?>labs/new_lab/"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New</a>
    <br><br>
	<input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Labs" title="Type in a Lab Name">
	<br>
	<br>

            <table id='myTable' class="table table-striped table-hover table-condensed">
                <tr class="info">
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>

                <?php foreach($labs as $lab): ?>
                    <?php $link = 'labs/lab_details/'.$lab->id; ?>
                    <?php $edit_link = 'labs/new_lab/'.$lab->id; ?>
                    <?php $del_link = 'labs/delete_lab/'.$lab->id; ?>
                    <tr class="warning">
                        
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;"><?php echo $lab->lab_name ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;"><?php echo $lab->lab_phone ?></td>
                        <td onclick="window.location.href='<?php echo $link; ?>';return false;"><?php echo $lab->lab_email ?></td>
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