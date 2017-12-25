<?php
	session_start();
	mysql_connect("localhost","root","");
	mysql_select_db("tests");
	$strSQL = "SELECT * FROM tb_facebook WHERE FACEBOOK_ID = '".mysql_real_escape_string($_POST['txtUsername'])."' 
	and EMAIL = '".mysql_real_escape_string($_POST['txtPassword'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			echo '<script type="text/javascript" language="javascript"> 
                alert("กรุณาตรวจสอบ Username หรือ Password");
                window.history.back();
        </script>';
	}
	else
	{
			$_SESSION["FACEBOOK_ID"] = $objResult["FACEBOOK_ID"];
			$_SESSION["Status"] = $objResult["Status"];

			session_write_close();
			
			if($objResult["Status"] == "Admin")
			{
				header("location:Home_Admin.php");
			}
			else
			{
				header("location:Home_User.php");
			}
	}
	mysql_close();
?>