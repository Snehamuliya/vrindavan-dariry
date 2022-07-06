<?php include("header.php");?>
<div class="main-content-inner">
<div class="row">
<!-- Dark table start -->
<div class="col-12 mt-5">
<div class="card">
<div class="card-body">
<h4 class="header-title">Bill list</h4>
<a href="Product.php"><button type="button" style="float:right;" class="btn btn-outline-primary mb-3">Add New</button></a>
 <form action="mat_rep.php" method="POST">
<div class="form-row">

 
 </div>
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
<th scope="col">ship charges</th>
<th scope="col">total amount</th>
<th scope="col">delivary date</th>

</tr>
</thead>
<tbody>

<?php
if (isset($_POST['submit']))
{
$start=$_POST['s_da'];
$end=$_POST['e_da'];

$result=$conn->prepare("select * from final where fdate between '$start' and '$end' order by fdate asc");
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
	<td> <?php echo $row['ship_cha'] ?> </td>
	<td> <?php echo $row['ship'] ?> </td>
	<td> <?php echo $row['del_date'] ?> </td>
</tr>
<?php
}
}
else if(isset($_POST['submit'])== null)
{
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
	<td> <?php echo $row['ship_cha'] ?> </td>
	<td> <?php echo $row['ship'] ?> </td>
	<td> <?php echo $row['del_date'] ?> </td>
</tr>
<?php
}
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