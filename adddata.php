<?php

ini_set("display_errors",1);
//database access info
$db = new MySQLi("katherinexume.ipagemysql.com", "gps", "gps", "mission2");

if (mysqli_connect_error()) {
	die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

$statement = $db->stmt_init();
 
//database insert statement
$statement->prepare("INSERT INTO markers (name, location, timeplanted, timefound, lat, lon) VALUES (?, ?, ?, ?, ?, ?)");




//grab values from the url and add to database
$statement->bind_param("ssssdd", $_POST['name'], $_POST['location'], $_POST['timeplant'], $_POST['timefound'], $_POST['lat'], $_POST['lon']);

$status = $statement->execute();
 
//create a status message
if ($status)
{
    $message = array("message" => $_POST['name'] . " has been added!");
}
else
{
    $message = array("error" => $db->error);
}
 
$statement->close();
 
echo json_encode($message);
?>
