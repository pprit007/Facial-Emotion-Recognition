
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-warning">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix"><i class="fa fa-gear"></i>Teams</h3>
                        <div class="box-tools pull-right"> 
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                     
                    <div class="box-body">
                        <div class="download_label">Open Lead List</div>
                        <div class="mailbox-messages table-responsive">
                             <?php echo form_open('groups'); ?>
                            <table class="table table-striped table-bordered">
                    
                    <tr>
                        <td>
                            <input type="text" name="Group_Name" value="<?php echo $this->input->post('Group_Name'); ?>" class="form-control" id="Group_Name" autofocus placeholder="Team Name" />
                            <span class="text-danger"><?php echo form_error('Group_Name');?></span>
                        </td>
                        <td>
                            <button class="btn btn-success">Add</button>
                        </td>
                    <tr>
                        <th>Group Name</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach($groups as $g){ ?>
                    <tr>
                    <td><?php echo $g['Group_Name']; ?></td>
                    <td>
                        <a href="<?php echo site_url('groups-remove/'.$this->uricryption->encode($g['id_group'])); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                    </td>
                    </tr>
                    <?php } ?>
                </table>
                            <?php echo form_close(); ?>
                    </div><!-- /.box-body -->
                
                </div>
            </div><!--/.col (left) -->
            </div><!--/.col (left) -->
            <!-- right column -->
