<?php
  $con=mysqli_connect('localhost','test','password') or die("Cannot connect to DB ");
    mysqli_select_db($con,"book")or die("cannot select DB");
?>
