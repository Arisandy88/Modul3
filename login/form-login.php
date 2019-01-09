<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/qwerty.css">
</head>
<body>
	<div class="wrapper fadeInDown">
	  <div id="formContent">

	    <div class="fadeIn first">
	      <img src="img/user.ico" id="icon" alt="User Icon" />
	    </div>

	    <form action="read.php" method="post">
	      <input type="text" id="login" class="fadeIn second" name="username" placeholder="username" required>
	      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" required>
	      <input type="submit" class="fadeIn fourth" name="btnSimpan" value="Log In" onclick="return">
	    </form>

	    <div id="formFooter">
	      <a class="underlineHover" href="#">Forgot Password?</a>
	    </div>
	  </div>
	</div>
</body>
</html>
