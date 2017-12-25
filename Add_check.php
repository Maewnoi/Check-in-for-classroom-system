<!DOCTYPE html>
<html>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("/w3images/mac.jpg");
    min-height: 100%;
}
.w3-bar .w3-button {
    padding: 16px;
}
</style>
<body>
<?php
session_start();

  $objConnect = mysql_connect("localhost","root","") or die(mysql_error());
  $objDB = mysql_select_db("tests");
  mysql_query("SET NAMES UTF8");


  // Check Exists ID
  $strSQL = "SELECT * FROM tb_facebook WHERE FACEBOOK_ID = '".$_SESSION["FACEBOOK_ID"]."' ";
  $objQuery = mysql_query($strSQL);
  $objResult = mysql_fetch_array($objQuery);
  
 
  
?>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="Home_Admin.php" class="w3-bar-item w3-button w3-wide">Check in for classroom system</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">

      <a href="Home_Admin.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i><?php echo $objResult["NAME"]; ?></a>
        <a href="Classroom_Admin.php" class="w3-bar-item w3-button">รายวิชา</a>
  <a href="subject_Admin.php" class="w3-bar-item w3-button">รายชื่อนักศึกษา</a>
  <a href="Checkin.php" class="w3-bar-item w3-button">ประวัติการเช็ค</a>
        <a href="logout_Admin.php" class="w3-bar-item w3-button">Log out</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="Home_Admin.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i><?php echo $objResult["NAME"]; ?></a>
  <a href="Classroom_Admin.php" class="w3-bar-item w3-button">รายวิชา</a>
  <a href="subject_Admin.php" class="w3-bar-item w3-button">รายชื่อนักศึกษา</a>
  <a href="Checkin.php" class="w3-bar-item w3-button">ประวัติการเช็ค</a>
  <a href="logout.php" class="w3-bar-item w3-button">Log out</a>
</nav>
<p></p>
<br><br><br>
<div  align = "center">
<form method="get"> <input type="text" name="">
        <button class="btn btn-primary" type ="submit">Search</button>
        </form>
</div>
<hr>
<div class="btn btn-light">
  <center><table border="1" class="btn btn-light">
  <tr>
        <th >รหัสนักศึกษา </th>
        <th >ชื่อ - สกุล</th>
        <th >ชื่อเล่น</th>
        <th >สาขา</th>
        <th >เบอร์โทร</th>
        <th >รหัสวิชา</th>

  </tr>
  <?php

  $con = mysqli_connect("localhost", "root", "", "tests");
  mysqli_set_charset($con, "utf8");
  
  $query = "SELECT * FROM `students`";
  $res = mysqli_query($con,$query);

  while($row =mysqli_fetch_array($res)) {
    ?>

      <tr>
        <tr>
             <td><?php echo $row["stu_id"]; ?></td>
             <td><?php echo $row["name"]; ?></td>
             <td><?php echo $row["nickname"]; ?></td>
             <td><?php echo $row["major"]; ?></td>
             <td><?php echo $row["mobile"]; ?></td>
             <td><?php echo $row["class_id"]; ?></td>
    </td>
  <?php
  }
  ?>
  </table>
<hr>
<!--add subject-->

  <p></p>
</center>
<p></p>
</form>
</div>

</body>
</html>
