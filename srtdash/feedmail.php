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

$mail->setFrom('shehamuliya98@gmail.com', 'From vrindavan dairy');
$mail->addAddress($email, 'Joe User');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Regarding your feedback';
$mail->Body    = 'Thanks for your feedback <br>'.$subject;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
										}
?>

<?php include("header.php");?>
        
            <div class="main-content-inner">

                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                          	<?php
										
										$id=$_GET["ID"];
											$result = $conn->prepare("SELECT * FROM feedback where id=".$id);
		                                   $result->execute();
		                                  $row = $result->fetch();
										 $name= $row['name'];
                                           ?>
                          
    
                            <!-- Server side start -->
                            <div class="col-12">
                                <div class="card mt-5">
                                    <div class="card-body">
                                        <h4 class="header-title">Feedback Master</h4>

										<form action="feedmail.php?ID=<?php echo $id;?>" method="POST" enctype="multipart/form-data">
									
                                            <div class="form-row">
											

										     <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">ID</label>
                                            <input class="form-control col-md-3" type="text" id="example-text-input" placeholder="ID" readonly name="id" value="<?php echo $row['id']; ?>">
                                        </div>
											
                                                <div class="col-md-4 mb-3">
                                                   <div class="form-group">
                                            <label for="example-text-input2" class="col-form-label">Name<span class="star" style="color: red">*</span> </label>
                                            <input class="form-control col-md-6" type="text" id="example-text-input2" name="name" pattern="([a-zA-Z] ?)+[a-zA-Z]" required="" value="<?php echo $name; ?>">
                                        </div>
                                                </div> </div>
												
											
										
                                          
										  
												<div class="form-row">		
										 <div class="col-md-3 mb-3">
                                                    <label for="validationCustom03">Mail</label>
                                                    <input type="text" class="form-control" placeholder="City" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" id="validationCustom03" name="email" required="" value="<?php echo $row['mail']; ?>">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid mail.
                                                    </div>
                                                </div>

												<div class="col-md-3 mb-3">
                                                    <label for="validationCustom04">feedback</label>
                                                    <textarea class="form-control" cols="3" rowspan="4" name="msg"><?php echo $row['feedback']; ?></textarea>
													
                                                </div>
											
												</div>
											
									<div class="form-row">											
										  <div class="col-md-3 mb-3">
                                                    <label for="validationCustom04">Replay</label>
                                                    <textarea class="form-control" cols="3" rowspan="4" name="message"></textarea>
													<div class="invalid-feedback">
                                                        Please provide a valid city.
                                                    </div>
                                                </div>
										 
									</div>
									
									
												
												
                                           
										
                                       
									  
                                          
                                            <button type="submit" style="margin:25px" class="btn btn-primary"  id="submit" name="submit">Send</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
											<a href=""><button class="btn btn-primary" type="button">Back</button></a>
                                        </form>
								
											
											
											
                                    </div>
                                </div>
                            </div>
                            <!-- Server side end -->
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->
      <?php include("footer.php");?>