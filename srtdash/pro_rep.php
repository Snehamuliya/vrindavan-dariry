<?php include("header.php");?>
 <div class="main-content-inner">
 <div class="row">
 <!-- Dark table start -->
 <div class="col-12 mt-5">
 <div class="card">
 <div class="card-body">
 <h4 class="header-title">Product Report</h4>
 <form action="pro_rep.php" method="POST">

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
<th scope="col">product information</th>
<th scope="col">life</th>
<th scope="col">used matarial</th>
<th scope="col">Packing</th>
<th scope="col">Price</th>
 </thead>
 <tbody>

<?php

	$result=$conn->prepare("select * from prod1 order by id asc");
$result->execute();
for($i=0;$row=$result->fetch();$i++)
{

	?>
	<tr><td> <?php echo $i+1 ?> </td>
	<td> <?php echo $row['id'] ?> </td>
	<td> <?php echo $row['name'] ?> </td>
	<td> <?php echo $row['information'] ?> </td>
	<td> <?php echo $row['life'] ?> </td>
	<td> <?php echo $row['matrial'] ?> </td>
	<td> <?php echo $row['pack'] ?> </td>
	<td> <?php echo $row['price'] ?> </td>
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