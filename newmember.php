<!DOCTYPE html>
<html land="en">
<head>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.min.css" rel="stylesheet">

  <title></title>
</head>
<body>
<div class="btn btn-light">
  <form action="./getdatamember.php" method="get">
    ชือ-นามสกุล(eng) : <input type="text" name="engname"><br>
    ชือ-นามสกุล(Th) : <input type="text" name="thname"><br>
    ชื่อเล่น: <input type="text" name="nickname"><br>
    วันเกิด: <input type="text" name="BD"><br>
    กรุ๊ปเลือด: <input type="text" name="bloobtype"><br>
    รูป: <input type="text" name="image"><br>
    <p></p>
<button class="btn btn-primary" type ="submit">บันทึก </button>
<p></p>
</form>
</div>
<hr>
<table border="1" class="btn btn-light">
  <tr>
  <th>รหัสวิชา</th>
        <th>รายวิชา</th>
        <th>เวลาเรียน</th>
        <th>ห้องเรียน</th>
        <th>จำนวนนักศึกษา</th>
	
  <th></th>
  <th></th>
  <tr>
<?php

  $con = mysqli_connect("localhost", "root", "pui2419...", "bnk48fan");
  mysqli_set_charset($con, "utf8");

  $query = "SELECT * FROM member";
  $res = mysqli_query($con,$query);
  while($row =mysqli_fetch_array($res)) {
	  ?>
	    <tr>
        <tr>
             <td><?php echo $row["subject_id"]; ?></td>
             <td><?php echo $row["other"]; ?></td>
             <td><?php echo $row["study_time"]; ?></td>
             <td><?php echo $row["room"]; ?></td>
             <td><?php echo $row["members"]; ?></td>
             
          </tr>
        <td><img src=<?php echo $row["image"]; ?>width="170" height="182"></td>

		   <td><a href="./editmember.php?id=<?php echo $row["id"]; ?>">แก้ไข</a></td>
		   <td><a href="./delmember.php?id=<?php echo $row["id"]; ?>">ลบ</a></td>
		</td>
  <?php
  }
  ?>
  </table>
  <form action="./admin.php" method="get">
  <button  class="btn btn-lg btn-danger-outline" type ="submit">Back</button>
  </form>
  <p></p>
  </body>
  </html>
