<!DOCTYPE html>
<html lang="en">
<head>
   <title></title>
  </head>
  <body>
 <?php
   $con=mysqli_connect("localhost", "root", "", "tests");
     mysqli_set_charset($con, "utf8");

	$id=$_GET["id"];
	$query="SELECT * FROM acc_subjects WHERE id='$id'";
	$res=mysqli_query($con, $query);

while($row = mysqli_fetch_array($res)) {
	?>
	 <form  action="./updatemember.php" method="get">
	 <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
	  รหัสวิชา : <input type = "text" name = "class_id" value="<?php echo $row["class_id"]; ?>"><br>
	  รายวิชา : <input type = "text" name = "other" value="<?php echo $row["other"]; ?>"><br>
     เวลาเรียน : <input type = "text" name = "study_time" value="<?php echo $row["study_time"]; ?>"><br>
	   ห้องเรียน : <input type = "text" name = "room" value="<?php echo $row["room"]; ?>"><br>
    จำนวนนักศึกษา : <input type = "text" name = "members" value="<?php echo $row["members"]; ?>"><br>
     
       		<button type = "submit">บันทึก</button>
     </form>
<?php
	}
?>
</body>
</html>
