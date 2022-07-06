<?php include("userheader.php");?>

		<html>
<head>
<title>User Login</title>
</head>
<body>
 <div class="row">
    <div class="col-sm-5"><img src="../Free from synthetic hormones.jpg" class="img-fluid"></img></div>
	    <div class="col-sm-7">
<div id="message" align="center" style="border:1px solid #E1E1E1;">
  <h4>Password must contain the following:</h4>
  <ul type="circle"><p id="letter" class="invalid">A <b>lowercase</b> letter<br>A <b>capital (uppercase)</b> letter<br>A <b>number</b> <br>Minimum <b>8 characters</p></ul>

</div>
		<h1 align="center">User Details</h1>
		 <table align=center>
		   <form class="needs-validation" action="customer.php" method="post">
		   
		   
	    <tr style="height:40px;">
	         <td>&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">Name :-</font>&nbsp;&nbsp;</td>
			 <td><input class="form-control" type="text" id="ip1" name="Name" pattern="([a-zA-Z] ?)+[a-zA-Z]"/></td>
			 <td>&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">Address :-</font>&nbsp;&nbsp;</td>
			 <td><textarea class="form-control" name="add"></textarea></td>
              
		</tr>
		<tr><td></td></tr>
				
		<tr><td></td></tr>
						
		<tr><td></td></tr>
	    <tr>
		    <td>&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">City :-</font>&nbsp;&nbsp;</td>
			<td><input class="form-control" type="text" name="city" pattern="([a-zA-Z] ?)+[a-zA-Z]"/></td>
			<td>&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">District :-</font>&nbsp;&nbsp;</td>
			<td><input class="form-control" type="text" name="dis" pattern="([a-zA-Z] ?)+[a-zA-Z]"/></td><td>
		</tr>
		<tr><td></td></tr><tr><td></td></tr>
		
		 <tr style="height:40px;width:150px;">
		    <td>&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">Pincode :-</font>&nbsp;&nbsp;</td>
			<td><input class="form-control" type="number" name="pin"/></td>
			<td>&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">Mother Name :-</font>&nbsp;&nbsp;</td>
			<td><input class="form-control" type="text" name="m_name"/></td>
		</tr>
		<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
		
		<tr><td></td></tr>
		  <tr style="height:40px;width:100px;">
		    <td>&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">E-mail :-</font>&nbsp;&nbsp; </td>
			<td><input class="form-control" type="text" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" /></td>
			<td>&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">Mobile-no :-</font></td>
			<td><input class="form-control" type="text" name="mno" pattern="[0-9]{10}" maxlength="10"/></td>
		</tr>
		
		
		
		<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
		  <tr style="height:40px;width:100px;">
		    <td>&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">Username:-</font>&nbsp;&nbsp; </td>
			<td><input class="form-control" type="text" name="user" /></td>
			<td>&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">Password :-</font></td>
			<td><input class="form-control" type="Password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" /></td>
		</tr>

		
		<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
			    <tr>

			<td align="center" colspan="2"><button class="btn btn-primary" type="submit" name="submit">Submit form</button></td>

		</tr>
	  </table>
	 </form>
<?php
										if (isset($_POST['submit']))
										{
											$name=$_POST['Name'];
											$address=$_POST['add'];
											$city=$_POST['city'];
											$dis=$_POST['dis'];
											$pincode=$_POST['pin'];
											$email=$_POST['mail'];
											$mot=$_POST['m_name'];
											$mobile=$_POST['mno'];
											$user=$_POST['user'];
											$pass=$_POST['pass'];
										
										$result=$conn->prepare("SELECT COUNT(id) AS total FROM customer WHERE user='" . $_POST["user"] ."'");
$result->execute();
//$res = $db->query($qry);

$row = $result->fetch();

//$rec = $db->fetchAssoc($res);
$count = $row['total'];

$result1=$conn->prepare("SELECT COUNT(id) AS total FROM customer WHERE Email='" . $_POST["mail"] ."'");
$result1->execute();
//$res = $db->query($qry);

$row = $result1->fetch();

//$rec = $db->fetchAssoc($res);
$ecount = $row['total'];

											if($count>0)
											{
													
											echo "<script>
                          alert('Username allready exist.... Please enter another Username');
                           window.location.href='customer.php';
                             </script>";	
												
											}
											else if ($ecount>0)
													{
													
											echo "<script>
                          alert('Email allready exist.... Please enter another Email');
                           window.location.href='customer.php';
                             </script>";	
												
											}
											else
											{
											$result1=$conn->prepare("insert into customer(Name,Address,City,District,Pincode,Email,Phone,user,Pass,m_name) values('$name','$address','$city','$dis','$pincode','$email','$mobile','$user','$pass','$mot')");
											
											$result1->execute();
											
											echo "<script>
                          alert('Your record is inserted successfully...!');
                           window.location.href='customer.php';
                             </script>";
										}
										}
											
										?>
										

</div></div>

</body>
</html>
      <?php include("userfooter.php");?>