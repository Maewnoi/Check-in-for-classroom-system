<?php
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename="testing.csv"');

$host="localhost";
$username="root";
$password="";
$db="tests";
$tb="check";
mysql_connect( $host,$username,$password) or die ("ติดต่อกับฐานข้อมูล Mysql ไม่ได้ ");
mysql_select_db($db) or die("เลือกฐานข้อมูลไม่ได้");

echo "stu_id,time,Status\n"; 
$sql = "SELECT * FROM `check`";
$dbquery = mysql_query($sql);
$num_rows = mysql_num_rows($dbquery);

$i=0;
while ($i < $num_rows)
{
$result= mysql_fetch_array($dbquery);

echo "$result[stu_id],$result[time],$result[Status]\n";

$i++;
} 
?>