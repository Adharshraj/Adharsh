<?php



  if(isset($_POST['submit'])){
  $to ="adharshraj35@gmail.com";
  $subject = $_POST['subject'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $headers = "From: " .$email. "\r\n".
  
  
  mail($to,$subject,$message,$headers);
  header("Location: contact.html");
  
  
  }





?>
