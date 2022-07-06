<?php include("header.php");?>
 <div class="main-content-inner">
 <div class="row">
 <!-- Dark table start -->
 <div class="col-12 mt-5">
 <div class="card">
 <div class="card-body">
 <h4 class="header-title">Company Report</h4>
 <form action="com_rep.php" method="POST">
<div class="form-row">


  <div class="col-md-3 
mb-3">
 <label for="validationCustom01">Supplier Name<span class="star" 
style="color: red">*</span> </label>
 <select class="form-control col-md-6" name="supName">
 <option value="0">Select</option>
 <?php
 $result = $conn->prepare("SELECT * From supplier");
 $result->execute();
 for($i=0; $row = $result->fetch(); $i++)
 {
 echo "<option value='". $row['id'] ."'>" .$row['Name'] ."</option>"; }
 ?>
 </select>
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
<th scope="col">Name</th>
<th scope="col">Address</th>
<th scope="col">City</th>
<th scope="col">District</th>
<th scope="col">Pincode</th>
<th scope="col">Email</th>
<th scope="col">Mobile</th>
<th scope="col">Supplier name</th>
<th scope="col">Suppliear phone</th>
 </thead>
 <tbody>
<?php
if (isset($_POST['submit']))
{

$sname=$_POST['supName'];

$result=$conn->prepare("select * from supplier where id='$sname'");
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
</tr>
<?php
}
}
else if(isset($_POST['submit'])== null)
{
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