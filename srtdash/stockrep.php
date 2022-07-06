<?php include("header.php");?>
 <div class="main-content-inner">
 <div class="row">
 <!-- Dark table start -->
 <div class="col-12 mt-5">
 <div class="card">
 <div class="card-body">
 <h4 class="header-title">Stock Report</h4>
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
<td>Sr.No</td>
<td scope="col">Actual stock </td>
<th scope="col">product_id</th>

</tr>
 </thead>
 <tbody>

<?php

	$result=$conn->prepare("select * from stock_det order by id asc");
$result->execute();
for($i=0;$row=$result->fetch();$i++)
{

	?>
	<tr><td> <?php echo $i+1 ?> </td>

	<td> <?php echo $row['stock'] ?> </td>
 <td><?php 
 if($row['product_id']>0)
 {
 $resultcom = $conn->prepare("SELECT * From product where 
id=".$row['product_id']."");
 $resultcom->execute();
 $rowcomp = $resultcom->fetch();
 echo $rowcomp['name'] ;
 }?></td>	


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