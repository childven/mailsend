<?php
ini_set('display_errors' , 1 );
error_reporting( E_ALL );
$from = "cahya x" ;
$to = "cahyaxkun@gmail.com";
$subject = "Mobile Legend Free Account"
$message = "id : theguyman@gmail.com pw : thegysx12344"
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);
echo "The Email Message Was Sent.";
?>