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
	<title>Profile</title>
</head>
<body>
	<h1>My Profile</h1>
	<a href="EProfileUpdate.php">Update Profile</a>

	<?php 
		$handle2 = fopen("EditorData.json", "r");
		$data = fread($handle2, filesize("EditorData.json"));
	?>

	
	<?php 
		$explode = explode("\n", $data);
		 array_pop($explode);
	?>

	<hr>

	<?php
		$arr1 = array();
		for ($i = 0; $i < count($explode); $i++) {
			$json = json_decode($explode[$i]);
			array_push($arr1, $json);
		}
	?>


	<hr>

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
				<th>Email</th>
			</tr>
			<tbody>
				<?php
					for($k=0; $k < count($arr1); $k++)
						echo "<tr>";
						    echo "<td>".$arr1[$k]->firstname."</td>";
							echo "<td>".$arr1[$k]->gender."</td>";
							echo "<td>".$arr1[$k]->dob."</td>";
							echo "<td>".$arr1[$k]->Religion."</td>";
							echo "<td>".$arr1[$k]->PresentAddress."</td>";
							echo "<td>".$arr1[$k]->PermanentAddress."</td>";
							echo "<td>".$arr1[$k]->phone."</td>";
							echo "<td>".$arr1[$k]->email."</td>";
						echo "</tr>";
				?>
			</tbody>
		</thead>
	</table>
	<br>
	<a href="ELogout.php">Logout</a>-
	<a href="EHome.php">Back</a>
</body>
</html>



