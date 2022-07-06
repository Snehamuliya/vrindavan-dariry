<?php include("header.php");?>
<div class="main-content-inner">
<div class="row">
<!-- Dark table start -->
<div class="col-12 mt-5">
<div class="card">
<div class="card-body">
<h4 class="header-title">Cart list</h4>
<a href="Product.php"><button type="button" style="float:right;" class="btn btn-outline-primary mb-3">Add New</button></a>
<div class="data-tables datatable-dark">
<table id="dataTable3" class="text-center">
<thead class="text-capitalize">
<tr>
<td>Sr.No</td>
<th scope="col">ID</th>
<th scope="col">user Name</th>
<th scope="col">Product</th>												
<th scope="col">Price</th>
<th scope="col">quantity</th>
<th scope="col">price</th>
<th scope="col">Status</th>
<th scope="col">Date</th>
<th scope="col">Bill no</th>
<th scope="col">Action</th>

</tr>
</thead>
<tbody>
<?php

$result=$conn->prepare("select * from cart_bil order by id asc");
$result->execute();
for($i=0;$row=$result->fetch();$i++)
{
	?>
	<tr><td> <?php echo $i+1 ?> </td>
	<td> <?php echo $row['id'] ?> </td>


	<td><?php 
                                                      if($row['cus_id']>0)
                                                {

                                                $resultcom = $conn->prepare("SELECT * From customer where id=".$row['cus_id']."");
                                                $resultcom->execute();
                                                $rowcomp = $resultcom->fetch();

                                                  echo $rowcomp['Name'] ;

                                                }?></td>

   
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
	<td> <?php echo $row['cstatus'] ?> </td>
	<td> <?php echo $row['ca_date'] ?> </td>
	<td> <?php echo $row['bil_no'] ?> </td>
    <td> <a href="prodEdit.php?ID=<?php echo $row['id']; ?>"><i class="ti-pencil"></i></a>
     <i class="ti-trash" onclick="myFunction(<?php echo $row['id']; ?>);"></i>
</td></tr>
<?php
}
?>

<script>
function myFunction(delid) {
var txt;
if (confirm("Do you want to Delete this record!")) {
txt = delid;
window.location.href="prodel.php?id="+ txt;
} else {
txt = "You pressed Cancel!";
}
//alert (txt);


//document.getElementById("delid").value = txt;
}

</script>

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