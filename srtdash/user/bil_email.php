<?php include("userheader.php");


if($username==true)
{
	
	
}
else
	
	{
		echo '<script>alert("please log in first to see this page!");</script>';
		echo "<script>window.location.href='login.php';</script>";
		
	}

 ?>
 



<table  class="table table-hover">
<thead class="text-capitalize">
<tr>

</tr>
</thead>
<tbody>
	<?php 

$result1 = $conn->prepare("SELECT * From final where status='pending' and cus_id=".$uid);
$result1->execute();

$row = $result1->fetch();
$bil=$row['bil'];

                                                      if($row['cus_id']>0)
                                                {

                                                $resultcom = $conn->prepare("SELECT * From customer where id=".$row['cus_id']."");
                                                $resultcom->execute();
                                                $rowcomp = $resultcom->fetch();

                                                 
													$name=$rowcomp['Name'];
                                                }

?>

<?php

						
$result3 = $conn->prepare("SELECT * FROM customer where id=".$uid);
$result3->execute();
$row1 = $result3->fetch();

$email = $row1['Email'];
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

$mail->setFrom('shehamuliya98@gmail.com', 'Bill details From vrindavan dairy');
$mail->addAddress($email, 'Joe User');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Thanks for shopping from us';
$mail->Body    = '<br><br> Thanks for shopping from goverdhan<br><br><br> happy shopping <br><br> Your order no = '.$bil;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
		echo "<script>window.location.href='bil.php';</script>";
}
										
?>

<form method="post">

  
    <input type="submit" value="Submit" name="submit">
  </form>