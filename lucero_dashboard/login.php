<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login form</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="center">
		<h1>Login</h1>
		<form method="post">
		  <div class="txt">
			<input type="text"  required>
			<span></span>
			<label>Email address</label>
		  </div>
		  <div class="txt">
			<input type="password"  required>
			<span></span>
			<label>Password</label>
		  </div>
		  <div class="pass">Forgot Password?</div>
		  <input type="submit" value="Login">
		  <div class="link">
			Create an account? <a href="signup.php">Signup</a>
		  </div>
		</form>
	  </div>
</body>
</html>