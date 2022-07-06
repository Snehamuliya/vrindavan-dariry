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
 
 <h2 align="center"> Bill Details </h2>
  <div class="data-tables datatable-dark">
 <table id="dataTable3"  class="table table-hover">
<thead class="text-capitalize">
<tr>

<th scope="col">Bill no</th>
<th scope="col">Customer id</th>
<th scope="col">Address</th>
<th scope="col">Status</th>
<th scope="col">Payment mode</th>
<th scope="col">Price</th>
<th scope="col">Shipping charges</th>
<th scope="col">final amount</th>
</tr>
</thead>
<tbody>
<?php
										
										$id=$_GET["ID"];
											$result = $conn->prepare("SELECT * From final where id=".$id);
		                                   $result->execute();
		                                  $row = $result->fetch();
                                           ?>
										   
											<tr><td> <?php echo $row['bil'] ?> </td>
		<td><?php 
                                                      if($row['cus_id']>0)
                                                {

                                                $resultcom = $conn->prepare("SELECT * From customer where id=".$row['cus_id']."");
                                                $resultcom->execute();
                                                $rowcomp = $resultcom->fetch();

                                                  echo $rowcomp['Name'] ;

                                                }?></td>

	<td> <?php echo $row['address'] ?> </td>
	<td> <?php echo $row['status'] ?> </td>
	<td> <?php echo $row['pay'] ?> </td> 
	<td> <?php echo $row['total'] ?> </td>
	<td> <?php echo $row['ship_cha'] ?> </td>
	<td> <?php echo $row['ship'] ?> </td></tr>
	</tbody>
</table>
</div>
<br><br>
<h2 align="center">product details</h2>										   
<div class="data-tables datatable-dark">
 <table id="dataTable3"  class="table table-hover">
<thead class="text-capitalize">
<tr>

<td>Sr.No</td>

<th scope="col">Customer id</th>
<th scope="col">Product id</th>
<th scope="col">Price</th>
<th scope="col">Quantity</th>
<th scope="col">Total</th>
<th scope="col">Date</th>
<th scope="col">Bill no</th>
<th scope="col">Status</th>
</tr>
</thead>
<tbody>
 <?php

$result=$conn->prepare("select * From cart_bil where bil_no=".$id);
$result->execute();
for($i=0;$row=$result->fetch();$i++)
{
	?>
	<tr><td> <?php echo $i+1 ?> </td>
	<td> <?php echo $row['cus_id'] ?> </td>
		<td><?php 
                                                      if($row['prod_id']>0)
                                                {

                                                $resultcom = $conn->prepare("SELECT * From prod1 where id=".$row['prod_id']."");
                                                $resultcom->execute();
                                                $rowcomp = $resultcom->fetch();

                                                  echo $rowcomp['name'] ;

                                                }?></td>
	<td> <?php echo $row['price'] ?> </td>
	<td> <?php echo $row['quantity'] ?> </td>
	<td> <?php echo $row['total'] ?> </td>
	<td> <?php echo $row['ca_date'] ?> </td>
	<td> <?php echo $row['bil_no'] ?> </td>
	<td> <?php echo $row['cstatus'] ?> </td>
</tr>
<?php
}
?>
</tbody>
</table>
<br>
<center><a href="my orders.php" class="btn btn-primary btn-sm">
                                Back
                            </a>
<button type="button" onclick="window.print();" class="btn btn-primary btn-sm">Print</button>							</center>
</div>