  <?php
session_start();

   $con = mysqli_connect("localhost", "root", "", "tests");
     $stuid = $_GET ["stuid"];
   // $classid = $_GET ["classid"];

               $query2 = "INSERT INTO `check` (`stu_id`, `time`, `Status`) VALUES ('$stuid', null, '1')";

              mysqli_query($con, $query2);
              echo  '<script type="text/javascript" language="javascript"> 
                alert("[เช็คชื่อเรียบร้อย]");
                 window.history.back();
               </script>';
           
               
                //break; 

?>
