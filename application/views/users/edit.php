<div class="row">
    <div class="col-md-12">
      	<div class="box box-warning">
            <div class="box-header with-border">
              	<h3 class="box-title">Users Edit</h3>
            </div>
			<?php echo form_open_multipart('edit-details'); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="User_Mobile" class="control-label">Mobile</label>
						<div class="form-group">
							<input type="text" name="User_Mobile" value="<?php echo ($this->input->post('User_Mobile') ? $this->input->post('User_Mobile') : $users['User_Mobile']); ?>" class="form-control" id="User_Mobile" />
                                                        <span class="text-danger"><?php echo form_error('User_Mobile'); ?></span>
                                                </div>
					</div>
					<div class="col-md-6">
						<label for="User_Qualification" class="control-label">Qualification</label>
						<div class="form-group">
                                                    <select class="form-control <?php echo (form_error('User_Qualification'))?'border-danger':''?>" name="User_Qualification">
                                                <option value="">-- Select --</option>
                                                <?php foreach ($education as $edu){
                                                    
                                                    $selected=($edu['ideducation']==$users['User_Qualification'])?'selected':'';
                                                    echo "<option value='".$edu['ideducation']."'".$selected.">".$edu['Edu_Name']."</option>";
                                                    
                                                } ?>
                                            </select>
                                                    <span class="text-danger"><?php echo form_error('User_Qualification'); ?></span>
                                                </div>
					</div>
					<div class="col-md-6">
						<label for="User_Experience" class="control-label">Experience ( in years )</label>
						<div class="form-group">
                                                    <input type="number" step="any" name="User_Experience" value="<?php echo ($this->input->post('User_Experience') ? $this->input->post('User_Experience') : $users['User_Experience']); ?>" class="form-control" id="User_Experience" />
                                                     <span class="text-danger"><?php echo form_error('User_Experience'); ?></span>
                                                </div>
					</div>
					<div class="col-md-6">
						<label for="User_KeySkills" class="control-label">Key Skills</label>
						<div class="form-group">
							<input type="text" name="User_KeySkills" value="<?php echo ($this->input->post('User_KeySkills') ? $this->input->post('User_KeySkills') : $users['User_KeySkills']); ?>" class="form-control" id="User_KeySkills" />
                                                        <span class="text-danger"><?php echo form_error('User_KeySkills'); ?></span>
                                                </div>
					</div>
					<div class="col-md-6">
						<label for="User_PermAdd" class="control-label">Address of Living</label>
						<div class="form-group">
                                                    <textarea class="form-control" name="User_PermAdd"><?php echo ($this->input->post('User_PermAdd') ? $this->input->post('User_PermAdd') : $users['User_PermAdd']); ?></textarea>
                                                         <span class="text-danger"><?php echo form_error('User_PermAdd'); ?></span>
                                                </div>
					</div>
					<div class="col-md-6">
						<label for="User_CV" class="control-label">Resume</label>
						<div class="form-group">
							<input type="file" name="User_CV" value="<?php echo ($this->input->post('User_CV') ? $this->input->post('User_CV') : $users['User_CV']); ?>" class="form-control filestyle" id="User_CV" />
                                                        <center><?php if($users['User_CV']!="")echo "<a href='". site_url('resumes/'.$users['User_CV'])."' target='_blank'><i class='fa fa-eye'></i> view<a>"; ?></center>
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