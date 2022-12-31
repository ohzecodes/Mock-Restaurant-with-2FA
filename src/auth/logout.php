<?php
ob_start();
session_start();
$_SESSION["loggedin"] = false;
unset($_SESSION["loggedin"]);
echo ("You are successfully logout" . $_SESSION["loggedin"]);
header("Location: ./login.php");
?>