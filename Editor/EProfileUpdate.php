<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Update Profile</title>
</head>
<body>
	<h1>Update Information</h1>

	<form action="EProfileUpdateAction.php" method="post">
		Enter your Name: <input type="text" name="firstname">
		<br>
		<br>
		Date of Birth:
		<input type="date" name="dob">
		<br><br>
		PresentAddress:
		<textarea name="PresentAddress"></textarea>
		<br>
		<br>
		PermanentAddress:
		<textarea name="PermanentAddress"></textarea>
		<br><br>
		Phone:
		<input type="tel" id="phone" name="phone">
		<br><br>
		Email:
		<input type="email" name="email">
		<br><br>
		Username: <input type="text" name="username">
		<br><br>
		Change Password:
		<input type="password" id="pass" name="pass">
		<br><br>
		<input type="submit" name="submit">
	</form> 
		<a href="EProfile.php">Back</a>
		<br>
		<br>
		<a href="ELogout.php">Logout</a>
</body>
</html>