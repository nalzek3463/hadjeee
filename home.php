<?php
session_start();

if(isset($_SESSION['korisnik_id']) && isset($_SESSION['ime'])) {
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <title>Home</title>
            <link rel="stylesheet" type="text/css" href="styletest.css">
        </head>
        <body>
            <h1>Hello, <?php echo $_SESSION['ime']; ?></h1>
            <a href="logout.php">Logout</a>
        </body>
    </html>

    <?php 

}
else {
    header("Location: index.php");
    exit();
}
?>