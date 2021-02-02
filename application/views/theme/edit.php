<div class="row">
    <div class="col-md-12">
      	<div class="box box-warning">
            <div class="box-header with-border">
              	<h3 class="box-title">Theme Edit</h3>
            </div>
			<?php echo form_open_multipart('theme/edit/'.$theme['idtheme']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="main_nav" class="control-label"><span class="text-danger">*</span>project</label>
						<div class="form-group">
							<input type="text" name="project" class="form-control" id="project" value="<?php echo ($this->input->post('project') ? $this->input->post('project') : $theme['project']); ?>" />
							<span class="text-danger"><?php echo form_error('project');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="main_nav" class="control-label"><span class="text-danger">*</span>Main Nav</label>
						<div class="form-group">
							<input type="text" name="main_nav" class="form-control" id="main_nav" value="<?php echo ($this->input->post('main_nav') ? $this->input->post('main_nav') : $theme['main_nav']); ?>" />
							<span class="text-danger"><?php echo form_error('main_nav');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="left_nav" class="control-label"><span class="text-danger">*</span>Left Nav</label>
						<div class="form-group">
                                                    <input type="text" name="left_nav" class="form-control" id="left_nav" value="<?php echo ($this->input->post('left_nav') ? $this->input->post('left_nav') : $theme['left_nav']); ?>">
							<span class="text-danger"><?php echo form_error('left_nav');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="submenu" class="control-label"><span class="text-danger">*</span>Submenu</label>
						<div class="form-group">
                                                    <input type="text" name="submenu" class="form-control" id="submenu" value="<?php echo ($this->input->post('submenu') ? $this->input->post('submenu') : $theme['submenu']); ?>">
							<span class="text-danger"><?php echo form_error('submenu');?></span>
						</div>
					</div>
					<div class="col-md-6">
                                            <label for="icon" class="control-label">Icon : <span style="color:red">Image Size 290px * 51px</span></label>
						<div class="form-group">
                                                    <input type="file" name="icon" class="filestyle form-control" id="icon" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="developer" class="control-label"><span class="text-danger">*</span>Developer</label>
						<div class="form-group">
                                                    <input type="text" name="developer" class="form-control" id="developer" value="<?php echo ($this->input->post('developer') ? $this->input->post('developer') : $theme['developer']); ?>">
							<span class="text-danger"><?php echo form_error('developer');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="devsite" class="control-label"><span class="text-danger">*</span>Developer</label>
						<div class="form-group">
                                                    <input type="text" name="devsite" class="form-control" id="devsite" value="<?php echo ($this->input->post('devsite') ? $this->input->post('devsite') : $theme['devsite']); ?>">
							<span class="text-danger"><?php echo form_error('devsite');?></span>
						</div>
					</div>
                                    <div class="col-md-6">
                                        <img src="<?php echo site_url('interface/'.$theme['icon']); ?>" />
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