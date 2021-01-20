<?php
include "./connect.php";
$link = mysqli_connect($host, $user, $pass, $db_name);
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$name = mysqli_real_escape_string($link, strip_tags(($_REQUEST['name'])));
$email = mysqli_real_escape_string($link, strip_tags(($_REQUEST['email'])));
$quickmsg = mysqli_real_escape_string($link, strip_tags(($_REQUEST['message'])));
if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
    $nameErr = "Only letters and white space allowed";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
}
if (!preg_match("/^[a-zA-Z ]*$/", $quickmsg)) {
    $nameErr = "Only letters and white space allowed";
}

$query = "INSERT INTO msg(name,email,msg,recievedat)
VALUES('$name','$email','$quickmsg',NOW());";

$mysql = mysqli_query($link, $query);
if (!$mysql) {
    echo " A failure in sending the message";
    echo ('<br>');
    // echo ' now redirecting';
} else {
    echo ' Sending Sucessfull';
    echo ('<br>');
    // echo ' now redirecting';

}
echo ("<a href='../contact.html'> go back</a>");
$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = '../contact.html';

// header("Location: http://$host$uri/$extra");
exit;