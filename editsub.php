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
	$query="SELECT * FROM students WHERE id='$id'";
	$res=mysqli_query($con, $query);

while($row = mysqli_fetch_array($res)) {
	?>
	 <form  action="./updatesub.php" method="get">
	 <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
	  รหัสนักศึกษา : <input type = "text" name = "stu_id" value="<?php echo $row["stu_id"]; ?>"><br>
	  ชื่อ : <input type = "text" name = "name" value="<?php echo $row["name"]; ?>"><br>
       ชื่อเล่น : <input type = "text" name = "nickname" value="<?php echo $row["nickname"]; ?>"><br>
	   สาขา : <input type = "text" name = "major" value="<?php echo $row["major"]; ?>"><br>
    เบอร์โทร : <input type = "text" name = "mobile" value="<?php echo $row["mobile"]; ?>"><br>
     
       		<button type = "submit">บันทึก</button>
     </form>
<?php
	}
?>
</body>
</html>
