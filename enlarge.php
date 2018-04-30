<?php
  session_start();
  if (!isset($_GET['bid'])) exit(0);
  $bid=$_GET['bid'];
  $meta="enlargebook";
  $head_message="Details for Selected Book:";
  $message="show_enlarged_book";
  require_once('./includes/template.html.php');
?>
