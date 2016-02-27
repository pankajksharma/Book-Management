<?php
session_start();
include('./includes/incl_user.php');
?>

<?php
  session_destroy();
  unset($_SESSION['loggedIn']);
  unset($_SESSION['user']);
  unset($_SESSION['email_id']);
  if(isset($_SESSION['adminloggedIn']))
    unset($_SESSION['adminloggedIn']);
  unset($_SESSION['password']);
$head_message="System Says:";
$url="index.php";
$message="<center>Sucessfully logged out!<br />Click <a href=\"index.php\">Here</a> to continue...</center>";
require('./includes/template.html.php');
?>
