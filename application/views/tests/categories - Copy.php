<div class="container">
	<h1 class="text-center">TESTS</h1>
	<hr>
	
	
	
	<br>
    <div class="row">
		<div class="col-xs-6 col-md-2"></div>
		<div class="col-xs-6 col-md-8">
			<div class="list-group" id="myUL">
                <input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Categories" title="Type in a Category">
                <?php foreach ($tests as $test): ?>
                    <?php if($access == 'view'): ?>
                        <a href="<?php echo base_url().'tests/'.$test->test_slug.'/'.$patient->id ?>" class="list-group-item"><?php echo $test->test_name ?></a>
                    <?php elseif($access == 'edit'): ?>
                        
                                <a href="<?php echo base_url().'categories' ?>" class="list-group-item cat-item"><?php echo $test->test_name ?><button class="btn btn-danger cat-del">Delete</button></a>
                            
                    <?php endif; ?>
                <?php endforeach; ?>
        	</div>
    	</div>
	</div>
		<div class="col-xs-6 col-md-2"></div>
</div>
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