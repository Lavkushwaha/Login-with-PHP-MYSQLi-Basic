<?php
/**
 * Created by PhpStorm.
 * User: incals
 * Date: 6/7/2017
 * Time: 11:11 AM
 */
   include('session.php');
?>
<html">

<head>
    <title>Welcome </title>
</head>

<body>
<h1>Welcome <?php echo $login_session; ?></h1>
<h2><a href = "logout.php">Sign Out</a></h2>
</body>

</html>