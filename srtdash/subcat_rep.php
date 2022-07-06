<?php include("header.php");?>
 <div class="main-content-inner">
 <div class="row">
 <!-- Dark table start -->
 <div class="col-12 mt-5">
 <div class="card">
 <div class="card-body">
 <h4 class="header-title">Sub-Category Report</h4>
 <form action="subcat_rep.php" method="POST">

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
 <th scope="col">Category</th>
 <th scope="col">Sub-Category</th>

</tr>
 </thead>
 <tbody>

<?php


	$result=$conn->prepare("select * from subcategory order by id asc");
$result->execute();
for($i=0;$row=$result->fetch();$i++)
{

	?>
	<tr><td> <?php echo $i+1 ?> </td>
	<td> <?php echo $row['id'] ?> </td>
	<td><?php 
                                                      if($row['category_id']>0)
                                                {

                                                $resultcom = $conn->prepare("SELECT * From category where id=".$row['category_id']."");
                                                $resultcom->execute();
                                                $rowcomp = $resultcom->fetch();

                                                  echo $rowcomp['Category'] ;

                                                }?></td>
	<td> <?php echo $row['subcategory'] ?> </td>


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