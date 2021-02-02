<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Login Has Roles Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('login_has_role/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>LHRs IdLogin</th>
						<th>LHRs Active</th>
						<th>LHRs IdRole</th>
						<th>LHRs From</th>
						<th>LHRs To</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($login_has_roles as $l){ ?>
                    <tr>
						<td><?php echo $l['LHRs_IdLogin']; ?></td>
						<td><?php echo $l['LHRs_Active']; ?></td>
						<td><?php echo $l['LHRs_IdRole']; ?></td>
						<td><?php echo $l['LHRs_From']; ?></td>
						<td><?php echo $l['LHRs_To']; ?></td>
						<td>
                            <a href="<?php echo site_url('login_has_role/edit/'.$l['LHRs_IdLogin']); ?>" class="btn btn-success btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('login_has_role/remove/'.$l['LHRs_IdLogin']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>