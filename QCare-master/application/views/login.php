<!DOCTYPE html>
<html>
<head>
  <title>Login Admin</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/stylelogin.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/font-awesome.min.css">
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
</head>
<body>
<div class="container">
<img class="image" src="<?php echo base_url()?>images/grup.png">
                 
  <form role="form" id="form-login" method="post">
    <div class="form-input">
      <input type="text" name="username" placeholder="Username">
    </div>
    <div class="form-input">
      <input type="password" name="password" placeholder="Password">
    </div>
    <input type="submit" name="submit" value="L O G I N" class="login">
  </form>
  <div>
  </div>
</div>
</body>
</html>