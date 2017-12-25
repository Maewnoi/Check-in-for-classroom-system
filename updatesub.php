<?php
     $con=mysqli_connect("localhost", "root", "", "tests");
     mysqli_set_charset($con, "utf8");

  $id = $_GET["id"];
  $stu_id = $_GET["stu_id"];
  $name = $_GET ["name"];
  $nickname  = $_GET ["nickname"];
  $major  = $_GET ["major"];
  $mobile  = $_GET ["mobile"];

  $query = "UPDATE students SET stu_id= '$stu_id', name='$name', nickname='$nickname' , major='$major' , mobile='$mobile' WHERE id='$id'";
  mysqli_query($con, $query);
  header("Location: subject_Admin.php");

?>
