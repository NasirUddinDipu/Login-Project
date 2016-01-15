<?php
session_start();
if (isset($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $username = $_SESSION["username"];
    $result = "You are login $username";
} else {
    $result = "You are not login";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            <?php
            if (isset($username)) {
                echo "$username Section";
            }
            ?>
        </title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <div id="logo">Nasir<span>(php)</span>Dipu</div>
        <div id="container">
            <h2>
                <?php
                if (isset($result)) {
                    echo $result;
                }
                ?>
            </h2>
            <?php
            if (isset($username, $id)) {
                echo "<h3>Login Username: $username</h2>";
                echo "<h3>Your Id: $id</h2>";
                echo "<h3><a href=\"logout.php\">Go to Logout Page.</a></h3>";
            } else {
                echo "<h3><a href=\"index.php\">Go to Login Page.</a></h3>";
            }
            ?>
        </div>
    </body>
</html>