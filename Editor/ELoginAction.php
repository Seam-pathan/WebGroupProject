<?php 
    if ($_SERVER['REQUEST_METHOD'] === "POST")
    {
    	$username = $_POST['username'];
		$pwd = $_POST['pwd'];

        $handle = fopen("EditorData.json", "r");
        $data = fread($handle, filesize("EditorData.json"));
        $data = explode("\n", $data);

        $isValid = false;

        for($i=0; $i < count($data) - 1; $i++)
        {
    	   $json = json_decode($data[$i]);
    	   if($username === $json->username and $pwd === $json->pwd)
            {
	          $isValid = true;
	          break;
            }
        }

        if ($isValid)
        {
          session_start();  
          $_SESSION['username'] = $username;
    	  header("Location: EHome.php");
        }
        else
        {
    	  echo "Login failed...";
        }
    }

?>

<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Action</title>
</head>
<body>

    <a href="ELogin.php">Login</a> | <a href="ERegistration.php">Registration</a>

</body>
</html>
