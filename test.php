<?php

mysql_connect('localhost','root','');
mysql_select_db('test');

$id=$_REQUEST['id'];
$time=$_REQUEST['time'];
$lat=$_REQUEST['latitude'];
$lon=$_REQUEST['longitude'];
$route=$_REQUEST['route'];
$eta=$_REQUEST['eta'];

$query="INSERT INTO androidnavtable (id, timeSecond, latitudeDegree, longitudeDegree, route, eta) VALUES(".$id.",".$time.",".$lat.",".$lon.",".$route.",".$eta.")";

$q=mysql_query($query);
if (!$q) {
    die('Invalid query: ' . mysql_error());
}

$query = "SELECT * FROM androidnavtable limit 1";
$q=mysql_query($query);
while($e=mysql_fetch_assoc($q))
    $output[]=$e;

print(json_encode($output));
mysql_close();

?>

