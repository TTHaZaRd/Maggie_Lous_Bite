<?php
  $to_email = 'maggielousbite@gmail.com';
  $user = $_REQUEST['name'];
  $score = $_REQUEST['rating'];
  $comment = $_REQUEST['message'];


  mail($to_email, $user, $score, $comment);
  header("Location: thankyou.html");
?>
