<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
?>

<?php
    $email_from = $visitor_email;
 
    $email_subject = "New Email from $name";
 
    $email_body = "You have received a new message from the user $name.\n
                    Here is the message:\n $message";
?>

<?php

  $to = "brokenyard@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  ini_set(mail($to,$email_subject,$email_body,$headers),1);

 ?>
