<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Users Add</h3>
            </div>
            <?php echo form_open('users/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="User_FullName" class="control-label">User FullName</label>
						<div class="form-group">
							<input type="text" name="User_FullName" value="<?php echo $this->input->post('User_FullName'); ?>" class="form-control" id="User_FullName" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="User_Mobile" class="control-label">User Mobile</label>
						<div class="form-group">
							<input type="text" name="User_Mobile" value="<?php echo $this->input->post('User_Mobile'); ?>" class="form-control" id="User_Mobile" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="User_Qualification" class="control-label">User Qualification</label>
						<div class="form-group">
							<input type="text" name="User_Qualification" value="<?php echo $this->input->post('User_Qualification'); ?>" class="form-control" id="User_Qualification" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="User_Experience" class="control-label">User Experience</label>
						<div class="form-group">
							<input type="text" name="User_Experience" value="<?php echo $this->input->post('User_Experience'); ?>" class="form-control" id="User_Experience" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="User_KeySkills" class="control-label">User KeySkills</label>
						<div class="form-group">
							<input type="text" name="User_KeySkills" value="<?php echo $this->input->post('User_KeySkills'); ?>" class="form-control" id="User_KeySkills" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="User_PermAdd" class="control-label">User PermAdd</label>
						<div class="form-group">
							<input type="text" name="User_PermAdd" value="<?php echo $this->input->post('User_PermAdd'); ?>" class="form-control" id="User_PermAdd" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="User_CV" class="control-label">User CV</label>
						<div class="form-group">
							<input type="text" name="User_CV" value="<?php echo $this->input->post('User_CV'); ?>" class="form-control" id="User_CV" />
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