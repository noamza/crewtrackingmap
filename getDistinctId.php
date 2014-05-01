<?php
mysql_connect('localhost','root','');
mysql_select_db('test');

#$q=mysql_query("SELECT id, timeSecond, latitudeDegree, longitudeDegree FROM t2");
$q=mysql_query("SELECT distinct id from androidnavtable");
while($e=mysql_fetch_assoc($q))
    $output[]=$e;

echo json_encode($output);
mysql_close();
?>
