<?php echo form_open('user_has_role/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="UHRs_Active" class="col-md-4 control-label">UHRs Active</label>
		<div class="col-md-8">
			<input type="checkbox" name="UHRs_Active" value="1" id="UHRs_Active" />
		</div>
	</div>
	<div class="form-group">
		<label for="UHRs_IdRole" class="col-md-4 control-label">User Role</label>
		<div class="col-md-8">
			<select name="UHRs_IdRole" class="form-control">
				<option value="">select user_role</option>
				<?php 
				foreach($all_user_roles as $user_role)
				{
					$selected = ($user_role['iduser_roles'] == $this->input->post('UHRs_IdRole')) ? ' selected="selected"' : "";

					echo '<option value="'.$user_role['iduser_roles'].'" '.$selected.'>'.$user_role['URoleTitle'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="UHRs_IdUser" class="col-md-4 control-label">UHRs IdUser</label>
		<div class="col-md-8">
			<input type="text" name="UHRs_IdUser" value="<?php echo $this->input->post('UHRs_IdUser'); ?>" class="form-control" id="UHRs_IdUser" />
		</div>
	</div>
	<div class="form-group">
		<label for="UHRs_CreatedOnAt" class="col-md-4 control-label">UHRs CreatedOnAt</label>
		<div class="col-md-8">
			<input type="text" name="UHRs_CreatedOnAt" value="<?php echo $this->input->post('UHRs_CreatedOnAt'); ?>" class="form-control" id="UHRs_CreatedOnAt" />
		</div>
	</div>
	<div class="form-group">
		<label for="UHRs_UpdatedOnAt" class="col-md-4 control-label">UHRs UpdatedOnAt</label>
		<div class="col-md-8">
			<input type="text" name="UHRs_UpdatedOnAt" value="<?php echo $this->input->post('UHRs_UpdatedOnAt'); ?>" class="form-control" id="UHRs_UpdatedOnAt" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>