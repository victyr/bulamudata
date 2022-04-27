<!DOCTYPE html>
<html>
<head>
	<title>BULAMU EMR</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
     <form action="authentication.php" method="post">
     	<h2>Login with email and password</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Email :</label>
     	<input type="text" name="emaildb" placeholder="User Name"><br>

     	<label>Password :</label>
     	<input type="password" name="passdb" placeholder="Password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>