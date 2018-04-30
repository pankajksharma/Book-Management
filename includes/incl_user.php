<?php
  require_once(__DIR__.'/../config.php');
  $con=mysqli_connect(SQL_HOST,SQL_USER,SQL_PASSWORD) or die("Cannot connect to DB ");
    mysqli_select_db($con,SQL_DB)or die("cannot select DB");
?>
