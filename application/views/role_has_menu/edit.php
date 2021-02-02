<div class="row">
    <div class="col-md-12">
      	<div class="box box-warning">
            <div class="box-header with-border">
              	<h3 class="box-title">Role Has Menu Edit</h3>
            </div>
			<?php echo form_open('role_has_menu/edit/'.$role_has_menu['RHMs_IdRole']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="RHMs_IdMenu" class="control-label">Menu</label>
						<div class="form-group">
							<select name="RHMs_IdMenu" class="form-control">
								<option value="">select menu</option>
								<?php 
								foreach($all_menus as $menu)
								{
									$selected = ($menu['idmenus'] == $role_has_menu['RHMs_IdMenu']) ? ' selected="selected"' : "";

									echo '<option value="'.$menu['idmenus'].'" '.$selected.'>'.$menu['Menu_Name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="RHMs_Seq" class="control-label">RHMs Seq</label>
						<div class="form-group">
							<input type="text" name="RHMs_Seq" value="<?php echo ($this->input->post('RHMs_Seq') ? $this->input->post('RHMs_Seq') : $role_has_menu['RHMs_Seq']); ?>" class="form-control" id="RHMs_Seq" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="RHMs_Permission" class="control-label">RHMs Permission</label>
						<div class="form-group">
							<input type="text" name="RHMs_Permission" value="<?php echo ($this->input->post('RHMs_Permission') ? $this->input->post('RHMs_Permission') : $role_has_menu['RHMs_Permission']); ?>" class="form-control" id="RHMs_Permission" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="RHMs_Level" class="control-label">RHMs Level</label>
						<div class="form-group">
							<input type="text" name="RHMs_Level" value="<?php echo ($this->input->post('RHMs_Level') ? $this->input->post('RHMs_Level') : $role_has_menu['RHMs_Level']); ?>" class="form-control" id="RHMs_Level" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="RHMs_Parrent" class="control-label">RHMs Parrent</label>
						<div class="form-group">
							<input type="text" name="RHMs_Parrent" value="<?php echo ($this->input->post('RHMs_Parrent') ? $this->input->post('RHMs_Parrent') : $role_has_menu['RHMs_Parrent']); ?>" class="form-control" id="RHMs_Parrent" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="RHMs_Refer" class="control-label">RHMs Refer</label>
						<div class="form-group">
							<input type="text" name="RHMs_Refer" value="<?php echo ($this->input->post('RHMs_Refer') ? $this->input->post('RHMs_Refer') : $role_has_menu['RHMs_Refer']); ?>" class="form-control" id="RHMs_Refer" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>