
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


<?php
                                                $resultcom = $conn->prepare("SELECT * From customer where id=".$uid);
                                                $resultcom->execute();
                                                $rowcomp = $resultcom->fetch();

                                             
												  
												


												  ?>
												  
												  
												  <div class="col-12" style="padding:10px;">
												 <center><h1> User details </h1> </center>

		<br><br>									
												  
	<table class="table table-bordered">
  <thead >
    <tr>
      <th scope="col">Sr no</th>
      <th scope="col">Customer name </th>
      <th scope="col">Address</th>
	  <th scope="col">City</th>
	  <th scope="col">District</th>
	  <th scope="col">Pincode</th>
	  <th scope="col">Email</th>
      <th scope="col">Phone</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $rowcomp['Name'] ; ?></td>
	  <td><?php echo $rowcomp['Address'] ; ?></td>
      <td><?php echo $rowcomp['City'] ; ?></td>
      <td><?php echo $rowcomp['District'] ; ?></td>
      <td><?php echo $rowcomp['Pincode'] ; ?></td>
	  <td><?php echo $rowcomp['Email'] ; ?></td>
      <td><?php echo $rowcomp['Phone'] ; ?></td>
    </tr>

  </tbody>
</table>

<br><br>

<?php include("userfooter.php");
												  
												  
																							
												 
