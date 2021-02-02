<style>
    #filtertable tr td{
        padding: 0px 5px;
    }
    
    @media only screen and (max-width: 800px) {
  tfoot {
    display: none;
  }
}
    
</style>
<div class="title-bar">
    <h1 class="title-bar-title">
      <span class="d-ib">Role :: <?php echo $role['LedgerName']; ?></span>
      <a href="<?php echo site_url('roles-list'); ?>" class="btn btn-success btn-sm pull-right">Back</a> 
    </h1>
</div>   

<div class="row gutter-xs">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-body">

            <?php echo form_open('roles-manage/'.$this->uricryption->encode($idrole)); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-5">
						<label for="RHMs_IdMenu" class="control-label">Menu</label>
						<div class="form-group">
							<select name="RHMs_IdMenu" class="form-control">
								<option value=""> -- Select menu --</option>
								<?php 
								foreach($all_menus as $menu)
								{
                                                                    $selected = ($menu['idmenus'] == $this->input->post('RHMs_IdMenu')) ? ' selected="selected"' : "";
                                                                    $sub_menu = ($menu['Menu_Parrent']!=$menu['idmenus'])?"-- ":""; 
                                                                    echo '<option value="'.$menu['idmenus'].'" '.$selected.'>'.$sub_menu.$menu['Menu_Name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
                    <div class="col-md-5">
                    <br />
                    <button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Add
            	</button>
                    </div>
				</div>
			</div>
          	<div class="box-footer">
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>

<div class="title-bar">
    <h1 class="title-bar-title">
      <span class="d-ib">Available Menus</span>
    </h1>
</div> 
<!--    <div class="box-body">-->
        <div class="card">
            <div class="card-body"> 
                 <table  id="exorttoexcel" class="table table-striped  dataTable table-bordered" cellspacing="0" width="100%">
                    <tr>
                        <th>Sr</th>
                        <th>Menu</th>                        
                        <th>Actions</th>
                    </tr>
                    <?php 
                    $sr = 1;
                    foreach($role_has_menus as $r){ ?>
                    <tr>
                        <td><?php echo $sr++; ?></td>
                        <td>
                        <?php echo ($r['Menu_Parrent'] != $r['idmenus'])?'--':''; ?>
                        <?php echo $r['Menu_Name']; ?>
                        </td>                        
			<td>
                            <a href="<?php echo site_url('role-menu-delete/'.$this->uricryption->encode($r['RHMs_IdMenu']).'/'.$this->uricryption->encode($idrole)); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>             
            </div>
        </div>
    </div>
</div>
