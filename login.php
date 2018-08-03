<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
		<br>atau <br>
		<button type="submit" class="btn1" name="#"><center><img src="image/p.png">  <a href="index1.php">Login dengan google</a></center></button>
  	</div>
  	<p>
  		Belum punya akun? <a href="register.php">Daftar</a>
  	</p>
  </form>
</body>
</html>