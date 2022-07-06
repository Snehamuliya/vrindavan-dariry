<?php include("header.php");?>
<div class="main-content-inner">
<div class="row">
<!-- Dark table start -->
<div class="col-12 mt-5">
<div class="card">
<div class="card-body">
<h4 class="header-title">Done bill report</h4>
<button type="button" onclick="window.print();" class="btn btn-outline-primary">Print</button>
<div class="data-tables datatable-dark">
<table id="dataTable3" class="text-center">
<thead class="text-capitalize">
<tr>
<td>Sr.No</td>
<th scope="col">ID</th>
<th scope="col">User Name</th>
<th scope="col">Cart total</th>
<th scope="col">Address</th>
<th scope="col">Order date</th>
<th scope="col">Email</th>
<th scope="col">Total amount</th>
<th scope="col">Status</th>
<th scope="col">Delivery Date</th>
<th scope="col">Actions</th>
</tr>
</thead>
<tbody>
<?php

$result=$conn->prepare("SELECT * FROM final where status='done' order by id asc");
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
	<td> <?php echo $row['total'] ?> </td>
	<td> <?php echo $row['address'] ?> </td>
	<td> <?php echo $row['fdate'] ?> </td>
	<td> <?php echo $row['email'] ?> </td>
	<td> <?php echo $row['ship'] ?> </td>
	<td> <?php echo $row['status'] ?> </td>
	<td> <?php echo $row['del_date'] ?> </td>
    <td> <a href="companyedit.php?ID=<?php echo $row['id']; ?>"><i class="ti-pencil"></i></a>
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
window.location.href="compdel.php?id="+ txt;
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