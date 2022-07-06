<?php

 if (isset($_POST['submit']))
										{
											$name=$_POST['name'];
											$email=$_POST['email'];
											$subject=$_POST['message'];
require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'shehamuliya98@gmail.com';                 // SMTP username
$mail->Password = '@@s0nyis##';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('shehamuliya98@gmail.com', 'test email');
$mail->addAddress('shehamuliya98@gmail.com', 'Joe User');     // Add a recipient(receiver address)
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
										}
?>

<form action="mail2.php" method="post">
    <label for="name">Your Name</label>
    <input type="text"  name="name" placeholder="Your name..">
<br>
    <label for="lname">Email</label>
    <input type="email"  name="email" placeholder="Your email..">
   <br>
    <label for="message">Message</label>
    <textarea  name="message" placeholder="Write something.." style="height:200px"></textarea>
<br>
    <input type="submit" value="Submit" name="submit">
  </form>