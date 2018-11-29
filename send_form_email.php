<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

  $email_from = 'info@l-italiano.nl';
  $email_subject = 'Nieuwe reservering';
  $email_body = "Naam: $name. \n".
                "email van: $visitor_email. \n".
                "bericht: $message. \n ";

  $to = 'info@l-italiano.nl';
  $headers = "From: $email_from \r\n";
  $headers = "Reply_To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("location: index.html")




?>
