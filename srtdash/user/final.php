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
 <?php $result3 = $conn->prepare("SELECT COUNT(id) AS total FROM cart_bil where sno=1 and cstatus='add' and cus_id=".$uid);
$result3->execute();
$row = $result3->fetch();
$s_count = $row['total'];

?>
<div class="container">
<h1>Bill details </h1>
<!-- main content area end -->
<div class="table-responsive-sm">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Product Name</th>
      <th scope="col">User name</th>
      <th scope="col">Price</th>
	  <th scope="col">Quantity</th>
	  <th scope="col">total</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>
    <?php

$result = $conn->prepare("SELECT * From cart where cstatus='add' and cus_id=".$uid);
$result->execute();
for($i=0;$row=$result->fetch();$i++)
{

	?>
	    <tr>
		<td> <?php echo $i+1 ?> </td>
			<td><?php 
                                                      if($row['prod_id']>0)
                                                {

                                                $resultcom = $conn->prepare("SELECT * From Prod1 where id=".$row['prod_id']."");
                                                $resultcom->execute();
                                                $rowcomp = $resultcom->fetch();

                                                  echo $rowcomp['name'] ;


                                                }?></td>
												
				<td><?php 
                                                      if($row['cus_id']>0)
                                                {

                                                $resultcom = $conn->prepare("SELECT * From customer where id=".$row['cus_id']."");
                                                $resultcom->execute();
                                                $rowcomp = $resultcom->fetch();

                                                  echo $rowcomp['Name'] ;
												  $cname=$row['cus_id'];

                                                }?></td>
		
	   <td><?php $Pri=$row['price']; echo $row['price'] ?></td>
    <td><?php echo $row['quantity'] ?></td>
	    <td><?php echo $row['total'] ?></td>	
		     <td><button class="btn btn-outline-primary mb-3" onclick="myFunction(<?php echo $row['id']; ?>);">Remove</button></td>
    </tr> 
	<script>
function myFunction(delid) {
var txt;
if (confirm("Do you want to Delete this record!")) {
txt = delid;
window.location.href="cartdel.php?id="+ txt;
} else {
txt = "You pressed Cancel!";
}

}

</script>
<?php
}
?>	
  </tbody>
</table>

	<?php 

$result1 = $conn->prepare("SELECT SUM(total) AS count FROM cart where cstatus='add' and cus_id=".$uid);
$result1->execute();

//$res = $db->query($qry);

$total = 0;
$row = $result1->fetch();

//$rec = $db->fetchAssoc($res);
$total = $row['count'];
	 ?>
<font style="font-size:20px;"><b>Amount :-<?php echo "Total: " . $total ?></b></font>
</div>

<!---------------------------------------------------------------------------------------------->






<!---------------------------------------------------------------------------------------------->
  <div class="container-fluid">
<div class ="row">
         <div class = "col-sm-6" style="background-color:white";>
