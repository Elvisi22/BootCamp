<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
body {
  background-color: #E6E6FA;
}
</style>
<body >
<form action="login.php" method="post">
<img src="leaf_cit" alt="Girl in a jacket" style="width:100px;height:100px;">
     	<h2>LOGIN</h2>
		
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>User Name</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
        <a href="signup.php" class="ca">Create an account</a>
     </form>
    
</body>
</html>