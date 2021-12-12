<?php
session_start();
require_once('../Modal/userModel.php');
if ($_SESSION['status'] == 'true') {
    $id = $_GET["id"];
    $user = getUserByID($id);

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit user</title>
    </head>

    <body>

        <div class="box">
            <table align="center" width=800px style="font-size: large; padding: 50px; background-color:gray; ">
                <form method="post" action="../Controller/updatePassword.php">
                    <tr>
                        <td>Current Password</td>
                        <td><input type="password" name="current_password"></td>
                    </tr>
                    <tr>
                        <td>New Password</td>
                        <td><input type="password" name="new_password"></td>
                    </tr>
                    <tr>
                        <td>Confirm it</td>
                        <td><input type="password" name="re_type_password"></td>
                    </tr>


                    <tr>
                        <td colspan="2"> <input type="submit" name="submit" value="Update"></td>
                    </tr>
                </form>
            </table>
        </div>

    </body>

    </html>




















<?php

} else {
    header('location: ../View/login.php');
}

?>