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

 <h2 align="center">My orders</h2>
 
<div class="container">
 <div class="data-tables datatable-dark">
 <table id="dataTable3"  class="table table-hover">
<thead class="text-capitalize">
<tr>

<td>Sr.No</td>
<th scope="col">bill no</th>
<th scope="col">customer name</th>
<th scope="col">total</th>
<th scope="col">Address</th>
<th scope="col">mobile no</th>
<th scope="col">Status</th>
<th scope="col">Payment type</th>
<th scope="col">Delievary date</th>
</tr>
</thead>
<tbody>
 <?php

$result=$conn->prepare("select * From final where status='done' and cus_id=".$uid);
$result->execute();
for($i=0;$row=$result->fetch();$i++)
{
	?>
	<tr><td> <?php echo $i+1 ?> </td>
	<td> <?php echo $row['bil'] ?> </td>
		<td><?php 
                                                      if($row['cus_id']>0)
                                                {

                                                $resultcom = $conn->prepare("SELECT * From customer where id=".$row['cus_id']."");
                                                $resultcom->execute();
                                                $rowcomp = $resultcom->fetch();

                                                  echo $rowcomp['Name'] ;

                                                }?></td>
	<td> <?php echo $row['ship'] ?> </td>
	<td> <?php echo $row['address'] ?> </td>
	<td> <?php echo $row['phone'] ?> </td>
	<td> <?php echo $row['status'] ?> </td>
	<td> <?php echo $row['pay'] ?> </td>
	<td> <?php echo $row['del_date'] ?> </td>
		<td><a href="return_details.php?ID=<?php echo $row['bil']; ?>" class="btn btn-primary btn-sm">
                                Return
                            </a></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
</div>



<!------------------>

<h2 align="center"> My return orders </h2>
<div class="container">
 <div class="data-tables datatable-dark">
 <table id="dataTable3"  class="table table-hover">
<thead class="text-capitalize">
<tr>

<td>Sr.No</td>
<th scope="col">bill no</th>
<th scope="col">customer name</th>
<th scope="col">total</th>
<th scope="col">date</th>
<th scope="col">User return reason</th>

</tr>
</thead>
<tbody>
 <?php

$result=$conn->prepare("select * From p_return where c_id=".$uid);
$result->execute();
for($i=0;$row=$result->fetch();$i++)
{
	?>
	<tr><td> <?php echo $i+1 ?> </td>
	<td> <?php echo $row['b_id'] ?> </td>
		<td><?php 
                                                      if($row['c_id']>0)
                                                {

                                                $resultcom = $conn->prepare("SELECT * From customer where id=".$row['c_id']."");
                                                $resultcom->execute();
                                                $rowcomp = $resultcom->fetch();

                                                  echo $rowcomp['Name'] ;

                                                }?></td>
	<td> <?php echo $row['amount'] ?> </td>
	<td> <?php echo $row['rdate'] ?> </td>
	<td> <?php echo $row['reason'] ?> </td>

</tr>
<?php
}
?>
</tbody>
</table>
</div>
</div>

 <p align="Center">User should give return order within 2 days</p>

