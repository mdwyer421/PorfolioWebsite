<?php
//This works on your own server only, No security whatsoever

  $name = $_Post['name']; //get the info from the webpage
  $vistor_email = $_Post['email'];
  $message = $_POST['message'];

  $email_from = 'mdwyer627@gmail.com';// where the email is coming from

  $email_subject = "New Form Submission"; //email subject line

  $email_body = "User Name: $name.\n". //what is sent to you
                  "User Email: $vistor_email.\n".
                   "User Message: $message.\n";


    $to = "mdwyer421@gmail.com"; //where you want the email to go

    $headers = "From:" $email_from \r\n";

    $headers .= "Reply-To: $vistor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: index.html");

?>
