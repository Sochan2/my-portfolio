<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

if(isset($_POST["submit"])){
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);
  $project_type = htmlspecialchars($_POST['project_type']);
  $budget = htmlspecialchars($_POST['budget']);
  $deadline = htmlspecialchars($_POST['deadline']);



  $mail = new PHPMailer(true);

  try {
      //Server settings
     // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'sokiiwae2367@gmail.com';                     //SMTP username
      $mail->Password   = 'nsxtfjonyqwsfumb';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
      $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
      //Recipients
      $mail->setFrom('from@example.com', 'Fund of web IT');
      $mail->addAddress('sokiiwae2367@gmail.com', 'Joe User');     //Add a recipient
      
  
    
  
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'This is the contact to Soki';
      $mail->Body    = '<h2>Contact Form Submission</h2>
          <p><strong>Name:</strong> '.$name.'</p>
           <p><strong>Name:</strong> '.$email.'</p>
          <p><strong>Email:</strong> '.$subject.'</p>
         <p><strong>Email:</strong> '.$message.'</p>
         <p><strong>Email:</strong> '.$project_type.'</p>
         <p><strong>Email:</strong> '.$budget.'</p>
         <p><strong>Email:</strong> '.$deadline.'</p>
         ';
     
         if( $mail->send()){
          $_SESSION['status']="Thank you for contacting to Soki";
          header("Location:{$_SERVER["HTML_ReFERER"]}");
          exit(0);
         }
         else{
          $_SESSION['status']="Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
          header('Location:index.html');
          exit(0);
         }
   
         
  
     
      
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
else{
  //index.html
  header('location: index.html');
  esit(0);
}

