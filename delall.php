<?php
  $con = mysqli_connect("localhost","root","","tests");
  mysqli_set_charset($con,"utf8");

  $query = "SELECT * FROM `check` ";
         $res = mysqli_query($con,$query);
 while($row =mysqli_fetch_array($res)) {

  $id = $row["stu_id"];
  
  $query2 = "DELETE FROM `check` WHERE `check`.`stu_id` = '$id'";
  mysqli_query($con, $query2);
}
  header("Location: Checkin.php");

?>
