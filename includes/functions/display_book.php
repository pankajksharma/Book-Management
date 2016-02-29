<?php

    require_once('includes/incl_user.php');
    
    if (isset($_REQUEST['bid']))
      $bid=$_REQUEST['bid'];

  function display_book($bid)
  {
    require('includes/incl_user.php');
    
    $sql="select * from book_books where book_id=$bid";
    $result1=mysqli_query($con,$sql);
    if ($result1){
    $row=mysqli_fetch_array($result1);
    
      echo("<center><a href=\"enlarge.php?bid=".$row['book_id']."\">".$row['bookname']);
      if($row['ind_pic']==NULL)
       echo("<br /><img class=\"book_image_small\" src=\"./img/default-book.png\" alt=\"".$row['bookname']."\" /><br />");
      else
        echo("<br /><img class=\"book_image_small\" src=\"".$row['ind_pic']."\" alt=\"".$row['bookname']."\" /><br />");
      echo("</a>");
      echo("<font color=RED >Edition No.: </font>".$row['edition']."<br />");
      echo("<font color=GREEN >Author(s) Name: </font>".$row['authorsname']);
      echo("<p class=\"username\">Submitter: <a href=\"profile.php?user=".$row['username']."\"><font color=BLUE>".$row['username']."</font></a></p>\n");
      /*$price=$row['price'];
      echo "<font color=green>";
      if($price==NULL||$price==0)
      {
      echo "This book is free of cost";
      }
      else 
      {
      echo "price of book is <font color=red>".$price."</font>/-";
      }
      echo "</font>";*/
   }
      $sql123 = "SELECT `sold` FROM `book_invoice` WHERE `bookid`=$bid;";
   $result1234=mysqli_query($con,$sql123);
   if ($result1234){
   $row1=mysqli_fetch_array($result1234);
   if($row1['sold']!="sold")
{
 echo("<font color=GREEN >Available </font></center>");
 }
 else
  {
echo("<font color=red>Not Avaialable</font></center>");
  } }
   }
 
?> 
