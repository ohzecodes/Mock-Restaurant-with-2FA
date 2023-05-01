<?php
include_once '../connect.php';
 include_once '../findme.php';
session_start();


function ff($c)
{

    $userinput = trim($_POST['num']);
    $int = intval($userinput);

    return ($c === $int);

}

// var_dump(isset($_SESSION["code"]));


function run2fa($code)
{
        $b = boolval(ff($code)) ? 'true' : 'false';
        if (boolval(ff($code))) {
            putandemail("YES", 2, $myemail);
            // header redirrect
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\2fa/\\');
            $extra = 'adminpage/index.php';
            $url = "http://$host$uri/$extra";
            $_SESSION["loggedin2"] = true;

            echo "<a class='btn btn-success' href=$url>Proceed to admin panel</a>";
            exit;

        } else {
            putandemail("NO", 2, $myemail);
            unset($_SESSION["loggedin2"]);
            unset($_SESSION["loggedin"]);
            unset($_SESSION["username"]);
            unset($_SESSION["password"]);
            echo "<a class='btn btn-danger toHome' href='../login.php'>Go back to login</a>";

        }

}


if (isset($_SESSION["code"])&&isset($_POST['num'])){
    run2fa($_SESSION["code"]);
}
