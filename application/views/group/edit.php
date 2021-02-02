<div class="row">
    <div class="col-md-12">
      	<div class="box box-warning">
            <div class="box-header with-border">
              	<h3 class="box-title">Group Edit</h3>
            </div>
			<?php echo form_open('group/edit/'.$group['id_group']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="Group_Name" class="control-label"><span class="text-danger">*</span>Group Name</label>
						<div class="form-group">
							<input type="text" name="Group_Name" value="<?php echo ($this->input->post('Group_Name') ? $this->input->post('Group_Name') : $group['Group_Name']); ?>" class="form-control" id="Group_Name" />
							<span class="text-danger"><?php echo form_error('Group_Name');?></span>
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