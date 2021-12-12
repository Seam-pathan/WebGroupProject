<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registration</title>
</head>

<body>

    <div class="registrationContainer">
        <div class="box">


            <div class="bottom">


                <p style="color: red; font-size:medium"> <?php require_once('../Controller/regCheck.php')  ?> </p>

                <form name="registration" action="#" method="post">
                    Full Name :<input type="text" name="name" id="name" placeholder="Full Name"><br>
                    Email: <input type="text" name="email" id="email" placeholder="Email"><br>
                    User Name: <input type="text" name="user_name" id="user_name" placeholder="User Name"><br>
                    Password: <input type="password" name="password" id="password" placeholder="Password"><br>
                    Confirm Password: <input type="password" name="re-type-password" id="re-type-password" placeholder="Re-Type Password"><br>
                    <input type="submit" id="signup" name="submit" value="Sign Up">

                </form>

                <p>copyright @ <?php echo date("Y") ?> </p>

            </div>

        </div>
    </div>
</body>

</html>