<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Login</title>
</head>
<body>
   <h1>Editor</h1>

    <form action="ELoginAction.php" method="post">

       Username: <input type="text" name="username">
       <br><br>
	   Password: <input type="password"id="pwd" name="pwd">
       <br><br>

       <input type="submit" name="submit" value="Login">
       <br>

    </form>
    <br>

    <a href="EForgotPass.php">Forgot Password</a>
    <br><br>

    Not registered yet? <a href="ERegistration.php">Click here</a> for registration.
</body>
</html>