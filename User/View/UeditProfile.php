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
            <!-- using Internal CSS -->
            <table align="center" width=800px style="font-size: large; padding: 50px; background-color:gray; ">
                <form method="post" action="../Controller/update.php">
                    <tr>
                        <td>ID</td>
                        <td><input type="text" name="id" value="<?= $user["id"] ?>" disabled></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" value="<?= $user["Name"] ?>"></td>
                    </tr>
                    <tr>
                        <td>User Name</td>
                        <td><input type="text" name="username" value="<?= $user["username"] ?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" value="<?= $user["Email"] ?>"></td>
                    </tr>
                    <tr>
                        <td>Role</td>
                        <td><input type="text" value="<?= $user["Role"] ?>" disabled></td>
                    </tr>

                    <tr>
                        <td colspan="2"> <input type="submit" name="submit" value="Edit"></td>
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