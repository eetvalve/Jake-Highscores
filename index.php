
<?php

//Hakee kannasta nimen ja ajan ja sen jälkeen lähetetään se json muotoisena Phaseriin omaan stateen "jsonni.js"

header('content-type: application/json; charset=utf-8');
header("access-control-allow-origin: *");
//open connection to mysql db
$connection = mysqli_connect("localhost", "root", "", "jake") or die("Error " . mysqli_error($connection));

//fetch table rows from mysql db
$sql = "SELECT name, time FROM scoreboard ORDER BY time ASC";
$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

//create an array
$emparray = array();
while ($row = mysqli_fetch_assoc($result)) {
    $emparray[] = $row;
}
echo json_encode($emparray);

//close the db connection
mysqli_close($connection);
?>