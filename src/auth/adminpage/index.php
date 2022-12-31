<?php
  session_start();
  echo $_SESSION["loggedin2"];
  if (($_SESSION["loggedin"] && $_SESSION["loggedin2"])) {

      ?>


      <!DOCTYPE html>
      <html lang='en'>
      <head>
        <meta charset="utf-8">
        <title>admin interface</title>
        <link rel="stylesheet" href="/css/stylesheet.css">

        <link rel="icon" href="/assets/logo.png" type="image/gif">


      <body style="background: #1a2b48;">
        <?php include "./head.html";?>

      </html>
  <?php
  } else {
      echo ("you are not logged in");
  }

?>