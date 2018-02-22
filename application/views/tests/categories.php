<div class="container">
	<h1 class="text-center">TESTS</h1>
	<hr>
    
    <?php if($access == 'view'): ?>
	<div class="row">
        <div class="col-xs-6 col-md-2"></div>
        <div class="col-xs-6 col-md-8">
            <a href="<?php echo base_url().'tests/receipt/'.$patient->id; ?>" class="btn btn-default"><i class="glyphicon glyphicon-edit"></i> Receipt</a>
        </div>
        <div class="col-xs-6 col-md-2"></div>
    </div>
    <?php endif; ?>
	
	<br>
    <div class="row">
		<div class="col-xs-6 col-md-2"></div>
		<div class="col-xs-6 col-md-8">
            <?php if($access == 'edit'): ?>
                <a class="btn btn-default" href="<?php echo base_url(); ?>categories/new_cat"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New Test</a>
                <br><br>
            <?php endif; ?>
            <input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Categories" title="Type in a Category">
			<table   id='myTable' class="table table-striped table-hover table-condensed">
                
                <?php foreach ($tests as $test): ?>
                    <tr>
                    <?php if($access == 'view'): ?>
                        <td><a href="<?php echo base_url().'tests/'.$test->test_slug.'/'.$patient->id ?>" class="list-group-item"><?php echo $test->test_name ?></a></td>

                        <!--<a href="<?php echo base_url().'tests/'.$test->test_slug.'/'.$patient->id ?>" class="list-group-item"><?php echo $test->test_name ?></a>-->
                    <?php elseif($access == 'edit'): ?>
                        
                        
                        <td><?php echo $test->test_name ?></td>
                        <td align="right">
                            <!--<button class="btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>-->
                            <a href="<?php echo base_url().'categories/edit_interpretations/'.$test->test_slug ?>" class="btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            <a href="<?php echo base_url().'categories/delete_cat/'.$test->test_slug ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                        </td>
                        
                                
                            
                    <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
                <?php if($access == 'view'): ?>
                <?php foreach ($tb_tests as $test): ?>
                    <tr>
                        <td><a href="<?php echo base_url().'tests/text_based/'.$test->test_slug.'/'.$patient->id ?>" class="list-group-item"><?php echo $test->test_name ?></a></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td><a href="<?php echo base_url().'tests/widal/'.$patient->id ?>" class="list-group-item">BLOOD WIDAL</a></td>
                </tr>
                <?php endif; ?>

                

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
<!--
<script>
	function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("a");
    for (i = 0; i < li.length; i++) {
        a = li[i];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}
</script>
-->