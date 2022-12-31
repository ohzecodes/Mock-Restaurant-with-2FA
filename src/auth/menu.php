<?php
 include_once "./connect.php";
$link = mysqli_connect($host, $user, $pass, $db_name);
$Grilled_on_a_volcano_rock = array();
$sushi = array();
$Caviars = array();
$platers = array();
$Chef_choice = array();

$results = mysqli_query($link, 'SELECT * FROM menu WHERE Category="Grilled on a volcano rock" ORDER BY  Price asc');
while ($record = mysqli_fetch_assoc($results)) {
    $meal_name = $record['Foodname'];
    array_push($Grilled_on_a_volcano_rock, $meal_name);
}

$results = mysqli_query($link, 'SELECT * FROM menu WHERE Category="sushi" ORDER BY  Price asc');
while ($record = mysqli_fetch_assoc($results)) {
    $meal_name = $record['Foodname'];
    array_push($sushi, $meal_name);
}

$results = mysqli_query($link, 'SELECT * FROM menu WHERE Category="Caviars" ORDER BY  Price asc; ');
while ($record = mysqli_fetch_assoc($results)) {
    $meal_name = $record['Foodname'];
    array_push($Caviars, $meal_name);
}

$results = mysqli_query($link, 'SELECT * FROM menu WHERE Category="Platers/Towers" ORDER BY  Price asc; ');
while ($record = mysqli_fetch_assoc($results)) {
    $meal_name = $record['Foodname'];
    array_push($platers, $meal_name);
}

$results = mysqli_query($link, 'SELECT * FROM menu WHERE Category="Chefs choice" ORDER BY  Price asc; ');
while ($record = mysqli_fetch_assoc($results)) {
    $meal_name = $record['Foodname'];
    array_push($Chef_choice, $meal_name);
}

$r = array("grill" => $Grilled_on_a_volcano_rock,
    "sushi" => $sushi,
    "caviar" => $Caviars,
    "platter" => $platers,
    "chef" => $Chef_choice,
);

echo json_encode($r);