<?php

  function display_book($bid,$flag=1) //flag decide whether to show Delet button or Not
  {
    $sql="select * from book_books where book_id=$bid";
    $result1=mysqli_query($GLOBALS['con'],$sql);
    if ($result1){
    $row=mysqli_fetch_array($result1);
    
      echo("<center><a href=\"?enlarge&bid=".$row['book_id']."\">".$row['bookname']);
      if($row['ind_pic']==NULL)
       echo("<br /><img class=\"book_image_small\" src=\"../img/default-book.png\" alt=\"".$row['bookname']."\" /><br />");
      else
        echo("<br /><img class=\"book_image_small\" src=\"../".$row['ind_pic']."\" alt=\"".$row['bookname']."\" /><br />");
      echo("</a>");
      echo("<font color=RED >Edition No.: </font>".$row['edition']."<br />");
      echo("<font color=GREEN >Author(s) Name: </font>".$row['authorsname']);
      echo("<p class=\"username\">Submitter: <a href=\"?username=".$row['username']."\"><font color=BLUE>".$row['username']."</font></a></p>\n");
    }
    if($flag):
?>
  <center>
  <form action=?delete method=POST >
      <input type="hidden" name="bid" value=<?php echo("\"".$bid."\""); ?> />
      <input type="submit" name="delete" value="Delete Book" />
   </form>
   <form action=?show-reviews method=POST >
      <input type="hidden" name="bid" value=<?php echo("\"".$bid."\""); ?> />
      <input type="submit" name="Show_Reviews" value="Show Reviews" />
   </form>
   </center>
<?php
  endif;
  }
?>