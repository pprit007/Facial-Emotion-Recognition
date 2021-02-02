<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    .form-gap {
    padding-top: 70px;
}
</style>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <div class="form-gap"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Create Password</h2>
                  <p>You can set your new password here.</p>
                  <p style="color:green"><?php if(isset($sccess_message)){echo $sccess_message;} ?></p>
                  <div class="panel-body">
                     <?php echo form_open('reset-password/'.$this->uricryption->encode($otp).'/'.$this->uricryption->encode($idusers)); ?>   
                      <input  name="User_PassKey" placeholder="New Password" class="form-control" value="<?php echo $this->input->post('User_PassKey'); ?>"  type="password" />
                          <span class="text-danger"><?php echo form_error('User_PassKey');?></span>
                          <br />
                          <input  name="cpass" placeholder="Confirm Password" class="form-control" value="<?php echo $this->input->post('cpass'); ?>"    type="password" />
                          <span class="text-danger"><?php echo form_error('cpass');?></span>
                          <br />
                          <input name="recover-submit" class="btn btn-lg btn-success btn-block" value="Reset Password" type="submit">
                      <?php echo form_close(); ?>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>