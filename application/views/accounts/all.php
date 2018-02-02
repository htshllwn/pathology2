<div class="container">

    <?php if($mode === 'all_labs'): ?>
        <h2>Accounts</h2>
        <hr>
        <a class="btn btn-default" href="<?php echo base_url(); ?>accounts/new_account/"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New</a>
        <br><br>
    <?php endif; ?>

	<input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Accounts">
	<br>
	<br>

            <table id='myTable' class="table table-striped table-hover table-condensed">
                <tr class="info">
                    <th>Patient Name</th>
                    <th>Test</th>
                    <th>Lab</th>
                    <th>Amount</th>
                    <th>Due</th>
                    <th>Date</th>
                    <?php if($mode === 'all_labs'): ?>
                    <th></th>
                    <th></th>
                    <?php endif; ?>
                </tr>

                <?php foreach($accounts as $account): ?>
                    <?php $link = 'accounts/new_account/'.$account->id; ?>
                    <?php $edit_link = 'accounts/new_account/'.$account->id; ?>
                    <?php $del_link = 'accounts/delete_account/'.$account->id; ?>
                    <?php $lab = $this->lab_model->get_lab($account->lab_id); ?>
                    <tr class="warning">
                        
                        <td onclick="window.location.href='<?php if($mode === 'all_labs'){echo $link;} ?>';return false;"><?php echo $account->patient_name ?></td>
                        <td onclick="window.location.href='<?php if($mode === 'all_labs'){echo $link;} ?>';return false;"><?php echo $account->test_name ?></td>
                        <td onclick="window.location.href='<?php if($mode === 'all_labs'){echo $link;} ?>';return false;"><?php echo $lab->lab_name ?></td>
                        <td onclick="window.location.href='<?php if($mode === 'all_labs'){echo $link;} ?>';return false;"><?php echo $account->amount ?></td>
                        <td onclick="window.location.href='<?php if($mode === 'all_labs'){echo $link;} ?>';return false;"><?php echo $account->due ?></td>
                        <td onclick="window.location.href='<?php if($mode === 'all_labs'){echo $link;} ?>';return false;"><?php echo date("d/M/Y", strtotime($account->date)); ?></td>
                        <?php if($mode === 'all_labs'): ?>
                        <td onclick="window.location.href='<?php echo $edit_link; ?>';return false;"><button class="btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></td>
                        <td onclick="window.location.href='<?php echo $del_link; ?>';return false;"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                        <?php endif; ?>
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