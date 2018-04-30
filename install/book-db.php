<?php

$import_tables = array('book_books','book_invoice','book_reviews','book_types','book_users');

require('../includes/incl_user.php');
foreach($import_tables as $table)
{
    $table_queries = explode(';',file_get_contents($table.'.sql'));    
    foreach($table_queries as $query)
    {
        mysqli_query($con,$query);
    }
}
echo "Finished importing tables.\n";

?>