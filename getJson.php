<?php
mysql_connect('localhost','root','');
mysql_select_db('test');

$userid = $_GET["data"];

#$q=mysql_query("SELECT id, timeSecond, latitudeDegree, longitudeDegree, route, eta FROM androidnavtable");
$q=mysql_query("SELECT id, timeSecond, latitudeDegree, longitudeDegree, route, eta FROM androidnavtable WHERE id='".$userid."' ORDER BY timeSecond DESC LIMIT 1");
while($e=mysql_fetch_assoc($q))
        $output[]=$e;

        #print(json_encode($output));
        echo json_encode($output);
        mysql_close();
?>
