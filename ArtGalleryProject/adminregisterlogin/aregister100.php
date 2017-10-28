<?php include('aserver100.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="stylemodify.css">
</head>
<body>
	<div class="header">
		<h2>AdminRegister</h2>
	</div>
	
	<form method="post" action="aregister100.php">

		<?php include('error100.php'); ?>

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
		<p>
			Already a member? <a href="login100.php">Sign in</a>
		</p>
	</form>
</body>
</html>
 