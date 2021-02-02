
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-warning">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix"><i class="fa fa-gear"></i>Add Roles for <?php echo $LedgerDetails['LedgerName'];?></h3>
                        <div class="box-tools pull-right">
                            <a href="<?php echo site_url('all-users'); ?>" class="btn btn-success btn-sm pull-right">Back</a>
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
          		<?php echo form_open('manage-user-roles/'.$this->uricryption->encode($idlogin)); ?>
					<div class="row">
					<div class="col-md-6">
						<label for="LHRs_IdRole" class="control-label">Roles</label>
						<div class="form-group">
							<select name="LHRs_IdRole" class="form-control">
								<option value="">select roles</option>
								<?php 
								foreach($ledger_roles as $ledger)
								{
									$selected = ($ledger['idledgers'] == $this->input->post('LHRs_IdRole')) ? ' selected="selected"' : "";

									echo '<option value="'.$ledger['idledgers'].'" '.$selected.'>'.$ledger['LedgerName'].'</option>';
								} 
								?>
							</select>
                                                    <span class="text-danger"><?php echo form_error('LHRs_IdRole'); ?></span>
						</div>
					</div>
                <div class="col-md-6">
                        <br />
                    <button type="submit" class="btn btn-success btn-sm">
                            <i class="fa fa-check"></i> Add Role
                    </button>
                </div>
            </div>
            <?php echo form_close(); ?>
                       </div>
                       </div>
                 <div class="box box-warning">
                     <div class="box-header ptbnull">
                        <h3 class="box-title titlefix"><i class="fa fa-gear"></i><?php echo $LedgerDetails['LedgerName'];?> Has Following Roles</h3>
                        <div class="box-tools pull-right">

                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="download_label">Fees Type List</div>
                        <div class="mailbox-messages table-responsive">
                            <table class="table table-striped table-bordered table-hover example">
                    <tr>
                            <th>Sr</th>
                            <th>Role</th>
                            <th>Actions</th>
                    </tr>
                            <?php
                            $sr=1;
                            foreach($login_has_roles as $l){ ?>
                    <tr>
                            <td><?php echo $sr++; ?></td>
                            <td>
                            <?php echo $l['RoleName']; ?>
                            </td>
                            <td>
                                 <a href="<?php echo site_url('login-has-role-delete/'.$this->uricryption->encode($l['LHRs_IdRole']).'/'.$this->uricryption->encode($idlogin)); ?>" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                    </tr>
                    <?php } ?>
                </table> 
                    </div><!-- /.box-body -->
                
                </div>
            </div><!--/.col (left) -->
            <!-- right column -->

            