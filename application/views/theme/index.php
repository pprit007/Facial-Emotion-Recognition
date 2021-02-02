<div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">Theme Setting</h3>
            	<div class="box-tools">
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Main Nav</th>
						<th>Left Nav</th>
						<th>Submenu</th>
						<th>Icon</th>
						<th>Developer</th>
						<th>Developer Site</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($theme as $t){ ?>
                    <tr>
						<td><?php echo $t['main_nav']; ?></td>
						<td><?php echo $t['left_nav']; ?></td>
						<td><?php echo $t['submenu']; ?></td>
						<td><?php echo $t['icon']; ?></td>
						<td><?php echo $t['developer']; ?></td>
						<td><?php echo $t['devsite']; ?></td>
						<td>
                            <a href="<?php echo site_url('theme/edit/'.$t['idtheme']); ?>" class="btn btn-success btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