<br><br>
																		
											  <center><h1 style="font-family:Tempus Sans ITC;"> Shipping details</h1></center><br>
		   <table align=center>
		   <form method="post" action="final.php">
	    <tr style="height:40px;">
	         <td>&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">Delievry Address :-</font>&nbsp;&nbsp;</td>
			 <td><textarea class="form-control" name="add"/></textarea>
              
		</tr>
		
		<tr><td>&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">District:-</font></td>
				<td><select class="form-control" name="dis">
                                                <option>Select</option>
                                                <option>Satara</option>
                                                <option>Pune</option>
												<option>Ratanagiri</option>
                                                <option>Osmanabad</option>
												<option>Sangli</option>
                                                <option>kolhapur</option>
												<option>sindhudurg</option>
                                                <option>Raigad</option>
												<option>Solapur</option>
												<option>Latur</option>
                                                <option>Beed</option>
												<option>Ahamadnagar</option>
                                                <option>Thane</option>
												 <option>Mumbai</option>
                                                <option>Palghar</option>
												<option>Nashik</option>
                                                <option>Nanded</option>
												<option>Parbhani</option>
                                                <option>Jalana</option>
												<option>Aurangabad</option>
                                                <option>Hingoli</option>
												<option>Washim</option>
												<option>Jalgauon</option>
                                                <option>Dhule</option>
												<option>Nandurbar</option>
                                                <option>Buldhana</option>
												<option>Akola</option>
												<option>Yavatmal</option>
                                                <option>Amaravati</option>
												<option>Wardha</option>
												<option>Chandrapur</option>
                                                <option>Nagpur</option>
												<option>Gadchiroli</option>
                                                <option>Bandra</option>
												<option>Gondia</option>
												
                                            </select></td></tr>
		
		<tr><td></td></tr>
		
		
		<tr><td></td></tr>
	    <tr style="height:40px;width:100px;">
		    <td>&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">E-mail :-</font>&nbsp;&nbsp; </td>
			<td><input class="form-control" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" /></td>
		</tr>
				<tr><td></td></tr>
		<tr><td></td></tr>
	    <tr style="height:40px;width:150px;">
		    <td>&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">Mobile-no :-</font></td>
			<td><input class="form-control" type="text" name="no" pattern="[0-9]{10}" maxlength="10"/></td>
		</tr>
					 	<tr><td></td></tr><tr><td></td></tr>
						<tr><td>Payment Type :-</td><td><select class="form-control" name="pay">
                                                <option value="cash on delivery">Cash on delivery</option>
                                             
                                                
                                            </select> </td>
											</tr>
											<tr><td></td></tr><tr><td></td></tr>
						<tr>
			<td colspan="2"><center><input type="submit" class="btn btn-primary mb-3" id="submit" name="submit"></center></td>
		</tr>		
				

	  </table>
	 </form>
        
			 	<?php
										 if (isset($_POST['submit']))
										{
											$add=$_POST['add'];
                                            $cdate=date("Y/m/d");
											$dist=$_POST['dis'];
											$mail=$_POST['email'];
											$pno=$_POST['no'];
											$cash=$_POST['pay'];
									
											
											
					if ($s_count==0)
										{
											
																				
											$result=$conn->prepare("insert into final(cus_id, address, fdate, district, email, phone, total, pay, status ) values('$cname','$add','$cdate','$dist','$mail','$pno','$total','$cash', 'pending')");
											
											$result->execute();
											
																					
$result1 = $conn->prepare("update cart set cstatus='pending' where cstatus='add' and cus_id=".$uid);
                                           $result1->execute();
											
$result1 = $conn->prepare("update cart_bil set cstatus='pending' where cstatus='add' and cus_id=".$uid);
                                           $result1->execute();					
											
/*--------------*/
$result3 = $conn->prepare("SELECT max(id) AS total FROM final");
$result3->execute();
//$res = $db->query($qry);
$row = $result3->fetch();

//$rec = $db->fetchAssoc($res);
$f_count = $row['total'];


$result4 = $conn->prepare("update cart_bil set bil_no='$f_count' where cstatus='pending' and cus_id=".$uid);
                                           $result4->execute();	
$result5 = $conn->prepare("update final set bil='$f_count' where status='pending' and cus_id=".$uid);
                                           $result5->execute();	
										 											
											
											echo "<script>
                          alert('Your record is inserted successfully...!');
                           window.location.href='bil.php';
                             </script>";
										}						
											
											
											
											
											
											if($dist=="Gadchiroli" || $dist=="Gondia" || $dist=="Bandra" || $dist=="Nagpur" || $dist=="Chandrapur" || $dist=="Wardha" || $dist=="Amaravati" || $dist=="Yavatmal" || $dist=="Akola" || $dist=="Buldhana" || $dist=="Nandurbar" || $dist=="Dhule" || $dist=="Jalgauon" || $dist=="Washim" || $dist=="Hingoli" || $dist=="Aurangabad" || $dist=="Jalana" || $dist=="Parbhani" || $dist=="Nanded" || $dist=="Nashik" || $dist=="Palghar" || $dist=="Beed" || $dist=="Latur" && $s_count>=1)
																																																											
											{
												echo "<script>
                          alert('Sorry some selected products not come to your area...!');
                           window.location.href='final.php';
                             </script>";
											}
											else
											{
											
										
											
																				
											$result=$conn->prepare("insert into final(cus_id, address, fdate, district, email, phone, total, pay, status ) values('$cname','$add','$cdate','$dist','$mail','$pno','$total','$cash', 'pending')");
											
											$result->execute();
											
																					
$result1 = $conn->prepare("update cart set cstatus='pending' where cstatus='add' and cus_id=".$uid);
                                           $result1->execute();
											
$result1 = $conn->prepare("update cart_bil set cstatus='pending' where cstatus='add' and cus_id=".$uid);
                                           $result1->execute();					
											
/*--------------*/
$result3 = $conn->prepare("SELECT max(id) AS total FROM final");
$result3->execute();
//$res = $db->query($qry);
$row = $result3->fetch();

//$rec = $db->fetchAssoc($res);
$f_count = $row['total'];


$result4 = $conn->prepare("update cart_bil set bil_no='$f_count' where cstatus='pending' and cus_id=".$uid);
                                           $result4->execute();	
$result5 = $conn->prepare("update final set bil='$f_count' where status='pending' and cus_id=".$uid);
                                           $result5->execute();	

										   
											
											echo "<script>
                          alert('Your order placed successfully...!');
                           window.location.href='bil_email.php';
                             </script>";
										}	
												
											}

										/*--------------*/
                                      
										
										?>
		
 </div>
         <div class = "col-sm-6"><img src="../delivry.jpg" class="img-fluid"></img></div>
      </div>
	  
<br><br>
</div>

                          

</body>
</html>
<?php include("userfooter.php") ?>
