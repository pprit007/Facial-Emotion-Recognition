
<?php $theme = $this->db->get_where('theme',array('idtheme'=>1))->row_array(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div  style="margin-top: 10%">
       <center><h4 style="color: green">WELCOME TO <?php echo $theme['project']; ?></h4></center>
     <center>
          <img src="<?php echo site_url('interface/'.$theme['icon']);?>" style="width: 250px"><br>
     </center><br>
           <?php echo form_open('resend-verification'); ?>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"> 
    <div class="container">
  <div class="card">
      <div class="card-header">
           <center><h4>Verification</h4></center>
      <center><?php if(isset($error)){ echo $error;} ?></center>
      </div>
      <div class="card-body">
          <span class="text-danger"><?php if(isset($err_message))echo $err_message;?></span>
                    <label for="User_Email" class="control-label"><span class="text-danger">*</span>E-mail</label>
                        <input type="text" name="User_Email" value="<?php echo $this->input->post('User_Email'); ?>" class="form-control <?php echo (form_error('User_Email') || isset($err_message))?'border-danger':''?>" id="User_Email"/>
                        <span class="text-danger"><?php echo form_error('User_Email');?></span>
            </div>
      <div class="card-footer">
          <button type="submit" class="btn btn-success">Resend Verification</button><br><br>
              <a href="<?php echo site_url('login'); ?>" style="text-align: left;text-decoration: underline">Already Verified</a>
              <a href="<?php echo site_url('registration'); ?>" style="float: right;text-decoration: underline">Do Not Have Account ! Sign Up</a>
                        
      </div>
      </div>
  </div>
</div>       
             <?php echo form_close(); ?>
<div class="col-md-4"></div>
</div>
<footer class="container">
<hr>

<span style="float: right;font-weight: bold">Powered By<a href="<?php echo $theme['devsite']; ?>" target="blank"> <?php echo $theme['developer']; ?></a></span>
</footer>
</div>
</body>
</html>
