<?php include("header.php");?>
<div class="main-content-inner">
<div class="row">
<!-- Dark table start -->
<div class="col-12 mt-5">
<div class="card">
<div class="card-body">
<h4 class="header-title">Company List</h4>
<a href="CompanyAdd.php"><button type="button" style="float:right;" class="btn btn-outline-primary mb-3">Add New</button></a>
<div class="data-tables datatable-dark">
<table id="dataTable3" class="text-center">
<thead class="text-capitalize">
<tr>
<td>Sr.No</td>
<th scope="col">ID</th>
<th scope="col">Company Name</th>
<th scope="col">Company Address</th>
<th scope="col">City</th>
<th scope="col">District</th>
<th scope="col">Pincode</th>
<th scope="col">Email</th>
<th scope="col">Contact no</th>
<th scope="col">Supplier name</th>
<th scope="col">Supplier Mobile no</th>
<th scope="col">Actions</th>
</tr>
</thead>
<tbody>
<?php

$result=$conn->prepare("select * from company order by id asc");
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
	<td> <?php echo $row['Pname'] ?> </td>
	<td> <?php echo $row['Pmobile'] ?> </td>
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