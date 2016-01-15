<?php
session_start();
if (isset($_POST['submit'])) {
    $dbusername = "Nasir";
    $dbpassword = "Nasir";
    $id = "PHP";
    $usname = strip_tags($_POST["username"]);
    $psword = strip_tags($_POST["password"]);

    if ($dbusername === $usname && $dbpassword === $psword) {
        //Session start
        $_SESSION["username"] = $usname;
        $_SESSION["id"] = $id;
        $_SESSION["result"] = "You are alrady login goto <a href=\"user.php\">user page</a>";
        //Redirecton to user page
        header("Location: user.php");
    } else {
        if (isset($_SESSION["result"])) {
            $result = $_SESSION["result"];
        } else {
            $result = "Your username/password not correct.";
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home Page</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <div id="logo">Nasir<span>(php)</span>Dipu</div>
        <div id="container">
            <h2><?php
                if (isset($result)) {
                    echo $result;
                } else {
                    echo "Login System";
                }
                ?></h2>
            <form action="" method="post">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" /><br />
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" /><br />
                <input type="submit" name="submit" value="Submit" />
            </form>
        </div>
    </body>
</html>
