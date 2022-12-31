<?php
session_start();
ob_start();
 include_once './connect.php';
 include_once './findme.php';
$username = $_REQUEST["username"];
$userpass = $_REQUEST["userpass"];
echo ("<p>$username</p> <p>$userpass</p>");

if ($username == $adminusername && $userpass == $adminpassword) {
    putandemail("YES", 1, $myemail);
    $_SESSION["loggedin"] = true;
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = '2fa/index.php';
    header("Location: http://$host$uri/$extra");

    exit;

} else {
    putandemail("NO", 1, $myemail);
    unset($_SESSION["loggedin"]);
    unset($_SESSION["username"]);
    unset($_SESSION["password"]);
    header("Location: login.php");

}