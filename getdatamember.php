<?php
        $con = mysqli_connect("localhost", "root", "", "tests");
  		mysqli_set_charset($con, "utf8");


		$class_id = $_GET["class_id"];
		$other = $_GET ["other"];
		$study_time = $_GET ["study_time"];
		$room  = $_GET ["room"];
    	$members = $_GET ["members"];
		


		$query = "INSERT INTO acc_subjects VALUES ('','$class_id','$other','$study_time','$room','$members')";
		//echo $query;

		mysqli_query($con, $query);
		header("Location: Classroom_Admin.php");
		echo "บันทึกข้อมูลเรียบร้อย"
?>
