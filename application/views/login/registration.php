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
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
     <?php echo form_open('sign-in'); ?>   
    <div class="container">
  <div class="card">
      <div class="card-header">
           <center><h4>Registration</h4></center>
      <center><?php if(isset($error)){ echo $error;} ?></center>
      </div>
      <div class="card-body">
          <div class="input-group mb-3">
          <input type="text" class="form-control" name="user_login" placeholder="Username" value="<?php echo $this->input->post('user_login');?>">
          <div class="input-group-append input-group-text">
              <span class="fas fa-envelope" <?php echo (form_error('user_login'))?'style="color:red"':'';?>></span>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="user_password" placeholder="Password">
          <div class="input-group-append input-group-text">
              <span class="fas fa-lock"  <?php echo (form_error('user_password'))?'style="color:red"':'';?>></span>
          </div>
        </div>
      </div> 
      <div class="card-footer">
          <button type="submit" class="btn btn-success">Register</button>
      </div>
      </div>
  </div>
             <?php echo form_close(); ?>
</div>       
<div class="col-md-4"></div>
</div>
<footer class="container">
<hr>

<span style="float: right;font-weight: bold">Powered By<a href="<?php echo $theme['devsite']; ?>" target="blank"> <?php echo $theme['developer']; ?></a></span>
</footer>
</div>
</body>
</html>
