<?php
 session_start();
 header ('Content-type: text/html; charset=utf-8');
 
 mysql_connect("localhost","root","");  //ข้อมูลนี้ได้มาจากตอนติดตั้งเว็บเซิร์ฟเวอร์
 mysql_select_db("tests");
 
 $username = isset($_POST['username']) ? $_POST['username'] : '';
 $password = isset($_POST['password']) ? $_POST['password'] : '';
 
 $strSQL = "SELECT * FROM tb_user WHERE user_name = '".mysql_real_escape_string($username)."' 
 AND user_password = '".mysql_real_escape_string($password)."'";
 $qry = mysql_query($strSQL) or die('ไม่สามารถเชื่อมต่อฐานข้อมูลได้ Error : '. mysql_error());
 $row = mysql_fetch_assoc($qry);
 if(!$row)
 {
   echo "

ชื่อผู้ใช้ หรือ รหัสผ่าน ไม่ถูกต้อง!

";
 }
 else
 {
   //สร้าง SESSION เพื่อใช้ในหน้าอื่น ที่ต้องการตรวจสอบข้อมูลผู้ใช้ในขณะนั้น
   $_SESSION["user_id"]   = $row["user_id"];
   $_SESSION["user_level"]  = $row["user_level"];
   $_SESSION["user_fullname"]  = $row["user_fullname"];

   session_write_close();//สิ้นสุดการทำงานของ SESSION ในหน้านี้

   header("location:index.php");//ย้ายไปยังหน้าหลัก
 }
 mysql_close();//ปิดการเชื่อมต่อฐานข้อมูล
?>