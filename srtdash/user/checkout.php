<?php include("userheader.php");
if($username==true)
{
	
	
}
else
	
	{
		echo '<script>alert("please log in first to see this page!");</script>';
		echo "<script>window.location.href='login.php';</script>";
		
	}

?>      

<div class="row">
<!-- Dark table start -->
<div class="col-12 mt-5">
<div class="card">
<div class="card-body">
<h4 class="header-title">Material List</h4>
<a href="matarial.php"><button type="button" style="float:right;" class="btn btn-outline-primary mb-3">Add New</button></a>
<div class="data-tables datatable-dark">
<table id="dataTable3" class="text-center">
<thead class="text-capitalize">
<tr>
<td>Sr.No</td>
<th scope="col">ID</th>
<th scope="col">Product Name</th>
<th scope="col">User Name</th>
<th scope="col">Price</th>
<th scope="col">Quantity</th>
<th scope="col">total</th> 
<th scope="col">Action</th>

</tr>
</thead>
<tbody>


<?php

$result = $conn->prepare("SELECT * From cart where cstatus='notdone' and cus_id=".$uid);
$result->execute();
for($i=0;$row=$result->fetch();$i++)
{

	?>
	<tr><td> <?php echo $i+1 ?> </td>
	<td> <?php echo $row['id'] ?> </td>
	<td><?php 
                                                      if($row['prod_id']>0)
                                                {

                                                $resultcom = $conn->prepare("SELECT * From Prod1 where id=".$row['prod_id']."");
                                                $resultcom->execute();
                                                $rowcomp = $resultcom->fetch();

                                                  echo $rowcomp['name'] ;

                                                }?></td>
	
		<td><?php 
                                                      if($row['cus_id']>0)
                                                {

                                                $resultcom = $conn->prepare("SELECT * From customer where id=".$row['cus_id']."");
                                                $resultcom->execute();
                                                $rowcomp = $resultcom->fetch();

                                                  echo $rowcomp['Name'] ;

                                                }?></td>
												
	
    <td><?php echo $row['price'] ?></td>
    <td><?php echo $row['quantity'] ?></td>
	    <td><?php echo $row['total'] ?></td>
     <td><i class="ti-trash" onclick="myFunction(<?php echo $row['id']; ?>);"></i>
</td></tr>
<?php
}
?>

<?php 

$result1 = $conn->prepare("SELECT SUM(total) AS count FROM cart where cstatus='notdone' and cus_id=".$uid);
$result1->execute();

//$res = $db->query($qry);

$total = 0;
$row = $result1->fetch();

//$rec = $db->fetchAssoc($res);
$total = $row['count'];

echo "Total: " . $total . "\n";

?>

<script>
function myFunction(delid) {
var txt;
if (confirm("Do you want to Delete this record!")) {
txt = delid;
window.location.href="Matdel.php?id="+ txt;
} else {
txt = "You pressed Cancel!";
}
//alert (txt);


//document.getElementById("delid").value = txt;

}
  
  function calculate() {
        var myBox1 = document.getElementById('box1').value; 
        var myBox2 = document.getElementById('box2').value;
        var result = document.getElementById('result'); 
        var myResult = myBox1 * myBox2;
          document.getElementById('result').value = myResult;

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



      <?php include("userfooter.php");?>
	  