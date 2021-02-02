
            <div class="col-md-12">
                <!-- general form elements -->
                 <div class="box box-warning">
                     <div class="box-header ptbnull">
                        <h3 class="box-title titlefix"><i class="fa fa-gear"></i> Menu List</h3>
                        <div class="box-tools pull-right">
                            <a href="<?php echo site_url('menu-add'); ?>" class="btn btn-success btn-sm pull-right">Add</a> 
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="download_label">Menu List</div>
                        <div class="mailbox-messages table-responsive">
                            <table class="table table-striped table-bordered table-hover example">
                        <thead>         
                        <tr>
                        <th>Sr</th>
                        <th>Name</th>
                        <th>Link</th>
                        <th>Rout To</th>
                        <th>Parent</th>
                        <th>Action</th>
                    </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sr = 1;
                        foreach($menus as $m){ ?>
                    <tr>
                        <td><?php echo $sr++; ?></td>
                        <td><?php echo $m['Menu_Name']; ?></td>
                        <td><?php echo $m['Menu_link']; ?></td>
                        <td><?php echo $m['Menu_RouteTo']; ?></td>
                        <td><?php echo $m['pname']; ?></td>
                        <td>
                       
                            <a href="<?php echo site_url('menu-edit/'.$this->uricryption->encode($m['idmenus'])); ?>" class="btn btn-success btn-sm"><span class="fa fa-pencil"></span></a> 
                             <a href="<?php echo site_url('menu-delete/'.$m['idmenus']); ?>" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> </a>
                       
                        </td>
                    </tr>
                    <?php } ?>
                        </tbody>
                </table>
                       
                    </div><!-- /.box-body -->
                
                </div>
            </div><!--/.col (left) -->
            <!-- right column -->


