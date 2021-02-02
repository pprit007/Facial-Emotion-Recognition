<div class="pull-right">
	<a href="<?php echo site_url('user_has_role/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Iduser Has Roles</th>
		<th>UHRs Active</th>
		<th>UHRs IdRole</th>
		<th>UHRs IdUser</th>
		<th>UHRs CreatedOnAt</th>
		<th>UHRs UpdatedOnAt</th>
		<th>Actions</th>
    </tr>
	<?php foreach($user_has_roles as $u){ ?>
    <tr>
		<td><?php echo $u['iduser_has_roles']; ?></td>
		<td><?php echo $u['UHRs_Active']; ?></td>
		<td><?php echo $u['UHRs_IdRole']; ?></td>
		<td><?php echo $u['UHRs_IdUser']; ?></td>
		<td><?php echo $u['UHRs_CreatedOnAt']; ?></td>
		<td><?php echo $u['UHRs_UpdatedOnAt']; ?></td>
		<td>
            <a href="<?php echo site_url('user_has_role/edit/'.$u['iduser_has_roles']); ?>" class="btn btn-success btn-xs">Edit</a> 
            <a href="<?php echo site_url('user_has_role/remove/'.$u['iduser_has_roles']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
