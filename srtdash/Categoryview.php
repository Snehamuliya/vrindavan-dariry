<?php include("header.php");?>
<div class="main-content-inner">
<div class="row">
<!-- Dark table start -->
<div class="col-12 mt-5">
<div class="card">
<div class="card-body">
<h4 class="header-title">Category List</h4>
<a href="Category.php"><button type="button" style="float:right;" class="btn btn-outline-primary mb-3">Add New</button></a>
<div class="data-tables datatable-dark">
<table id="dataTable3" class="text-center">
<thead class="text-capitalize">
<tr>
<td>Sr.No</td>
<th scope="col">ID</th>
<th scope="col">Category</th>
</tr>
</thead>
<tbody>
<?php

$result=$conn->prepare("select * from category order by id asc");
$result->execute();
for($i=0;$row=$result->fetch();$i++)
{
	?>
	<tr><td> <?php echo $i+1 ?> </td>
	<td> <?php echo $row['id'] ?> </td>
	<td> <?php echo $row['Category'] ?> </td>
	<td>
     <a href="catEdit.php?ID=<?php echo $row['id']; ?>"><i class="ti-pencil"></i></a>
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
window.location.href="CatDelete.php?id="+ txt;
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