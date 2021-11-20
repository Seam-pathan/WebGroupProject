<?php
   $color = isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : 'white';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Action</title>
</head>
<body style="background-color: <?php echo $color; ?>;">

	<h1>Form Action</h1>

	<?php 
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "test";
		$conn = new mysqli($servername, $username, $password, $dbname);
	
		if($conn->connect_error)
		{
			die('Connection Failed : '.$conn->connect_error);
		}
		$sql = "INSERT INTO uregistration (firstname, lastname, gender, DateOfBirth, Religion, PresentAddress, PermanentAddress, phone, email, username, pwd)
		 values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$DateOfBirth = $_POST['dob'];
	$Religion = $_POST['Religion'];
	$PresentAddress = $_POST['PresentAddress'];
	$PermanentAddress = $_POST['PermanentAddress'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$pwd = $_POST['pwd'];
		 
	
			$stmt= $conn->prepare($sql);
			$stmt->bind_param("sssssssssss", $firstname, $lastname, $gender, $DateOfBirth, $Religion, $PresentAddress, $PermanentAddress, $phone, $email, $username, $pwd);
			// $firstname = $_POST['firstname'];
			// $lastname = $_POST['lastname'];
			// $gender = $_POST['gender'];
			// $DateOfBirth = $_POST['dob'];
			// $Religion = $_POST['Religion'];
			// $PresentAddress = $_POST['PresentAddress'];
			// $PermanentAddress = $_POST['PermanentAddress'];
			// $phone = $_POST['phone'];
			// $email = $_POST['email'];
			// $username = $_POST['username'];
			// $pwd = $_POST['pwd'];
			$res = $stmt->execute();
			if($res){
			echo "registration successfully.....";
			}
			else{
				echo "Failed";
			}
			$conn->close();
	}

		// $firstname = $_POST['firstname'];
		// $gender = $_POST['gender'];
		// $dob = $_POST['dob'];
		// $Religion = $_POST['Religion'];
		// $PresentAddress = $_POST['PresentAddress'];
		// $PermanentAddress = $_POST['PermanentAddress'];
		// $phone = $_POST['phone'];
		// $email = $_POST['email'];
		// $username = $_POST['username'];
		// $pwd = $_POST['pwd'];


		// if (empty($firstname) or empty($gender) or empty($dob) or empty($PresentAddress) or empty($PermanentAddress) or empty($phone) or empty($email) or empty($username) or empty($pwd))
		// {
		// 	echo "Fill up the form properly";
		// }
		// else {
		// 	$firstname = sanitize($firstname);
		// 	$gender = sanitize($gender);
		// 	$dob = sanitize($dob);
		//     $Religion = sanitize($Religion);
		//     $PresentAddress = sanitize($PresentAddress);
		//     $PermanentAddress = sanitize($PermanentAddress);
		//     $phone = sanitize($phone);
		//     $email = sanitize($email);
		//     $username = sanitize($username);
		//     $pwd = sanitize($pwd);

		//     $handle1 = fopen("../model/AdminData.json", "a");
		// 	$data = file_get_contents("../model/AdminData.json");
		// 	$handle2 = json_decode($data);
		// 	//  echo $data;

		// 	$arr2=[];
		// 	if(!empty($handle2))
		// 	{
		// 	   $arr2=$handle2;
		// 	}

		//     $arr1 = array('firstname' => $firstname, 'gender' => $gender, 'dob' => $dob, 'Religion' => $Religion, 'PresentAddress' => $PresentAddress, 'PermanentAddress' => $PermanentAddress, 'phone' => $phone, 'email' => $email,
		//      'username' => $username, 'pwd' => $pwd);

		// 	 array_push($arr2,$arr1);

		//      $encode = json_encode($arr2);

		//      $res = file_put_contents('../model/AdminData.json',$encode);
		//      if ($res) {
		// 		echo "Successfully saved";
		// 	}
		// 	else {
		// 		echo "Error while saving";
		// 	}
		// }
		
		// function sanitize($data) 
		// {
		// 	$data = trim($data);
		// 	$data = stripslashes($data);
		// 	$data = htmlspecialchars($data);
		// 	return $data;
		// }
	?>

	<br><br>

	<a href="../view/ALogin.php">Login</a>

</body>
</html>