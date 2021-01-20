<?php
session_start();
if (($_SESSION["loggedin"])) {
    ?>
<!DOCTYPE html>
<html lang='en'>

<head>

    <meta charset="utf-8">
    <title>admin interface</title>
    <link rel="stylesheet" href="../../../../css/stylesheet.css">

    <link rel="icon" href="../../../../assets/logo.png" type="image/gif">


<body>
    <header>
        <figure>
            <img id="logo" src="../../../../assets/logo.png" alt="logo">
            <figcaption>ERCENCI</figcaption>
        </figure>
        <nav>
        </nav>
    </header>
</body>
Please choose one of the following options:
<ul>
    <li><a href="admenu.php">edit item(s) in the menu</a></li>
    <li><a href="reservep.php">manage reservation(s)</a></li>
    <li><a href="vmessage.php">see messages </a></li>
</ul>

</html>
<?php
} else {
    echo ("you are not logged in");
}

?>