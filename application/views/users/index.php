
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">Registrations</h3>
            	<div class="box-tools">
                    
                </div>
            </div>
            <div class="box-body">
                 <div class="download_label">List</div>
                        <div class="mailbox-messages table-responsive">
                            <table class="table table-striped table-bordered table-hover example">
                       <thead>      
                    <tr>
                        <th>Sr No</th>
                        <th>Full Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Registration Date</th>
                        <th>Action</th>
                    </tr>
                       </thead>
                       <tbody>
                    <?php
                    $sr=1;
                    foreach($users as $u){ ?>
                    <tr>
                        <td><?php echo $sr++; ?></td>
                        <td><?php echo $u['User_FullName']; ?></td>
                        <td><?php echo $u['User_Mobile']; ?></td>
                        <td><?php echo $u['User_Email']; ?></td>
                        <td><?php echo date('d-M-Y',strtotime($u['User_RegDate'])); ?></td>
                        <td><a href="<?php echo site_url('view/'.$this->uricryption->encode($u['idusers'])); ?>"  class="btn btn-success fa fa-eye btn-sm"> View</a></td>  
                    </tr>
                    <?php } ?>
                       </tbody>
                </table>
                              
            </div>
        </div>
    </div>
