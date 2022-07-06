<?php include("header.php");?>
 <div class="main-content-inner">
 <div class="row">
 <!-- Dark table start -->
 <div class="col-12 mt-5">
 <div class="card">
 <div class="card-body">
 <h4 class="header-title">Supplier Report</h4>
 <form action="sup_rep.php" method="POST">

<div class="col-md-3 
mb-3" style="padding-top:36px;">
 
<!--<a href="StatusReport.php" class="btn btn-outline-primary" id="submit">Show All </a>-->
<button type="button" onclick="window.print();" class="btn btn-outline-primary">Print</button>
 </div> 
 </div>
</form>
 <div class="data-tables datatable-dark">
 <table id="dataTable3" class="text-center">
 <thead class="text-capitalize">
 <tr>
 <th> Sr.No </th>
 <th scope="col" class="sorting_desc">id</th>
<th scope="col">Name</th>
<th scope="col">Address</th>
<th scope="col">City</th>
<th scope="col">District</th>
<th scope="col">Pincode</th>
<th scope="col">Email</th>
<th scope="col">Mobile</th>
 </thead>
 <tbody>

<?php

	$result=$conn->prepare("select * from supplier order by id asc");
$result->execute();
for($i=0;$row=$result->fetch();$i++)
{

	?>
	<tr><td> <?php echo $i+1 ?> </td>
	<td> <?php echo $row['id'] ?> </td>
	<td> <?php echo $row['Name'] ?> </td>
    <td> <?php echo $row['Address'] ?> </td>
	<td> <?php echo $row['City'] ?> </td>
	<td> <?php echo $row['District'] ?> </td>
	<td> <?php echo $row['Pincode'] ?> </td>
	<td> <?php echo $row['Email'] ?> </td>
	<td> <?php echo $row['Phone'] ?> </td>
</tr>
<?php
}
?>

</tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
 <!-- Dark table end -->
 
 
 </div>
 </div>
 </div>
 <!-- main content area end -->
<?php include("footer.php");?>