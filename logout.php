<?php
/**
 * Created by PhpStorm.
 * User: incals
 * Date: 6/7/2017
 * Time: 11:11 AM
 */

   session_start();

   if(session_destroy()) {
       header("Location: login.php");
   }
?>