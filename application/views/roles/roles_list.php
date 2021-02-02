
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-warning">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix"><i class="fa fa-gear"></i>Add  Role</h3>
                        <div class="box-tools pull-right">

                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
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
                 <div class="box box-warning">
                     <div class="box-header ptbnull">
                        <h3 class="box-title titlefix"><i class="fa fa-gear"></i> Role List</h3>
                        <div class="box-tools pull-right">

                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="download_label">Fees Type List</div>
                        <div class="mailbox-messages table-responsive">
                            <table class="table table-striped table-bordered table-hover example">
                       <thead>         
                     <tr>
                        <th>Sr</th>
                        <th>Role Name</th>
                        <th>Role Description</th>
                        <th>Manage Role Menu</th>
                        <th>Delete Role</th>
                    </tr>
                     </thead>
                     <tbody>
                    <?php 
                    $sr = 1;
                    foreach($all_roles as $l){ ?>
                    <tr>
                        <td><?php echo $sr++; ?></td>
                        <td><?php echo $l['LedgerName']; ?></td>
                        <td><?php echo $l['LedgerDesc']; ?></td>
                        <td>
                            <a href="<?php echo site_url('roles-has-menu/'.$this->uricryption->encode($l['idledgers']));?>" class="btn btn-success btn-xs">Manage Role Menu</a>
                        </td>
                        <td>
                            <a href="<?php echo site_url('roles-delete/'.$this->uricryption->encode($l['idledgers']));?>" class="btn btn-danger btn-xs fa fa-trash"></a>
                        </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
                    </div><!-- /.box-body -->
                
                </div>
            </div><!--/.col (left) -->
            <!-- right column -->



