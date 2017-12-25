<?php
     $con=mysqli_connect("localhost", "root", "", "tests");
     mysqli_set_charset($con, "utf8");

  $id = $_GET["id"];
  $class_id = $_GET["class_id"];
  $other = $_GET ["other"];
  $study_time = $_GET ["study_time"];
  $room  = $_GET ["room"];
  $members  = $_GET ["members"];

  $query = "UPDATE acc_subjects SET class_id= '$class_id', other='$other', study_time='$study_time', room='$room' , members='$members' WHERE id='$id'";
  mysqli_query($con, $query);
  header("Location: Classroom_Admin.php");

?>
