<?php
	session_start();

	if (count($_SESSION) === 0){
		header("Location: ELogout.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
</head>
<body>
	<h1>Home Page</h1>
	<a href="EProfile.php">My Profile</a> -
	<a href="ViewNews.php">View News</a>
	<p>Welcome, <?php echo $_SESSION['username']; ?></p>

	<a href="ELogout.php">Logout</a>

</body>
</html>