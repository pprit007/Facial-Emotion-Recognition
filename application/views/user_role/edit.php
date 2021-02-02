<?php echo form_open('user_role/edit/'.$user_role['iduser_roles'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="URoleTitle" class="col-md-4 control-label"><span class="text-danger">*</span>URoleTitle</label>
		<div class="col-md-8">
			<input type="text" name="URoleTitle" value="<?php echo ($this->input->post('URoleTitle') ? $this->input->post('URoleTitle') : $user_role['URoleTitle']); ?>" class="form-control" id="URoleTitle" />
			<span class="text-danger"><?php echo form_error('URoleTitle');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="URoleGroup" class="col-md-4 control-label">URoleGroup</label>
		<div class="col-md-8">
			<input type="text" name="URoleGroup" value="<?php echo ($this->input->post('URoleGroup') ? $this->input->post('URoleGroup') : $user_role['URoleGroup']); ?>" class="form-control" id="URoleGroup" />
		</div>
	</div>
	<div class="form-group">
		<label for="URoleParent" class="col-md-4 control-label">URoleParent</label>
		<div class="col-md-8">
			<input type="text" name="URoleParent" value="<?php echo ($this->input->post('URoleParent') ? $this->input->post('URoleParent') : $user_role['URoleParent']); ?>" class="form-control" id="URoleParent" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>