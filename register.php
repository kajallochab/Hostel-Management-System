<?php include "server.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
	body{
		background-image: url('Hostel/Hostel-2.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
	}
	.header{
		background-color: #000066;
    color: #ffffff;
	}
	.input-group{
		color: black;
	}
	.btn{
		background-color:#000066;
	}
  </style>
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include "errors.php"; ?>
	  <div class="input-group">
  	  <label> Student ID</label>
  	  <input type="id" name="id" value="<?php echo $id; ?>">
  	</div>
	  <div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  </form>
</body>
</html>