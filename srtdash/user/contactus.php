<?php include("userheader.php") ?>
<html>
<head>
<style>
.vl {
  border-left: 3px solid gray;
  height: 150px;
}
.hea
{
	color:#666666;
	background-color:#CCCCCC;
	text-align:center;
	height:100px;
	font-family:Segoe Print;
	font-weight:bold;
}

.fa-envelope
{
	color:#66CCFF;
}
.fa-user
{
	color:#66CCFF;
}
.fa-google
{
	color:#66CCFF;
}

.bt1{
	background-color:#0000CC;
	margin-top:50px;
	width:200px;
	height:50px;
	color:white;
	font-size:20px;
	font-weight:bold;
}
.ab{

}
</style>
</head>
</body>

<h2 class="hea"><br>Contact us</h2>

<div class="container">
  <div class="row">
  <div class="col-1">

</div>
<div class="col-1 as">
<br><br><br><br>
<div class="vl"></div>
</div>

<div class="col-3" style="color:#333333;font-family:Palatino Linotype;font-size:20px;">
<br><br><br><br>
At post Varye tal and, Satara, Maharashtra 415015<br>
</div>
<div class="col-sm-5">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39991.482661581016!2d73.95596989352389!3d17.752294113176376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc239db3559fc6d%3A0x427327898301ecf1!2sVrindavan%20dairy%20farm!5e0!3m2!1sen!2sin!4v1623155637845!5m2!1sen!2sin" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
</div>

</div>

<br><br><br>

<div class="container">
 <div class="row">
    <div class="col-sm-6"><img src="../feedback2.gif" class="img-fluid"></img></div>
    <div class="col-sm-6 ab">
	<br>
	  <center><h1 style="font-family:Tempus Sans ITC;"> Feedback</h1></center><br>
		   <table>
		   <form method="post" action="contactus.php">

	    <tr style="height:40px;">
	         <td><i class="fa fa-user fa-2x">&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">Name :-</font>&nbsp;&nbsp;</i></td>
			 <td><input class="form-control" type="text" id="ip1" name="fname" pattern="([a-zA-Z] ?)+[a-zA-Z]"/></td>
              
		</tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
	    <tr style="height:40px;width:150px;">
		    <td><i class="fa fa-google fa-2x">&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">G-mail :-</font>&nbsp;&nbsp;</i> </td>
			<td><input class="form-control" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/></td>
		</tr>
		   <tr>
		    <td><i class="fa fa-envelope fa-2x">&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">Query/Feedback :-</font>&nbsp;&nbsp;</i> </td>
			<td><textarea  class="form-control" rows="4" cols="30" name="feed"></textarea></td>
		</tr>
			    <tr>
			<td colspan="2"><center><input type="submit" class="bt1" id="submit" name="submit"></center></td>
		</tr>
	  </table>
	 </form>
	 	<?php
										 if (isset($_POST['submit']))
										{
											$name=$_POST['fname'];
											$query=$_POST['feed'];
											$mail=$_POST['email'];
											
											$result=$conn->prepare("insert into feedback(name, mail, feedback) values('$name','$mail','$query')");
											
											$result->execute();
											
											echo "<script>
                          alert('Your record is inserted successfully...!');
                           window.location.href='contactus.php';
                             </script>";
										}
										
										?>
	</div>
	</div>



</div>
<br><br>
</body>
</html>
<?php include("userfooter.php") ?>