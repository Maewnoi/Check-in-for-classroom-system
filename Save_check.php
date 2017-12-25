<?php
       session_start();
        $con = mysqli_connect("localhost", "root", "", "tests");
  		mysqli_set_charset($con, "utf8");


		$stu_id= $_GET["stu_id"];
		$status = $_GET ["status"];
		$note = $_GET ["note"];
		$Date_check = $_GET ["Date_check"];
	    
    
         $query = "SELECT * FROM `tests`.`students`WHERE `class_id` = '$class_id'";
         $res = mysqli_query($con,$query);

         while($row =mysqli_fetch_array($res)) {

            $status = $_GET[$row["stu_id"]];
         	//$input = $row["stu_id"];

         		$query2 = "INSERT INTO 'check' VALUES ('','$status','$note','$Date_check','','')";
         	mysqli_query($con, $query2);

		     header("Location: subject.php");
		      echo "บันทึกข้อมูลเรียบร้อย";
        
         	
    }
       
       
         	
		
           
		//$query = "INSERT INTO students VALUES ('','$stu_id','$firstname','$lastname','$nickname','$major','$mobile','')";
		//echo $query;

		
?>
