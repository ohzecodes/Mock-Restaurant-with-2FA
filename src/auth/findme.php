<?php

date_default_timezone_set("America/Los_angeles");
function get_ip_detail($ip)
{
    $ip_response = file_get_contents("http://ip-api.com/json/$ip");
    return json_decode($ip_response);
}

function putandemail($y, $factor, $email)
{
    $file = 'auth_log';
    $time = date("Y-m-d h:i:sa", time());
    $ip = $_SERVER['REMOTE_ADDR'];
    $ip_info = get_ip_detail($ip);
    $ip = "$ip ($ip_info->city, $ip_info->region, $ip_info->country)";

    $info = "\ntime: $time (Los Angeles), Request_from: $ip, Auth1 Granted:$y" .
    // "Code:$_SESSION['loggedin2']";

    file_put_contents($file, $info, FILE_APPEND);

    $url = $_SERVER['SERVER_NAME'];
    $to = $email;
    $subject = "Auth Activity @ $url";
    $message = "New Auth at $url \n $info \n ";

    mail($to, $subject, $message);

}