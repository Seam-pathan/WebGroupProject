<?php
session_start();
require_once("../Modal/userModel.php");
if ($_SESSION['status'] == 'true') {
    $user = getUserByUser_name($_SESSION['username']);

?>










    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
    </head>

    <body>

        <div class="box">
            <h3 style="text-align: center;">Profile Data</h3>
            <div class="table">
                <table border="1" align="center" width=800px style="font-size: large;">
                    <tr>
                        <th>Id#</th>
                        <td colspan="3"><?= $user["id"] ?></td>

                    </tr>
                    <tr>
                        <th>Name</th>
                        <td><?= $user["Name"] ?></td>
                        <td><a href="../View/UeditProfile.php?id=<?= $_SESSION["user_id"] ?>">Edit</td>
                    </tr>
                    <tr>
                        <th>User Name</th>
                        <td><?= $user["username"] ?></td>
                        <td><a href="../View/UeditProfile.php?id=<?= $_SESSION["user_id"] ?>">Edit</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?= $user["Email"] ?></td>
                        <td><a href="../View/UeditProfile.php?id=<?= $_SESSION["user_id"] ?>">Edit</td>
                    </tr>
                    <tr>
                        <th>Role</th>
                        <td colspan="3"><?= $user["Role"] ?></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td colspan="3"><a href="../View/UedatePassword.php?id=<?= $_SESSION["user_id"] ?>">Edit</td>
                    </tr>
                </table>
            </div>
        </div>

    </body>

    </html>



<?php
} else {
    header('location: ../View/login.php');
}


?>