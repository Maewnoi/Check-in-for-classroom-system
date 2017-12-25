<?php
       session_start();
        $con = mysqli_connect("localhost", "root", "", "tests");
  		mysqli_set_charset($con, "utf8");


		$stu_id= $_GET["stu_id"];
		$name = $_GET ["name"];
		$nickname  = $_GET ["nickname"];
    	$major = $_GET ["major"];
		$mobile = $_GET ["mobile"];
		$class_id = $_GET ["class_id"];
    
         $query = "SELECT * FROM `acc_subjects`";
         $res = mysqli_query($con,$query);

         while($row =mysqli_fetch_array($res)) {
         	$chack=$row["class_id"];
             
             
         	//$chack=$class_id;
         	if($chack=$class_id){
         		$query = "INSERT INTO `students` (`id`, `stu_id`, `name`, `nickname`, `major`,`mobile` , `class_id`) VALUES (NULL, '$stu_id', '$name', '$nickname ', '$major', '$mobile', '$class_id')";
         	mysqli_query($con, $query);

		     header("Location: subject_Admin.php");
		      echo "บันทึกข้อมูลเรียบร้อย";
        
         	}

         	 else if(!$chack){ 
         	 	 header("Location: subject_Admin.php");
         	 }

    }
       
       
         	
		
           
		//$query = "INSERT INTO students VALUES ('','$stu_id','$firstname','$lastname','$nickname','$major','$mobile','')";
		//echo $query;

		
?>
