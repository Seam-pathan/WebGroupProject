<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <div class="loginContainer">
        <div class="box">

            <div class="top">
                <img src="../Asset/Photos/2nd logo.png" alt="">
            </div>



            <div class="bottom">

                <form action="#" name="login" onsubmit="return validation()" method="post">
                    User Name: <input type="text" name="user_name" id="user_name" placeholder="User Name"><br>
                    Registration: <input type="password" name="password" id="password" placeholder="Password"><br>
                    <p style="color: red; font-size:medium"> <?php require_once('../Controller/loginCheck.php');  ?> </p>
                    <input type="submit" name="submit" value="Login">
                    <button onclick="window.location.href='../View/registration.php'"><a href="../View/registration.php" target="_blank"> Sign Up </a></button>

                </form>

                <p>copyright @ <?php echo date("Y") ?> </p>



            </div>

        </div>
    </div>
</body>

</html>