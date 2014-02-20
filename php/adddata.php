<?php

$db = mysql_connect('localhost', 'root', 'nincompoop');

if (! $db )
{
	die('Could not connect: ' . mysql_error());
}

$name 		= $_POST['name'];
$id			= 0;
$location 	= $_POST['location'];
$lat		= $_POST['lat'];
$lon		= $_POST['lon'];
$type		= "treasure location";
//$timeplant 	= $_POST['timeplant'];
//$timefound	= $_POST['timefound'];

//$sql = "INSERT INTO markers (id, name, address, lat, lng, type, TimePlanted, TimeFound)
//VALUES
//('$id', '$name', '$location', '$lat', '$lon', '$type', '$timeplant', '$timefound')";


/$sql = "INSERT INTO markers (id, name, address, lat, lng, type)
//VALUES
//('$id', '$name', '$location', '$lat', '$lon', '$type')";


if (!mysqli_query($db, $sql))
{
	die("Error: " . mysqli_error($db));
}


echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';

echo "Entry added";

mysqli_close($db); 

?>
