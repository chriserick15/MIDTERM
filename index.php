<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

     <form action="login.php" method="post">
          <center><img src="logo.png" alt="Avatar" width="20%" height="20%"></center>
     	<center><h3>LOGIN</h3></center></center>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <img src="man.jfif" alt="user" width="38px" height="35px">
     	<label>UserName</label>
     	<input type="text" name="name" placeholder="UserName"><br>
          <img src="pass.jpg" alt="user" width="38px" height="35px">
     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="logout">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
</body>
</html>