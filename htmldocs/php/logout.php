<?php
session_start();
$_SESSION["loggedin"] = false;
echo ("You are successfully logout" . $_SESSION["loggedin"]);

?>
<br><br>
<a href="./login.php">login</a>
<p><b>OR</b> </p>
<a href="../../index.html">homepage</a>