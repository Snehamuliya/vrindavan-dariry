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
<h2 align="center">cart details </h2>
<div class="container">
<!-- main content area end -->
<div class="table-responsive-sm">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Product Name</th>
      <th scope="col">User name</th>
      <th scope="col">Price</th>
	  <th scope="col">Quantity</th>
	  <th scope="col">total</th>
      <th scope="col">Update</th>
	  <th scope="col">Delete</th>
    </tr>
  </thead>

  <tbody>
    <?php

$result = $conn->prepare("SELECT * From cart where cstatus='add' and cus_id=".$uid);
$result->execute();
for($i=0;$row=$result->fetch();$i++)
{

	?>
	    <tr>
		<td> <?php echo $i+1 ?> </td>
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
 <form method="post" action="cartupd.php">
			<td>
					         
							Quantity :- <input type="number" name="cqty" size="20" value="<?php echo $row['quantity']; ?>">
							</td>
							 <td><?php echo $row['total'] ?></td>
							<td><input type="submit" class="btn btn-primary" id="submit" name="submit" value="update"></td>
							<input type="number" name="c_id" size="50" value="<?php echo $row['id']; ?>" style="display: none">
							</form>
							<td><button class="btn btn-primary" onclick="myFunction(<?php echo $row['id']; ?>);">Delete</button></td>
								  
    </tr> 

<?php
}
?>	

<script>
function myFunction(delid) {
var txt;
if (confirm("Do you want to Delete this record!")) {
txt = delid;
window.location.href="cartdel.php?id="+ txt;
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


<div class="row">
<div class="col-sm-7">
<h2>shipping charges</h2>
<p>shipping charges for whole maharashatra will be following </p>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Sr no</th>
      <th scope="col">District list1 </th>
      <th scope="col">Price</th>
	  <th scope="col">District list2 </th>
      <th scope="col">Price</th>
	  <th scope="col">District list3 </th>
      <th scope="col">Price</th>
	  <th scope="col">District list4 </th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Satara</td>
      <td>50</td>
	  <td>Osmanabad</td>
      <td>220</td>
	  <td>Pune</td>
      <td>100</td>
	  <td>Ratanagiri</td>
      <td>100</td>
    </tr>

    <tr>
      <th scope="row">2</th>
      <td>Sangli</td>
      <td>100</td>
	  <td>kolhapur</td>
      <td>120</td>
	  <td>sindhudurg</td>
      <td>180</td>
	  <td>Raigad</td>
      <td>180</td>
    </tr>

	 <tr>
      <th scope="row">3</th>
      <td>Solapur</td>
      <td>200</td>
	  <td>Latur</td>
      <td>280</td>
	  <td>Beed</td>
      <td>250</td>
	  <td>Ahamadnagar</td>
      <td>300</td>
    </tr>

	 <tr>
      <th scope="row">4</th>
       <td>Thane</td>
      <td>320</td>
	  <td>Mumbai</td>
      <td>320</td>
	  <td>Palghar</td>
      <td>360</td>
	  <td>Nashik</td>
      <td>400</td>
    </tr>

		 <tr>
      <th scope="row">5</th>
       <td>Nanded</td>
      <td>440</td>
	  <td>Parbhani</td>
      <td>430</td>
	  <td>Jalana</td>
      <td>420</td>
	  <td>Aurangabad</td>
      <td>400</td>
    </tr>

			 <tr>
      <th scope="row">6</th>
       <td>Hingoli</td>
      <td>450</td>
	  <td>Washim</td>
      <td>450</td>
	  <td>Jalgauon</td>
      <td>440</td>
	  <td>Dhule</td>
      <td>430</td>
    </tr>
			 <tr>
      <th scope="row">7</th>
       <td>Nandurbar</td>
      <td>470</td>
	  <td>Buldhana</td>
      <td>450</td>
	  <td>Akola</td>
      <td>470</td>
	  <td>Yavatmal</td>
      <td>500</td>
    </tr>
    			 <tr>
      <th scope="row">8</th>
       <td>Amaravati</td>
      <td>490</td>
	  <td>Wardha</td>
      <td>510</td>
	  <td>Chandrapur</td>
      <td>530</td>
	  <td>Nagpur</td>
      <td>540</td>
    </tr>
	    			 <tr>
      <th scope="row">9</th>
       <td>Gadchiroli</td>
      <td>560</td>
	  <td>Bandra</td>
      <td>570</td>
	  <td>Gondia</td>
      <td>590</td>
    </tr>
  </tbody>
</table>
</div>



<div class="col-sm-5">


<br><br>
<?php 

$result1 = $conn->prepare("SELECT SUM(total) AS count FROM cart where cstatus='add' and cus_id=".$uid);
$result1->execute();

//$res = $db->query($qry);

$total = 0;
$row = $result1->fetch();

//$rec = $db->fetchAssoc($res);
$total = $row['count']; ?>
<br><br><br>
<div class="total" style="border:1px solid gray;height:200px;width:500px;">
<h1 align="center" style="color:#006666;">Final Amount :-<?php echo "Total: " . $total . "\n"; ?></h1>
	<br><br><center><button class="btn btn-rounded btn-success mb-3" onclick=window.location.href="final.php">Proceed to checkout</button>	</center>					</form>
</div> </div>
</div>
      <?php include("userfooter.php");?>
	  