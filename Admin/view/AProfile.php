<?php
    session_start();

	if(count($_SESSION) === 0)
	{
		header("Location: ALogout.php");
	}
	require_once('../control/AProfileAction.php');

   $color = isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : 'white';
?>

<?php
include "../control/AProfileAction.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
</head>
<body style="background-color: <?php echo $color; ?>;">
	<h1>Profile</h1>
	<form action="" method="post">
	<?php
	  $q=mysqli_query($db,"SELECT * FROM uregistration WHERE username='$_SESSION[uname]' ;");
	  ?>
	  <?php
	     $row =mysqli_fetch_array($q);
	  ?>
	  
	<table border="1">
		<thead>
			<tr>
				<th>Name</th>
				<th>Gender</th>
				<th>Date of Birth</th>
				<th>Religion</th>
				<th>Present Address</th>
				<th>Permanent Address</th>
				<th>Phone</th>
			</tr>
			<tbody>
				<?php
						echo "<tr>";
						    echo "<td>";
							echo $row['firstname'];
							echo "</td>";
							echo "<td>";
							echo $row['gender'];
							echo "</td>";
							echo "<td>";
							echo $row['DateOfBirth'];
							echo "</td>";
							echo "<td>";
							echo $row['Religion'];
							echo "</td>";
							echo "<td>";
							echo $row['PresentAddress'];
							echo "</td>";
							echo "<td>";
							echo $row['PermanentAddress'];
							echo "</td>";
							echo "<td>";
							echo $row['phone'];
							echo "</td>";
						echo "</tr>";
				?>
			</tbody>
		</thead>
	</table>
	<br><br>


    <a href="AUpdateProfile.php">Update Profile</a>
	<a href="ADeleteProfile.php">Delete Profile</a>
	<br><br>
	<a href="AChangePassword.php">Change Password</a>
	<br><br>
    <a href="AHome.php">Back</a>
    <br><br>


</body>
</html>