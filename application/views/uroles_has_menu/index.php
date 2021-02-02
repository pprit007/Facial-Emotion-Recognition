<div class="pull-right">
	<a href="<?php echo site_url('uroles_has_menu/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Iduroles Has Menu</th>
		<th>URHM Active</th>
		<th>URHM IdMenu</th>
		<th>URHM Parent</th>
		<th>URHM IdRole</th>
		<th>URHM Level</th>
		<th>URHM Seq</th>
		<th>Actions</th>
    </tr>
	<?php foreach($uroles_has_menu as $u){ ?>
    <tr>
		<td><?php echo $u['iduroles_has_menu']; ?></td>
		<td><?php echo $u['URHM_Active']; ?></td>
		<td><?php echo $u['URHM_IdMenu']; ?></td>
		<td><?php echo $u['URHM_Parent']; ?></td>
		<td><?php echo $u['URHM_IdRole']; ?></td>
		<td><?php echo $u['URHM_Level']; ?></td>
		<td><?php echo $u['URHM_Seq']; ?></td>
		<td>
            <a href="<?php echo site_url('uroles_has_menu/edit/'.$u['iduroles_has_menu']); ?>" class="btn btn-success btn-xs">Edit</a> 
            <a href="<?php echo site_url('uroles_has_menu/remove/'.$u['iduroles_has_menu']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
