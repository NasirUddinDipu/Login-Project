<?php
session_start();
session_destroy();
if (isset($_SESSION["username"]) || isset($_SESSION["password"]) || isset($_SESSION["id"])) {
    $_SESSION["username"] = "";
    $_SESSION["password"] = "";
    $_SESSION["id"] = "";
    $_SESSION["result"] = "";
    $ms = "You are now logout thanks.";
} else {
    $ms = "Could not log you out.";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Logout Page</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <div id="logo">Nasir<span>(php)</span>Dipu</div>
        <div id="container">
            <?php
            if (isset($ms)) {
                echo "<h2>$ms</h2>";
            }
            ?>
            <a href="index.php">Click here to go to Home page thanks.</a>
        </div>
    </body>
</html>