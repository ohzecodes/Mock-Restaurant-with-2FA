<?php include './connect.php'?>

<?php session_start();?>



<?php

$username = $_REQUEST["username"];
$userpass = $_REQUEST["userpass"];

if ($username == $adminusername && $userpass == $adminpassword) {

    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'adminpage/index.php';
    $_SESSION["loggedin"] = true;

    header("Location: http://$host$uri/$extra");
    exit;

} else {
    echo ("You have entered the wrong username or password");

    unset($_SESSION["username"]);
    unset($_SESSION["password"]);

    echo ("\n <a href='./login.php'> backtologin </a>");

}

?>