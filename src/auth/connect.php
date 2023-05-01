<?php
$db_name = trim(getenv('DB_NAME') ?? 'ErkenciRestaurant');
$user = trim(getenv('DB_USER') ?? 'root') ;
$pass = trim(getenv('DB_PASS') ?? 'toor') ;
$host = trim(getenv('DB_HOST') ?? 'mysql');
$port = intval(getenv("DB_PORT") ?? "3306");



// admin panel
$myemail = trim(getenv("EMAIL_FOR_TWO_FA")?? " "); 
$adminusername = trim(getenv("ADMIN_PANEL_USER_NAME")?? "admin");
$adminpassword = trim(getenv("ADMIN_PANEL_PASSWORD")?? "nimda");
?>