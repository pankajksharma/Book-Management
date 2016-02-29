<?php
  session_start();
  if (!isset($_REQUEST['bid'])) exit(0);
  $bid=$_REQUEST['bid'];
  $head_message="Reviews for Selected Book!:";
  $message="show_book_reviews";
  require_once('./includes/template.html.php');
?>
