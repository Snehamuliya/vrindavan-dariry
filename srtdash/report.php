<?php include("header.php");?>
 <div class="main-content-inner">
 <div class="row">
 <!-- Dark table start -->
 <div class="col-12 mt-5">
 <div class="card">
 <div class="card-body">
 <h4 class="header-title">Status Report</h4>
 <form action="report.php" method="POST">
<div class="form-row">
<div class="col-md-3 
mb-3">
 <label for="validationCustom01">Employee Name<span class="star" 
style="color: red">*</span> </label>
 <select class="form-control col-md-6" name="employee_id">
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
mb-3">
 <label for="validationCustom01">Project Name<span class="star" style="color: 
red">*</span> </label>
 <select class="form-control col-md-6" name="project_id">
 <option value="0">Select</option>
 <?php
 $result = $conn->prepare("SELECT * From  category");
 $result->execute();
 for($i=0; $row = $result->fetch(); $i++)
 {
 echo "<option value='". $row['id'] ."'>" .$row['Category'] ."</option>"; }
 ?>
 </select>
 </div>
 <div class="col-md-3 mb-3">
 <label for="validationCustom01">Status<span class="star" style="color: 
red">*</span></label>
 <select class="form-control col-md-6" name="status">
 <option value="">Select</option>
 <?php
 $result = $conn->prepare("SELECT distinct subcategory From subcategory");
 $result->execute();
 for($i=0; $row = $result->fetch(); $i++)
 {
 echo "<option value='". $row['subcategory'] ."'>" .$row['subcategory'] ."</option>"; }
 ?>
 </select>
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
 <th scope="col" class="sorting_desc">Employee Name</th>
 <th scope="col">Project Name</th>
 <th scope="col">Allocation Date</th>
 <th scope="col">Start Date</th>
 <th scope="col">End Date</th>
 <th scope="col">Hours</th>.
 <th scope="col">Status</th>
 </tr>
 </thead>
 <tbody>
  <?php
 if (isset($_POST['submit'])) 
 
 {
 $employee_id=$_POST['employee_id'];
 $project_id=$_POST['project_id'];
 $status=$_POST['status'];
 $str1 ="";
 $str2 ="";
 $str3 ="";
 if($project_id>0)
 {
 $str1 = " and project_id=".$project_id."";
 }
 if($employee_id>0)
 {
 $str2 = " and employee_id=".$employee_id."";
 }
 if($status!="")
 {
 $str3 = " and status='".$status."'";
 }
 $result = $conn->prepare("SELECT * FROM task_detail where date !='' " . 
$str1 . $str2 . $str3 ." order by date desc");
 // $txt= "SELECT * FROM task_detail where status !='cancel' " . $str1 . $str2 
. $str3 ." order by date desc";
 // echo $txt;
 }
 else
 {
 $result = $conn->prepare("SELECT * FROM task_detail ORDER BY date 
desc");
 }
 
 
 $result->execute();
 
 for($i=0; $row = $result->fetch(); $i++){
 
 
 ?>
 </td>
 <td><?php echo $i+1; ?></td>
 
 
 <td><?php 
 if($row['employee_id']>0)
 {
 $resultcom = $conn->prepare("SELECT * From material where 
id=".$row['employee_id']."");
 $resultcom->execute();
 $rowcomp = $resultcom->fetch();
 echo $rowcomp['name'] ;
 }?>
 </td>

 <td><?php echo $row['date']; ?></td>
 <td><?php echo $row['name']; ?></td>
 <td><?php echo $row['weight']; ?></td>
 <td><?php echo $row['unit']; ?></td>
 <td><?php echo $row['price']; ?></td>
 
 .
 </tr>

 
 
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