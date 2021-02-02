<div class="content-header">
<section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default" style="margin-top:15px">
          <div class="card-header">
              <a href="<?php echo site_url('menus'); ?>" class="btn btn-success btn-sm pull-right">Back</a> 
              <h1 style="font-weight: bold">Manage Roles</h1>
          </div>
            <div class="card-body">
                <?php echo form_open('roles-list'); ?>
          		<div class="row">
					<div class="col-md-4">
						<label for="LedgerName" class="control-label"><span class="text-danger">*</span>Name</label>
						<div class="form-group">
							<input type="text" name="LedgerName" value="<?php echo $this->input->post('LedgerName'); ?>" class="form-control" id="LedgerName" />
							<span class="text-danger"><?php echo form_error('LedgerName');?></span>
						</div>
					</div>
					<div class="col-md-4">
						<label for="LedgerDesc" class="control-label">Description</label>
						<div class="form-group">
							<input type="text" name="LedgerDesc" value="<?php echo $this->input->post('LedgerDesc'); ?>" class="form-control" id="LedgerDesc" />
						</div>
					</div>
					<div class="col-md-4">
                                                <br />
                                            <button type="submit" class="btn btn-success">
                                                    <i class="fa fa-check"></i> Save
                                            </button>
					</div>
				</div>
            <?php echo form_close(); ?>
			</div>
            </div>
        
    <div class="card card-default" style="margin-top:15px">
          <div class="card-header">
              <h1 style="font-weight: bold">User Logins Listing</h1>
          </div>
            <div class="card-body">     
                <table  id="exorttoexcel" class="table table-striped  dataTable table-bordered">
                     <tr>
                        <th>Sr</th>
                        <th>Role Name</th>
                        <th>Role Description</th>
                        <th>Actions</th>
                    </tr>
                    <?php 
                    $sr = 1;
                    foreach($all_roles as $l){ ?>
                    <tr>
                        <td><?php echo $sr++; ?></td>
                        <td><?php echo $l['LedgerName']; ?></td>
                        <td><?php echo $l['LedgerDesc']; ?></td>
                        <td>
                            <a href="<?php echo site_url('roles-manage/'.$this->uricryption->encode($l['idledgers']));?>" class="btn btn-success btn-xs">Manage</a>
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
