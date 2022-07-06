
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
<style>
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
 font {
  padding: 12px 0px 3px 0;
  display: inline-block;
}
</style>

<?php
                                                $resultcom = $conn->prepare("SELECT * From customer where id=".$uid);
                                                $resultcom->execute();
                                                $rowcomp = $resultcom->fetch();

                                             
												  
												


												  ?>
												  
												  
												  <div class="col-12" style="padding:10px;">
												 <center><h1> User Account update </h1> </center>

		<br><br>									
												  
	<table class="table table-borderless">
<tbody>
    <tr>
	<form method="post" action="accedit.php">
      <td><font>name </font></td><td><input type="text" name="name" value="<?php echo $rowcomp['Name'] ; ?>" ></td>
	  <td><font>Address </font></td><td><textarea col=5 name="add"><?php echo $rowcomp['Address'] ; ?></textarea></td></tr>
       <tr><td><font> City </font></td><td><input type="text" name="city" value="<?php echo $rowcomp['City'] ; ?>" ></td>
    <td><font> District </font></td> <td><input type="text" name="da" value="<?php echo $rowcomp['District'] ; ?>" ></td>
     <td> <font> Pincode</font> </td><td><input type="text" name="pin" value="<?php echo $rowcomp['Pincode'] ; ?>" ></td></tr>
	 <tr>
     <td> <font> Phone </font> </td><td><input type="text" name="mno" value="<?php echo $rowcomp['Phone'] ; ?>" ></td>
	 <td> <font> password </font> </td><td><input type="text" name="pass" value="<?php echo $rowcomp['pass'] ; ?>" ></td>
     <td> <font> Mother name  </font> </td><td><input type="text" name="mna" value="<?php echo $rowcomp['m_name'] ; ?>" ></td></tr>
	 <tr><td colspan="6" align="center"><input type="submit" name="submit" value="update" class="btn btn-primary mb-3">
	 <a href="useredit.php" class="btn btn-primary mb-3">Update Username and email </a></td></tr>
</form>
</tbody>
</table>

<?php
										if (isset($_POST['submit']))
											{
												$name=$_POST['name'];
											    $address=$_POST['add'];
												$city=$_POST['city'];
												$dis=$_POST['da'];
												$pincode=$_POST['pin'];
												$mobile=$_POST['mno'];
												$cpass=$_POST['pass'];
												$cmna=$_POST['mna'];
												
											
	                $result = $conn->prepare("update customer set Name='$name',Address='$address',City='$city',District='$dis',Pincode='$pincode',Phone='$mobile',pass='$cpass',m_name='$cmna' Where id=".$uid);
	                $result->execute();

											echo "<script>
											alert('Your record is updated successfully....!');
											window.location.href='accedit.php';
											</script>";
											}
											?>

<?php include("userfooter.php");
												  
												  
																							
												 
