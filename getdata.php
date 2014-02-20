<?php

//ini_set("display_errors",1);
//database access info
$db = mysql_connect("katherinexume.ipagemysql.com", "gps", "gps");

if (!$db) {
	die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

mysql_select_db("mission2", $db) or die (mysql_error());

$query = "SELECT * FROM markers";
$result = mysql_query($query) or die ('Invalid query: ' . mysql_error());

$myjsons = array();

while($row = mysql_fetch_assoc($result)){ 
     $myjsons[] = $row; //json_encode(array($row));
}
$jsons = json_encode($myjsons);

echo $jsons;

return $jsons;

?>
