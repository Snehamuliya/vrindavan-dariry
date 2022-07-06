<?php include("header.php");?>
<div class="main-content-inner">
<div class="row">
<!-- Dark table start -->
<div class="col-12 mt-5">
<div class="card">
<div class="card-body">
<h4 class="header-title">Purchase Return Report</h4>
<button type="button" onclick="window.print();" class="btn btn-outline-primary">Print</button>
<div class="data-tables datatable-dark">
<table id="dataTable3" class="text-center">
<thead class="text-capitalize">
<tr>
<td>Sr.No</td>
<th scope="col">PurchaseRet_id</th>
<th scope="col">product_id</th>
<th scope="col">quantity</th>
<th scope="col">price</th>
<th scope="col">amount</th>
<th scope="col">tax</th>
<th scope="col">taxamt</th>
<th scope="col">discount</th>
<th scope="col">discountamt</th>
<th scope="col">gst</th>
<th scope="col">gstamt</th>
<th scope="col">cess </th>
<th scope="col">cess amount</th>
<th scope="col">final amount</th>

</tr>
</thead>
<tbody>
<?php

$result=$conn->prepare("select * from purchase_return order by pur_ret_id asc");
$result->execute();
for($i=0;$row=$result->fetch();$i++)
{
	?>
	<tr><td> <?php echo $i+1 ?> </td>
	<td> <?php echo $row['pur_ret_id'] ?> </td>
	<td> <?php echo $row['product_id'] ?> </td> 
	<td> <?php echo $row['quantity'] ?> </td>
	<td> <?php echo $row['price'] ?> </td>	
	<td> <?php echo $row['amount'] ?> </td>
	<td> <?php echo $row['tax'] ?> </td>
	<td> <?php echo $row['taxamt'] ?> </td>
	<td> <?php echo $row['discount'] ?> </td>
	<td> <?php echo $row['discountamt'] ?> </td>
	<td> <?php echo $row['gst'] ?> </td>
	<td> <?php echo $row['gstamt'] ?> </td> 
	<td> <?php echo $row['cess'] ?> </td>
	<td> <?php echo $row['cessamt'] ?> </td>
	<td> <?php echo $row['finalamount'] ?> </td>

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







<?php include("Footer.php");?>