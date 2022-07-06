<?php include("header.php");?>
 <div class="main-content-inner">
 <div class="row">
 <!-- Dark table start -->
 <div class="col-12 mt-5">
 <div class="card">
 <div class="card-body">
 <h4 class="header-title">Status Report</h4>
 <form method="post" action="demoreport.php">
<div class="form-row">
<div class="col-md-3 mb-3">

  <div class="form-group">
    <label for="exampleInputPassword1">id</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="id" name="get_id">
  </div>

 </div> 

 <div class="col-md-3 
mb-3">
 <label for="validationCustom01">Employee Name<span class="star" 
style="color: red">*</span> </label>
 <select class="form-control col-md-6" name="sup_id">
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
 
<div class="col-md-3 
mb-3" style="padding-top:36px;">
 
<button type="submit" class="btn btn-danger" id="submit" name="submit">Search</button>
<button 
type="button" onclick="window.print();" class="btn btn-outline-primary">Print</button>
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
 <th scope="col">Price</th>


 </tr>
 </thead>
   <tbody>

<tbody>
<?php
if (isset($_POST['submit']))
{
$id=$_POST['get_id'];
$sid=$_POST['sup_id'];
$result=$conn->prepare("select * from material where id='$id' or supplier_id='$sid'");
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
else
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