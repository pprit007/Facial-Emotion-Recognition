
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-warning">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix"><i class="fa fa-gear"></i>Role Name :: <?php echo $role['LedgerName']; ?></h3>
                        <div class="box-tools pull-right">
                             <a href="<?php echo site_url('roles-list'); ?>" class="btn btn-success btn-sm pull-right">Back</a>
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        
     <?php echo form_open('role_has_menu/add/'.$this->uricryption->encode($idrole)); ?>
          		<div class="row">
					<div class="col-md-4">
						<label for="RHMs_IdMenu" class="control-label">Menu</label>
						<div class="form-group">
							<select name="RHMs_IdMenu" class="form-control">
								<option value=""> -- Select menu --</option>
								<?php 
								 foreach ($all_menus as $menu)
                                                                     {
								 $selected = ($menu['idmenus'] == $this->input->post('RHMs_IdMenu')) ? ' selected="selected"' : "";
                                                                 
                                                                 if($menu['Menu_Type']==DM)
                                                                     {
                                                                         $style ="style='font-weight:bold'";
                                                                         $icon = "&#9401;&nbsp;";
                                                                         echo '<option value="'.$menu['idmenus'].'" '.$selected." ".$style.'>'.$icon.$menu['Menu_Name'].'</option>';
                                                                     }
                                                                 if($menu['Menu_Type']==MNM)
                                                                     {
                                                                         $style ="style='font-weight:bold'";
                                                                         $icon = "&#9436;&nbsp;";
                                                                         echo '<option value="'.$menu['idmenus'].'" '.$selected." ".$style.'>'.$icon.$menu['Menu_Name'].'</option>';
                                                                     }
//                                                                 
                                                                    if($menu['Menu_Type']==MSM)
                                                                     {
                                                                          $icon = "&#9658;";
                                                                          $style ="style='font-weight:bold'";
                                                                           echo '<option value="'.$menu['idmenus'].'" '.$selected." ".$style.'>'.$icon.$menu['Menu_Name'].'</option>';
                                                                        foreach($sub_menus as $sm)
                                                                        {
                                                                            $icon = " &#9501; ";
                                                                            $style ="style='font-weight:normal'";
                                                                            if($menu['idmenus'] == $sm['Menu_Parrent'] && $sm['idmenus']!=$sm['Menu_Parrent'])
                                                                            {
                                                                              echo '<option value="'.$sm['idmenus'].'" '.$selected." ".$style.'>&nbsp;'.$icon.$sm['Menu_Name'].'</option>';
                                                                            }
                                                                        }
                                                                    }
                                                                   }
								?>
							</select>
                                                    <span class="text-danger"><?php echo form_error('RHMs_IdMenu');?></span>
						</div>
					</div>
                    <div class="col-md-4">
                        <label for="RHMs_IdMenu" class="control-label">Menu Position</label>
                        <input type="number" name="RHMs_MenuPosition"  class="form-control"/>
                    </div>
                    <div class="col-md-4">
                    <br />
                    <button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Add
            	</button>
                    </div>
            </div>
            <?php echo form_close(); ?>
                       </div>
                       </div>
                 <div class="box box-warning">
                     <div class="box-header ptbnull">
                        <h3 class="box-title titlefix"><i class="fa fa-gear"></i> <?php echo $role['LedgerName']; ?> Has Menus</h3>
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
                        <th>Menu Name</th>                        
                        <th>Menu Type</th>                        
                        <th>Parent</th>                        
                        <th>Position</th>                        
                        <th>Actions</th>
                    </tr>
                    </thead>  
                    </tbody>  
                    <?php 
                    $sr = 1;
                    foreach($role_has_menus as $r){ ?>
                    <tr>
                        <td><?php echo $sr++; ?></td>
                        <td>
                        
                        <?php echo $r['Menu_Name']; ?>
                        </td>                        
                        <td>
                        <?php echo $r['MT_MenuName']; ?>
                        </td>                        
                        <td>
                            <?php
                        foreach($all_menus as $am){
                            echo ($r['Menu_Parrent'] == $am['idmenus'])?$am['Menu_Name']:''; 
                        }
                        ?>
                        </td>                        
                        <td>
                        <?php echo $r['RHMs_MenuPosition']; ?>
                        </td>                        
			<td>
                            <a href="<?php echo site_url('role_has_menu/role_menu_delete/'.$this->uricryption->encode($r['RHMs_IdMenu']).'/'.$this->uricryption->encode($idrole)); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                             </tbody>
                </table>          
                            
                    </div><!-- /.box-body -->
                
                </div>
            </div><!--/.col (left) -->
            <!-- right column -->
