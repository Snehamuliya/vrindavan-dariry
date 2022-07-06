<?php
session_start();
$_SESSION["cart"]=0;
include("connection.php");
?>
  <?php if(isset($_SESSION['aname']))
  {
	  $aname=$_SESSION['aname'];
	  $aid=$_SESSION["aid"];
  }
	  ?>
<link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/themify-icons.css">
<link rel="stylesheet" href="assets/css/metisMenu.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/slicknav.min.css">
<!-- others css -->
<link rel="stylesheet" href="assets/css/typography.css">
<link rel="stylesheet" href="assets/css/default-css.css">
<link rel="stylesheet" href="assets/css/styles.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<!-- modernizr css -->
<script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

<br><br>
<h1 align="center" style="font-family:calibari;"> admin account update </h1>
<br><br><?php
    $resultcom = $conn->prepare("SELECT * From admin where id=".$aid);
            $resultcom->execute();
            $rowcomp = $resultcom->fetch();
?>

              <center> 
<form class="needs-validation" action="aupd.php" method="post">
		   
	<table>	   
	    <tr>
	         <td>&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">Name :- </font>&nbsp;&nbsp;</td>
			 <td><input class="form-control" type="text" id="ip1" name="name" pattern="([a-zA-Z] ?)+[a-zA-Z]" value="<?php echo $rowcomp['Name']?>"/></td>
			 <td>&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">Address :-</font>&nbsp;&nbsp;</td>
			 <td><textarea class="form-control" name="add"><?php echo $rowcomp['Address']?></textarea></td>
              
		</tr>
		<tr><td></td></tr>
				
		<tr><td></td></tr>
						
		<tr><td></td></tr>
	    <tr>
		    <td>&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">City :-</font>&nbsp;&nbsp;</td>
			<td><input class="form-control" type="text" name="city" pattern="([a-zA-Z] ?)+[a-zA-Z]" value="<?php echo $rowcomp['City']?>"/></td>
			<td>&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">District :-</font>&nbsp;&nbsp;</td>
			<td><input class="form-control" type="text" name="da" pattern="([a-zA-Z] ?)+[a-zA-Z]" value="<?php echo $rowcomp['District']?>"/></td><td>
		</tr>
		<tr><td></td></tr><tr><td></td></tr>
		
		 <tr style="height:40px;width:150px;">
		    <td>&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">Pincode :-</font>&nbsp;&nbsp;</td>
			<td><input class="form-control" type="number" name="pin" value="<?php echo $rowcomp['Pincode']?>"/></td>

		</tr>
		<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
		
		<tr><td></td></tr>
		  <tr style="height:40px;width:100px;">
		    <td>&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">E-mail :-</font>&nbsp;&nbsp; </td>
			<td><input class="form-control" type="text" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="<?php echo $rowcomp['Email']?>"/></td>
			<td>&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">Mobile-no :-</font></td>
			<td><input class="form-control" type="text" name="mno" pattern="[0-9]{10}" maxlength="10" value="<?php echo $rowcomp['Phone']?>"/></td>
		</tr>
		
		
		
		<tr><td></td></tr><tr><td></td>

		
		<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
			    <tr>

			<td align="center" colspan="2"></td>

		</tr>
	  </table>
						
<br><br><button class="btn btn-primary" type="submit" name="submit">Update account</button>
							&nbsp;&nbsp;<a href="auser.php" class="btn btn-primary btn-sm">
                                Update Username
                            </a>
							</form></center>
																<?php
										
										if (isset($_POST['submit']))
											{
												$name=$_POST['name'];
											    $address=$_POST['add'];
												$city=$_POST['city'];
												$dis=$_POST['da'];
												$pincode=$_POST['pin'];
												$email=$_POST['mail'];
												$mobile=$_POST['mno'];
												
											
	                $result = $conn->prepare("update admin set Name='$name',Address='$address',City='$city',District='$dis',Pincode='$pincode',Email='$email',Phone='$mobile' Where id=$aid ");
	                $result->execute();

											echo "<script>
											alert('Your record is updated successfully....!');
											window.location.href='hi.php';
											</script>";
											}
											?>
												  