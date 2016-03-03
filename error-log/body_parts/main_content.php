<div class="sidebar_re">
				<div class="head">
          <?php
            echo($head_message);
          ?>
				</div>
				<div class="body">
          <?php
            if($message=="search_books")
            {
              require_once('./functions/display_book.php');
              require_once('../includes/functions/search_books.php');              
            }
            else if($message=="sure_to_delete")
            {
              require_once('./functions/delete_book.php');
            }
            else if($message=="show_reviews")
            {
              require_once('./functions/show_reviews.php');
              show_reviews($bid);
            }
            else if($message=="sure_delete_review")
            {
              require('./functions/delete_review.php');
            }
            else if($message=="show_user_details")
              require('./functions/show_user_details.php');
            else if($message=="show_enlarged_book")
              require('./functions/show_book_details.php');
            else
              echo("<img src=\"../img/welcome.jpg\" />");
          ?>
				</div>
</div>