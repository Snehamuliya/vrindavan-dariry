<?php include("header.php");?>
 <div class="main-content-inner">
 <div class="row">
 <!-- Dark table start -->
 <div class="col-12 mt-5">
 <div class="card">
 <div class="card-body">
 <h4 class="header-title">Material Report</h4>
 <form action="mat_rep.php" method="POST">
<div class="form-row">

  <div class="form-group">
    <label for="exampleInputPassword1">start date</label>
    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="id" name="s_da">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">end date</label>
    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="id" name="e_da">
  </div>
 </div>
<div class="col-md-3 
mb-3" style="padding-top:36px;">
 
<button type="submit" class="btn btn-danger" id="submit" name="submit">Search</button>
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
 <th scope="col">Suppliear id</th>
 <th scope="col">Material Name</th>
 <th scope="col">Date</th>
 <th scope="col">Weight</th>
 <th scope="col">Unit</th>
 <th scope="col">Price</th></tr>
 </thead>
 <tbody>
<?php
if (isset($_POST['submit']))
{
$start=$_POST['s_da'];
$end=$_POST['e_da'];

$result=$conn->prepare("select * from material where date between '$start' and '$end' order by date asc");
$result->execute();
for($i=0;$row=$result->fetch();$i++)
{
	?>
	<tr><td> <?php echo $i+1 ?> </td>
	<td> <?php echo $row['id'] ?> </td>
	<td><?php 
                                                      if($row['supplier_id']>0)
                                                {

                                                $resultcom = $conn->prepare("SELECT * From supplier where id=".$row['supplier_id']."");
                                                $resultcom->execute();
                                                $rowcomp = $resultcom->fetch();

                                                  echo $rowcomp['Name'] ;

                                                }?></td>
	<td> <?php echo $row['name'] ?> </td>
	<td> <?php echo $row['date'] ?> </td>
	<td> <?php echo $row['weight'] ?> </td>
	<td> <?php echo $row['unit'] ?> </td>
	<td> <?php echo $row['price'] ?> </td>
</tr>
<?php
}
}
else if(isset($_POST['submit'])== null)
{
	$result=$conn->prepare("select * from material order by id asc");
$result->execute();
for($i=0;$row=$result->fetch();$i++)
{

	?>
	<tr><td> <?php echo $i+1 ?> </td>
	<td> <?php echo $row['id'] ?> </td>
	<td><?php 
                                                      if($row['supplier_id']>0)
                                                {

                                                $resultcom = $conn->prepare("SELECT * From supplier where id=".$row['supplier_id']."");
                                                $resultcom->execute();
                                                $rowcomp = $resultcom->fetch();

                                                  echo $rowcomp['Name'] ;

                                                }?></td>
	<td> <?php echo $row['name'] ?> </td>
    <td> <?php echo $row['date'] ?> </td>
	<td> <?php echo $row['weight'] ?> </td>
	<td> <?php echo $row['unit'] ?> </td>
	<td> <?php echo $row['price'] ?> </td>
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
<?php include("footer.php");?>