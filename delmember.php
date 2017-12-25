<?php
  $con = mysqli_connect("localhost","root","","tests");
  mysqli_set_charset($con,"utf8");

  $id= $_GET["id"];

  $query = "DElETE FROM acc_subjects WHERE id = $id";
  mysqli_query($con, $query);
  header("Location: Classroom_Admin.php");

?>
