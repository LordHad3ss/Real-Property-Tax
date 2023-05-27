<?php
session_start();

require 'connect.php';
require '../../phpmailer/phpmailer/src/PHPMailer.php';
require '../../phpmailer/phpmailer/src/SMTP.php';
require '../../phpmailer/phpmailer/src/Exception.php';

//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$postfirstname = $_POST['firstname'];
$postlastname = $_POST['lastname'];
$postemail = $_POST['email'];
$postpassword = $_POST['password'];

$qryCheckEmail = "SELECT COUNT(1) AS COUNT FROM `tbl_rpt_users` WHERE `email` = '$postemail' AND `status` = 1";
$resCheckEmail = mysqli_query($conn,$qryCheckEmail);

$rowCheckEmail = mysqli_fetch_assoc($resCheckEmail);

$cntEmail   = $rowCheckEmail['COUNT'];

if ($cntEmail != 0)
{
    echo "Email already used!";
}
else
{
    $code = rand(999999, 111111);
    $encpass = password_hash($postpassword, PASSWORD_DEFAULT);
    $qryRegister = "INSERT INTO
                         `tbl_rpt_users`(`usertype`,`password`, `lastname`, `firstname`, `email`, `status`, `otp`) 
                     VALUES 
                         ('Consumer',
                          '$encpass',
                         UPPER('$postlastname'),
                         UPPER('$postfirstname'),
                          '$postemail',
                           0,
                           '$code')";
    $ResRegister = mysqli_query($conn,$qryRegister);
    $_SESSION['email'] = $postemail;
    // echo "Success";

    if ($ResRegister){
        $to_email = $postemail;
        $subject = "Welcome new user";
        $message = "Hi $postfirstname,  <br/><br/>
                    Thanks for signing up in our website! 
                    <br/><br/>
                    Your code: <b/> $code </b>
                    <br/><br/>
                    Please do not share this code to others";
        $sender = "From: countrywheelsph@gmail.com";
  
        if($ResRegister == true){
        $mail = new PHPMailer();
        //Set mailer to use smtp
        $mail->isSMTP();
  
        //define smtp host
        $mail->Host = "smtp.gmail.com";
  
        //enable smtp authentication
        $mail->SMTPAuth = true;
  
        //set type of encryption (ssl/tls)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
  
        //set port to connect smtp
        $mail->Port = 465;
  
        //set gmail username
        $mail->Username = "countrywheelsph@gmail.com";
  
        //set gmail password
        $mail->Password = "sunyomkoxcqxdkpe";
  
        //Set email subject
        $mail->Subject = "Welcome New User";
  
        //set sender email
        $mail->setFrom("countrywheelsph@gmail.com");
  
        //Enable HTML
        $mail->isHTML(true);
  
  
        //Email body
        $mail->Body = $message;
  
        //Add recipient
        $mail->addAddress($to_email);
  
        //Finally send email
        if ( $mail->Send() ) {
          echo "Success";
        }
        //Closing smtp connection
        $mail->smtpClose();
      }
    }
    
}

?>

