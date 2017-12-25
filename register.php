<?php

        $con = mysqli_connect("localhost", "root", "", "tests");
  		mysqli_set_charset($con, "utf8");

  
		$username = $_GET ["Username"];
    $pwd = $_GET ["Password"];
    $Name= $_GET ["Name"];
       // $stu_id = $_GET ["stu_id"];
        $nam = $objResult["NAME"];
         
         		$query = "INSERT INTO `tb_facebook` (`ID`, `FACEBOOK_ID`, `NAME`, `EMAIL`, `PICTURE`, `LINK`, `CREATE_DATE`, `Status`) VALUES (NULL, '$username', '$Name', '$pwd', 'image.png', 'no', '2017-12-24 00:00:00', 'User');";
         	mysqli_query($con, $query);

		     header("Location: login_2.php");
		      echo "บันทึกข้อมูลเรียบร้อย";
 
       
       
         	
		
           
		//$query = "INSERT INTO students VALUES ('','$stu_id','$firstname','$lastname','$nickname','$major','$mobile','')";
		//echo $query;

		
?>