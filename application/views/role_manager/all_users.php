
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-warning">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix"><i class="fa fa-gear"></i>Manage User Roles</h3>
                        <div class="box-tools pull-right">

                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                   
                    <div class="box-body">
                        <div class="download_label">All Users</div>
                        <div class="mailbox-messages table-responsive">
                            <table class="table table-striped table-bordered table-hover example">
                                 <thead> 
                    <tr>
                            <th>Sr</th>
                            <th>Active</th>
                            <th>Username</th>
                            <th>User Group</th>
                            <th>Manage Roles</th>
                            <!--<th>Edit</th>-->
                    </tr>
                                 </thead>
                                 <tbody>
                    <?php
                    $sr=1;
                    foreach($logins as $l){ ?>
                    <tr>
                        <td><?php echo $sr++; ?></td>
                        <td><?php echo ($l['LoginActive']==1)?'ACTIVE':'IN-ACTIVE'; ?></td>
                        <td><?php echo $l['LoginUsername']; ?></td>
                        <td><?php echo $l['GroupName']; ?></td>
                        <td>
                            <a href="<?php echo site_url('manage-user-roles/'.$this->uricryption->encode($l['idlogins'])); ?>" class="btn btn-success btn-sm"><span class="fa fa-tasks"></span> Manage Roles</a> 
                        </td>
<!--                        <td>
                            <a href="<?php echo site_url('create-username/'.$this->uricryption->encode($l['idlogins'])); ?>" class="btn btn-warning btn-sm"><span class="fa fa-pencil"></span> Edit</a> 
                        </td>-->
                    </tr>
                    <?php } ?>
                                 </tbody>
                </table>
                       
                    </div><!-- /.box-body -->
                
                </div>
            </div><!--/.col (left) -->
            </div><!--/.col (left) -->
            <!-- right column -->



