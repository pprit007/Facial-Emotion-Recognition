
                <!-- general form elements -->
                <div class="box box-warning">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix"><i class="fa fa-gear"></i>Menu Add</h3>
                        <div class="box-tools pull-right">
                             <a href="<?php echo site_url('menus'); ?>" class="btn btn-success btn-sm pull-right">Back</a> 
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                         <?php echo form_open('menu-add'); ?>
                    <div class="box-body">
          		<div class="row">
				<div class="col-md-4">
                                    <label for="Menu_Type" class="control-label">Menu Type</label>
                                    <div class="form-group">
                                        <select name="Menu_Type" class="form-control" id="Menu_Type" onchange="menutype();">
                                                    <option value="">select Menu</option>
                                                        <?php 
                                                        foreach($menus_type as $mt)
                                                        {
                                                                $selected = ($mt['idmenu_type'] == $this->input->post('Menu_Type')) ? ' selected="selected"' : "";

                                                                echo '<option value="'.$mt['idmenu_type'].'" '.$selected.'>'.$mt['MT_MenuName'].'</option>';
                                                        } 
                                                        ?>
                                                    
                                            </select>
                                        <span class="text-danger"><?php echo form_error('Menu_Type');?></span>
                                    </div>
				</div>
                                					
                              <div class="col-md-4" id="mastermenu" hidden>
                                        <label for="Menu_Parrent" class="control-label">Parent Menu</label>
                                        <div class="form-group">
                                            <select name="Menu_Parrent" class="form-control" id="Menu_Parrent">
                                                        <option value="">-- Select Menu --</option>
                                                        <?php 
                                                        foreach($master_menus as $menu)
                                                        {
                                                                $selected = ($menu['idmenus'] == $this->input->post('Menu_Parrent')) ? ' selected="selected"' : "";

                                                                echo '<option value="'.$menu['idmenus'].'" '.$selected.'>'.$menu['Menu_Name'].'</option>';
                                                        } 
                                                        ?>
                                                </select>
                                        </div>
                                </div>				
                            <div class="col-md-4">
                                    <label for="Menu_Name" class="control-label"><span class="text-danger">*</span>Menu Name</label>
                                    <div class="form-group">
                                            <input type="text" name="Menu_Name" value="<?php echo $this->input->post('Menu_Name'); ?>" class="form-control" id="Menu_Name" />
                                            <span class="text-danger"><?php echo form_error('Menu_Name');?></span>
                                    </div>
                            </div>
                            <div class="col-md-4">
                                    <label for="Menu_link" class="control-label"><span class="text-danger">*</span>Menu link</label>
                                    <div class="form-group">
                                            <input type="text" name="Menu_link" value="<?php echo $this->input->post('Menu_link'); ?>" class="form-control" id="Menu_link" />
                                            <span class="text-danger"><?php echo form_error('Menu_link');?></span>
                                    </div>
                            </div>
                            <div class="col-md-4">
                                    <label for="Menu_RouteTo" class="control-label"><span class="text-danger">*</span>Route To</label>
                                    <div class="form-group">
                                            <input type="text" name="Menu_RouteTo" value="<?php echo $this->input->post('Menu_RouteTo'); ?>" class="form-control" id="Menu_RouteTo" />
                                            <span class="text-danger"><?php echo form_error('Menu_RouteTo');?></span>
                                    </div>
                            </div>
					
                            <div class="col-md-4">
                                    <label for="Menu_Icon" class="control-label">Menu Icon</label>
                                    <div class="form-group">
                                            <input type="text" name="Menu_Icon" value="<?php echo $this->input->post('Menu_Icon'); ?>" class="form-control" id="Menu_Icon" />
                                    </div>
                            </div>
					
                            <div class="col-md-4" id="Menu_Level" hidden>
                                        <label for="Menu_Level" class="control-label">Menu Level</label>
                                        <div class="form-group">
                                                <input type="text" name="Menu_Level" value="<?php echo $this->input->post('Menu_Level'); ?>" class="form-control" />
                                        </div>
                            </div>
                              <div class="col-md-12" id="Menu_Level"></div>
            </div>
                       </div>
                    <div class="box-footer">
            <button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          </div>
            <?php echo form_close(); ?>
                       </div>
            <!-- right column -->

<script>
       
       function menutype()
       {
           var Menu_Type = document.getElementById("Menu_Type").value;
          
          if(Menu_Type==0)
          {
           document.getElementById("mastermenu").hidden=false;
           document.getElementById("Menu_Parrent").required=true;
           document.getElementById("Menu_Level").hidden=false;
            document.getElementById("Menu_link").value="";
           document.getElementById("Menu_RouteTo").value="";
           document.getElementById("Menu_link").readOnly =false;
           document.getElementById("Menu_RouteTo").readOnly =false;
          }
          else
          {
           document.getElementById("Menu_Level").hidden=true;
           document. getElementById("mastermenu").hidden=true;
           document.getElementById("Menu_link").readOnly =false;
           document.getElementById("Menu_RouteTo").readOnly =false;
            document.getElementById("Menu_link").value="";
           document.getElementById("Menu_RouteTo").value="";
          }
          
          if(Menu_Type==2)
          {
           document.getElementById("Menu_link").readOnly =true;
           document.getElementById("Menu_RouteTo").readOnly =true;
           document.getElementById("Menu_link").value="#";
           document.getElementById("Menu_RouteTo").value="#";
          }
       }
</script>