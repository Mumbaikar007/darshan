<?php include('aserver100.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="stylemodify.css">
</head>
<body>

	<div class="header">
		<h2>AdminLogin</h2>
	</div>
	
	<form method="post" action="alogin100.php">

		<?php include('error100.php'); ?>

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
		</div>
		<p>
			Not yet a member? <a href="aregister100.php">Sign up</a>
		</p>
	</form>

</body>
</html>