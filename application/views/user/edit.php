<div class="content-header">
<section class="content">
      <div class="container-fluid">
<?php echo form_open('system-user-edit/'.$this->uricryption->encode($user['idusers']),array("class"=>"form-horizontal")); ?>
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default" style="margin-top:15px">
          <div class="card-header">
            <a href="<?php echo site_url('system-users'); ?>" class="btn btn-success pull-right btn-sm">Back</a> 
             <h1 style="font-weight: bold">System User Edit</h1>
          </div>
        <div class="card-body">
            <div class="row">
		<div class="col-md-12">
		<label for="UserActive">Active
			<input type="checkbox" name="UserActive" value="1" <?php echo ($user['UserActive']==1 ? 'checked="checked"' : ''); ?> id='UserActive' />
		</label><br /><br />
                </div>
		<div class="col-md-4"><br />
		<label for="UserFName"><span class="text-danger">*</span>First Name</label>
			<input type="text" name="UserFName" value="<?php echo ($this->input->post('UserFName') ? $this->input->post('UserFName') : $user['UserFName']); ?>" class="form-control" id="UserFName" />
			<span class="text-danger"><?php echo form_error('UserFName');?></span>
		</div>
		<div class="col-md-4"><br />
		<label for="UserMName">Middle Name</label>
			<input type="text" name="UserMName" value="<?php echo ($this->input->post('UserMName') ? $this->input->post('UserMName') : $user['UserMName']); ?>" class="form-control" id="UserMName" />
		</div>
		<div class="col-md-4"><br />
		<label for="UserLName"><span class="text-danger">*</span>Last Name</label>
			<input type="text" name="UserLName" value="<?php echo ($this->input->post('UserLName') ? $this->input->post('UserLName') : $user['UserLName']); ?>" class="form-control" id="UserLName" />
			<span class="text-danger"><?php echo form_error('UserLName');?></span>
		</div>
		<div class="col-md-4"><br />
		<label for="UserPhone1"><span class="text-danger">*</span>Phone </label>
			<input type="text" name="UserPhone1" value="<?php echo ($this->input->post('UserPhone1') ? $this->input->post('UserPhone1') : $user['UserPhone1']); ?>" class="form-control" id="UserPhone1" />
			<span class="text-danger"><?php echo form_error('UserPhone1');?></span>
		</div>
		<div class="col-md-4"><br />
		<label for="UserPhone2">Alt. Phone</label>
			<input type="text" name="UserPhone2" value="<?php echo ($this->input->post('UserPhone2') ? $this->input->post('UserPhone2') : $user['UserPhone2']); ?>" class="form-control" id="UserPhone2" />
			<span class="text-danger"><?php echo form_error('UserPhone2');?></span>
		</div>
		<div class="col-md-4"><br />
		<label for="UserEmail">Email</label>
			<input type="text" name="UserEmail" value="<?php echo ($this->input->post('UserEmail') ? $this->input->post('UserEmail') : $user['UserEmail']); ?>" class="form-control" id="UserEmail" />
			<span class="text-danger"><?php echo form_error('UserEmail');?></span>
		</div>
		<div class="col-md-8"><br />
                <label for="UserFullAddress"><span class="text-danger">*</span>Address</label>
			<textarea name="UserFullAddress" class="form-control" id="UserFullAddress"><?php echo ($this->input->post('UserFullAddress') ? $this->input->post('UserFullAddress') : $user['UserFullAddress']); ?></textarea>
			<span class="text-danger"><?php echo form_error('UserFullAddress');?></span>
		</div>

	</div>
                </div>
            <div class="card-footer">
            <button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          </div>
                </div>
<?php echo form_close(); ?>
                </div>
</section>
              </div>