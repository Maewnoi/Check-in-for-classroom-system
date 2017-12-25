<!DOCTYPE html>
<html>
<title>หน้าหลัก</title>
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
   <!-- connect mysql -->
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
  <!-- connect mysql -->

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a class="w3-bar-item w3-button w3-wide">Check in for classroom system</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i> <?php echo $objResult["NAME"]; ?> </a>
      <a href="Classroom_User.php" class="w3-bar-item w3-button">Classroom</a>
      
      <a href="logout.php" class="w3-bar-item w3-button">Log out</a>
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
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i><?php echo $objResult["NAME"]; ?></a>
  <a href="Classroom_User.php" class="w3-bar-item w3-button">Classroom</a>

  
  <a href="logout.php" class="w3-bar-item w3-button">Log out</a>
</nav>
<br><br>
<div class="w3-container  w3-margin-top">
  <center>
    <div class="btn btn-default">
      <br>
      <img src="image.png" style="width:15%" class="w3-circle w3-margin-top"> 
      <br>
<?php
if($objResult)
  {?>

     <h1><?php echo $objResult["NAME"];?> </h1>
    <?php
}
?>

</div>

    <h2>Wellcome to</h2>
    <h4>Check in for classroom system</h4>
</div>
</body>
</html>
