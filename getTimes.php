<?php

//Ottaa vastaan ajaxin avulla, jsonni.js skriptistä pelaajan ajan.

header('content-type: text; charset=utf-8');
header("access-control-allow-origin: *");

$time = $_GET['time'];
$name = $_GET['name'];

echo "name:" . $name;
echo "time:" . $time;



//open connection to mysql db
$connection = mysqli_connect("localhost", "root", "", "jake") or die("Error " . mysqli_error($connection));

//fetch table rows from mysql db
$sql = "INSERT INTO scoreboard (time, name) VALUES ('$_GET[time]','$_GET[name]')";



$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));


mysql_query($sql, $connection);

//close the db connection
mysqli_close($connection);
?>