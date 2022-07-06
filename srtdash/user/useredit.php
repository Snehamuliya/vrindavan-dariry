
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
  width: 75%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 2px;
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
												 <center><h1> Username and Email update </h1> </center>

		<br><br>									
												  
	<table class="table table-bordered" style="width:60%;margin-left:240px;">
<tbody>
    <tr>
	<form method="post" action="useredit.php">
      <td><font>name </font></td><td><input type="text" name="name" value="<?php echo $rowcomp['user'] ; ?>" ></td>
	    <td><font>email </font></td><td><input type="text" name="mail" value="<?php echo $rowcomp['Email'] ; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" ></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="submit" value="Update Username" class="btn btn-primary mb-3"></td>
<td colspan="2" align="center"><input type="submit" name="email" value="Update email" class="btn btn-primary mb-3"></td></tr>
</form>
</tbody>
</table>
<br>
<?php
										if (isset($_POST['submit']))
											{
												$name=$_POST['name'];
												//$cmail=$_POST['mail'];
$result=$conn->prepare("SELECT COUNT(id) AS total FROM customer WHERE user='" . $_POST["name"] ."'");
$result->execute();
$row = $result->fetch();
$count = $row['total'];

/*$result1=$conn->prepare("SELECT COUNT(id) AS total FROM customer WHERE Email='" . $_POST["mail"] ."'");
$result1->execute();
$row = $result1->fetch();
$ecount = $row['total'];*/

											if($count>0)
											{
													
											echo "<script>
                          alert('Username allready exist.... Please enter another Username');
                           window.location.href='useredit.php';
                             </script>";	
												
											}
											else	
											{	
	                $result = $conn->prepare("update customer set user='$name' Where id=".$uid);
	                $result->execute();

											echo "<script>
											alert('Your record is updated successfully....!');
											window.location.href='useredit.php';
											</script>";
											}
											}
											?>
											
											<?php
											if (isset($_POST['email']))
											{
												$cmail=$_POST['mail'];
												
$result1=$conn->prepare("SELECT COUNT(id) AS total FROM customer WHERE Email='" . $_POST["mail"] ."'");
$result1->execute();
$row = $result1->fetch();
$ecount = $row['total'];
												 if ($ecount>0)
													{
													
											echo "<script>
                          alert('Email allready exist.... Please enter another Email');
                           window.location.href='useredit.php';
                             </script>";	
												
											}
											else	
											{	
	                $result = $conn->prepare("update customer set Email='$cmail' Where id=".$uid);
	                $result->execute();

											echo "<script>
											alert('Your record is updated successfully....!');
											window.location.href='useredit.php';
											</script>";
											}
											}
											?>

<?php include("userfooter.php"); ?>
												  
												  
																							
												 
