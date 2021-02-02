 <?php echo form_open('change-password'); ?>
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-warning">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix"><i class="fa fa-gear"></i> Change Password</h3>
                        <div class="box-tools pull-right">

                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    
                         <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <label for="Cmp_from" class="control-label">Current Password</label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="current_pass" value="<?php echo $this->input->post('current_pass'); ?>" />  
                            <span class="text-danger"><?php echo form_error('current_pass'); ?></span>
                            <span class="text-danger"><?php if(isset($msge)){echo $msge;}?></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="Cmp_from" class="control-label">New Password</label>
                        <div class="form-group">
                             <input type="password" class="form-control" name="new_pass" value="<?php echo $this->input->post('new_pass'); ?>" />  
                             <span class="text-danger"><?php echo form_error('new_pass'); ?></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="Cmp_from" class="control-label">Confirm Password</label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="conf_pass" value="<?php echo $this->input->post('conf_pass'); ?>" />
                            <span class="text-danger"><?php echo form_error('conf_pass'); ?></span>
                            <span class="text-success"><?php if(isset($msgs)){echo $msgs;}?></span>
                        </div>
                    </div>
                   
            </div>
          </div> 
           <div class="box-footer"><br />
                <button class="btn btn-success">Change Password</button>
           </div>
                    </div><!-- /.box-body -->
                </div>
 <?php echo form_close();?>
   
      


