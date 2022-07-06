<!--PurchaseList.php -->
<?php include("header.php");?>
 <div class="main-content-inner">
 <div class="row">
 <!-- Dark table start -->
 <div class="col-12 mt-5">
 <div class="card">
 <div class="card-body">
 <h4 class="header-title">Purchase List</h4>
 <a href="PurchaseMaster.php"><button type="button" style="float:right;" class="btn 
btn-outline-primary mb-3">Add New</button></a>
 <div class="data-tables datatable-dark">
 <table id="dataTable3" class="text-center">
 <thead class="text-capitalize">
 <tr>
 <th> Sr.No </th>
 <th scope="col" class="sorting_desc">ID</th>
 <th scope="col">Supplier Name</th>
 <th scope="col">Date</th>
 
 <th scope="col">Grand Total</th>
 <th scope="col">Payment</th>
 <th scope="col">Actions</th>
 
 </tr>
 </thead>
 <tbody>
 <?php
 $result = $conn->prepare("SELECT * FROM purchase_master ORDER BY id desc");
 $result->execute();
 
 for($i=0; $row = $result->fetch(); $i++){
 
 
 ?>
 <tr>
 <td><?php echo $i+1; ?></td>
 <th scope="row"><?php echo $row['id']; ?> </th>
 <td><?php 
 if($row['supplier_id']>0)
 {
 $resultcom = $conn->prepare("SELECT * From supplier where 
id=".$row['supplier_id']."");
 $resultcom->execute();
 $rowcomp = $resultcom->fetch();
 echo $rowcomp['Name'] ;
 }?></td>
 <td><?php echo date("d-m-Y", strtotime($row['date'])); ?></td>
 <td><?php echo $row['grandtotalmaster']; ?></td>
 <td><?php echo $row['payment']; ?></td>
 
    <td> <a href="PurchaseEdit.php?ID=<?php echo $row['id']; ?>"><i class="ti-pencil"></i></a>
 <i class="ti-trash" onclick="myFunction(<?php echo $row['id']; ?>);"></i>
 
 </td>
 </tr>
 <?php }?>
 
 
<script>
function myFunction(delid) {
 var txt;
 if (confirm("Do you want to Delete this record!")) {
 txt = delid;
 window.location.href="PurchaseDelete.php?id="+ txt;
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
<?php include("footer.php");?>