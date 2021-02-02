<div class="pull-right">
	<a href="<?php echo site_url('user_role/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Iduser Roles</th>
		<th>URoleTitle</th>
		<th>URoleGroup</th>
		<th>URoleParent</th>
		<th>Actions</th>
    </tr>
	<?php foreach($user_roles as $u){ ?>
    <tr>
		<td><?php echo $u['iduser_roles']; ?></td>
		<td><?php echo $u['URoleTitle']; ?></td>
		<td><?php echo $u['URoleGroup']; ?></td>
		<td><?php echo $u['URoleParent']; ?></td>
		<td>
            <a href="<?php echo site_url('user_role/edit/'.$u['iduser_roles']); ?>" class="btn btn-success btn-xs">Edit</a> 
            <a href="<?php echo site_url('user_role/remove/'.$u['iduser_roles']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
