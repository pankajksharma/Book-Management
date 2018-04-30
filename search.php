<?php
  session_start();
  if (!isset($_REQUEST['search_type'])) exit(0);
  $search_id=$_REQUEST['search_type'];
  if (isset($_REQUEST['keyword']))
    $key=$_REQUEST['keyword'];
  else
    $key='';

    if((!isset($_GET['id']))||($_GET['id']==NULL)||($_GET['id']==1))
    {
    $id=1;
     $head_message="Results for Your Search";
      $message="search_books";
    }
    else
    {
    $id=$_GET['id'];
    $head_message="Results for Your Search &bull; Page ".$id;
    $message="search_books";
    }
	require('./includes/template.html.php');
?>
