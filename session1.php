<?php
   include('init.php');
   session_start();
   $db = mysqli_select_db($conn,'student_result');
   $user_check = $_SESSION['login_user'];


   $ses_sql = mysqli_query($conn,"select stu_id from students where stu_id= '$user_check'");
   $row = mysqli_fetch_array($ses_sql);
   
   $login_session = $row['stu_id'];
   
   if(!isset($_SESSION['login_user'])){
      header("Location:index.php");
    //   echo"try again";
   }
?>