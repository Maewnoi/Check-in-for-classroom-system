<?php
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename="testing.csv"');

$host="localhost";
$username="root";
$password="";
$db="test";
$tb="testing";
mysql_connect( $host,$username,$password) or die ("ติดต่อกับฐานข้อมูล Mysql ไม่ได้ ");
mysql_select_db($db) or die("เลือกฐานข้อมูลไม่ได้");

echo "ข้อที่,คำถาม,ตัวเลือกที่ 1,ตัวเลือกที่ 2,ตัวเลือกที่ 3,ตัวเลือกที่ 4,ตัวเลือกที่ถูก,\n"; 
$sql = "select * from $tb";
$dbquery = mysql_query($sql);
$num_rows = mysql_num_rows($dbquery);

$i=0;
while ($i < $num_rows)
{
$result= mysql_fetch_array($dbquery);

echo "$result[id],$result[question],$result[c1],$result[c2],$result[c3],$result[c4],$result[answer],\n";

$i++;
} 
?>