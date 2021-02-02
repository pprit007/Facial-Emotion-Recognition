<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Role Has Menus Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('role_has_menu/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>RHMs IdRole</th>
						<th>RHMs IdMenu</th>
						<th>RHMs Seq</th>
						<th>RHMs Permission</th>
						<th>RHMs Level</th>
						<th>RHMs Parrent</th>
						<th>RHMs Refer</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($role_has_menus as $r){ ?>
                    <tr>
						<td><?php echo $r['RHMs_IdRole']; ?></td>
						<td><?php echo $r['RHMs_IdMenu']; ?></td>
						<td><?php echo $r['RHMs_Seq']; ?></td>
						<td><?php echo $r['RHMs_Permission']; ?></td>
						<td><?php echo $r['RHMs_Level']; ?></td>
						<td><?php echo $r['RHMs_Parrent']; ?></td>
						<td><?php echo $r['RHMs_Refer']; ?></td>
						<td>
                            <a href="<?php echo site_url('role_has_menu/edit/'.$r['RHMs_IdRole']); ?>" class="btn btn-success btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('role_has_menu/remove/'.$r['RHMs_IdRole']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>