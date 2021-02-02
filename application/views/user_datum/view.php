
                 <div class="box box-warning">
                     <div class="box-header">
                        <h3 class="box-title titlefix"><i class="fa fa-gear"></i>List</h3>
                        <div class="box-tools pull-right">
                            <a href="<?php echo site_url('Users'); ?>" class="btn btn-success">Back</a>
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="download_label">List</div>
                        <div class="mailbox-messages table-responsive">
                            <table class="table table-striped table-bordered table-hover example">
                       <thead>         
                     <tr>
                        <th>Sr No</th>
                        <th>Emotion</th>
                        <th>Date</th>
                    </tr>
                       </thead>
                       <tbody>
                    <?php
                    $sr=1;
                    foreach($user_data as $u){ ?>
                    <tr>
                            <td><?php echo $sr++; ?></td>
                            <td><?php echo $u['UD_Emotion']; ?></td>
                            <td><?php echo date('d-M-Y : H:i:s A',strtotime($u['UD_Date'])); ?></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
                    </div><!-- /.box-body -->
                
                </div>
            </div><!--/.col (left) -->
            <!-- right column -->

