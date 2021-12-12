<?php
session_start();
require_once('../Modal/News.php');
if ($_SESSION['status'] == 'true') {
    $news = getNews();
?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
    </head>

    <body>
        <h2>Welcome Home || <?php echo $_SESSION['username']; ?> </h2>

        <div class="navbar">
            <a href="../View/Uprofile.php">Profile</a>|
            <a href="../View/Ufavorate">Favorates</a>|
            <a href="../Controller/logout.php">Logout</a>
        </div>
        <hr>
        <div class="news">
            <h1>Todays News </h1>
            <p><Strong><?php echo date('l') . " " . date('d F') . "," . date("Y") ?></Strong></p>
            <br><br><br>

            <div class="news_articles">
                <?php
                foreach ($news as $n) {

                ?>
                    <h3><?= $n["Title"] ?></h3>
                    <p>Author: <?= $n["Author"] ?></p>
                    <p><?= $n["Description"] ?></p>



                    <!-- Passing the ID with link -->
                    <form method="POST" action="../Controller/postComment.php?id=<?= $n["news_id"] ?>">
                        <input type="text" name="comment" placeholder="Give your Comments">
                        <input type="submit" name="submit" value="Post">
                    </form>
                    <h4>Comments</h4>
                    <?php
                    $comments = getComment($n["news_id"]);
                    if ($comments) {

                    ?>

                        <p><strong>User : <?= $comments["user_name"] ?></strong></p>
                        <p><?= $comments["Comment"] ?></p>


                    <?php
                    } else {
                    ?>
                        <p> <strong>No comment yet</strong> </p>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </body>

    </html>

<?php
} else {
    header('location: ../View/login.php');
    //echo $_SESSION['status'];
}

?>