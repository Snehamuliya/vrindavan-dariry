<?php include("header.php");?>
<div class="main-content-inner">
<div class="row">
<!-- Dark table start -->
<div class="col-12 mt-5">
<div class="card">
<div class="card-body">
<h4 class="header-title">Bill list</h4>
<a href="Product.php"><button type="button" style="float:right;" class="btn btn-outline-primary mb-3">Add New</button></a>
<div class="data-tables datatable-dark">
<table id="dataTable3" class="text-center">
<thead class="text-capitalize">
<tr>
<td>Sr.No</td>
<th scope="col">ID</th>
<th scope="col">user Name</th>												
<th scope="col">Address</th>
<th scope="col">District</th>
<th scope="col">Date</th>
<th scope="col">Email</th>
<th scope="col">Phone</th>
<th scope="col">Status</th>
<th scope="col">Payment mode</th>
<th scope="col">Bill no</th>
<th scope="col">total</th>
<th scope="col">ship charges</th>
<th scope="col">total amount</th>
<th scope="col">del date</th>
<th scope="col">Action</th>

</tr>
</thead>
<tbody>
<?php

$result=$conn->prepare("select * from final order by id asc");
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

   

												

	<td> <?php echo $row['address'] ?> </td>
	<td> <?php echo $row['district'] ?> </td>
	<td> <?php echo $row['fdate'] ?> </td>
	<td> <?php echo $row['email'] ?> </td>												
	<td> <?php echo $row['phone'] ?> </td>
	<td> <?php echo $row['status'] ?> </td>
	<td> <?php echo $row['pay'] ?> </td>
	<td> <?php echo $row['bil'] ?> </td>
	<td> <?php echo $row['total'] ?> </td>
	<td> <?php echo $row['ship_cha'] ?> </td>
	<td> <?php echo $row['ship'] ?> </td>
	<td> <?php echo $row['del_date'] ?> </td>
    <td> <a href="billEdit.php?ID=<?php echo $row['id']; ?>"><i class="ti-pencil"></i></a>
	     <a><i class="ti-trash" onclick="myFunction(<?php echo $row['id']; ?>);"></i>
    
</td></tr>
<?php
}
?>

<script>
function myFunction(delid) {
var txt;
if (confirm("Do you want to Delete this record!")) {
txt = delid;
window.location.href="billDel.php?id="+ txt;
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