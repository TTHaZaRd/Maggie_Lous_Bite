<?php
  $to_email = 'bigred.83@hotmail.com';
  $user = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $comment = $_REQUEST['message'];


  mail($to_email, $user, $email, $comment);
  header("Location: order_placed.html");
?>
