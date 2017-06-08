<?php
/**
 * Created by PhpStorm.
 * User: incals
 * Date: 6/7/2017
 * Time: 11:12 AM
 */
   include('config.php');
   session_start();

   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($db,"select username from table1 where username = '$user_check' ");``
  if($ses_sql === FALSE){
      die(mysql_error()); // TODO: better error handling

  }

 else {
     $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

     $login_session = $row['username'];

     if (!isset($_SESSION['login_user'])) {
         header("location:login.php");
     }
 }
?>