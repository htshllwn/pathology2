<div class="container">
	<h1 class="text-center">TESTS</h1>
	<hr>
	
	<br>
    <div class="row">
		<div class="col-xs-6 col-md-2"></div>
		<div class="col-xs-6 col-md-8">
                <a class="btn btn-default" href="<?php echo base_url(); ?>text_based/new_text_based"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New Test</a>
                <br><br>
            <input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search" title="Type in a Test">
			<table   id='myTable' class="table table-striped table-hover table-condensed">
                
                <?php foreach ($tb_tests as $tb_test): ?>
                    <tr>    
                        <td><?php echo $tb_test->test_name ?></td>
                        <td align="right">
                            <!--<button class="btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>-->
                            <a href="<?php echo base_url().'text_based/edit_interpretations/'.$tb_test->test_slug ?>" class="btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            <a href="<?php echo base_url().'text_based/delete_text_based/'.$tb_test->test_slug ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
        	</table>
    	</div>
        <div class="col-xs-6 col-md-2"></div>
	</div>
		
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