<div class="content-header">
<section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default" style="margin-top:15px">
          <div class="card-header">
                <a href="<?php echo site_url('system-user-add'); ?>" class="btn pull-right btn-success btn-sm">Add</a> 
             <h1 style="font-weight: bold">System Users</h1>
          </div>
            <div class="card-body">
<table class="table table-striped table-bordered">
    <tr>
		<th>Sr.</th>
		<th>Active</th>
		<th>Full Name</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Designation</th>
		<th>Action</th>
    </tr>
	<?php
        $sr=1;
        foreach($users as $u){ ?>
    <tr>
		<td><?php echo $sr++; ?></td>
		<td><?php echo ($u['LoginActive'] == 1)?'ACTIVE':'IN-ACTIVE'; ?></td>
		<td><?php echo $u['Emp_FName'].' '.$u['Emp_FName'].' '.$u['Emp_LName']; ?></td>
		<td><?php echo $u['Emp_Mobile'].'<br />'.$u['Emp_AltMobile']; ?></td>
		<td><?php echo $u['Emp_Email']; ?></td>
		<td><?php echo $u['Des_Name']; ?></td>
		<td>
            <a href="<?php echo site_url('create-username/'.$this->uricryption->encode($u['idlogins'])); ?>" class="btn btn-success btn-sm">Edit</a> 
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
                </div>
              </div>
            </div>
</section>
</div>