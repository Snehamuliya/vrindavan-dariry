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
 
 
<?php 
$result3 = $conn->prepare("SELECT * FROM final where status='pending' and cus_id=".$uid);
$result3->execute();
$row1 = $result3->fetch();
$dis = $row1['district'];
$temp=$row1['total'];



if($dis=="Satara")
{
	$final=$temp+50;
	$result1 = $conn->prepare("update final set ship_cha=50,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}
if($dis=="Pune")
{
	$final=$temp+100;
	$result1 = $conn->prepare("update final set ship_cha=100,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}
if($dis=="Ratanagiri")
{
	$final=$temp+100;
	$result1 = $conn->prepare("update final set ship_cha=100,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}
if($dis=="Osmanabad")
{
	$final=$temp+220;
	$result1 = $conn->prepare("update final set ship_cha=220,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}





if($dis=="Sangli")
{
	$final=$temp+100;
	$result1 = $conn->prepare("update final set ship_cha=100,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}
if($dis=="kolhapur")
{
	$final=$temp+120;
	$result1 = $conn->prepare("update final set ship_cha=120,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}
if($dis=="sindhudurg")
{
	$final=$temp+180;
	$result1 = $conn->prepare("update final set ship_cha=180,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}





if($dis=="Raigad")
{
	$final=$temp+180;
	$result1 = $conn->prepare("update final set ship_cha=180,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}
if($dis=="Solapur")
{
	$final=$temp+200;
	$result1 = $conn->prepare("update final set ship_cha=200,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}
if($dis=="Latur")
{
	$final=$temp+280;
	$result1 = $conn->prepare("update final set ship_cha=280,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}
if($dis=="Beed")
{
	$final=$temp+250;
	$result1 = $conn->prepare("update final set ship_cha=250,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}





if($dis=="Ahamadnagar")
{
	$final=$temp+300;
	$result1 = $conn->prepare("update final set ship_cha=300,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}
if($dis=="Thane")
{
	$final=$temp+320;
	$result1 = $conn->prepare("update final set ship_cha=320,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}
if($dis=="Mumbai")
{
	$final=$temp+320;
	$result1 = $conn->prepare("update final set ship_cha=320,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}
if($dis=="Palghar")
{
	$final=$temp+360;
	$result1 = $conn->prepare("update final set ship_cha=360,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}




if($dis=="Nashik")
{
	$final=$temp+400;
	$result1 = $conn->prepare("update final set ship_cha=400,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}
if($dis=="Nanded")
{
	$final=$temp+440;
	$result1 = $conn->prepare("update final set ship_cha=440,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}
if($dis=="Parbhani")
{
	$final=$temp+430;
	$result1 = $conn->prepare("update final set ship_cha=430,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}
if($dis=="Jalana")
{
	$final=$temp+420;
	$result1 = $conn->prepare("update final set ship_cha=420,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}



if($dis=="Aurangabad")
{
	$final=$temp+400;
	$result1 = $conn->prepare("update final set ship_cha=400,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}
if($dis=="Hingoli")
{
	$final=$temp+450;
	$result1 = $conn->prepare("update final set ship_cha=450,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}
if($dis=="Washim")
{
	$final=$temp+450;
	$result1 = $conn->prepare("update final set ship_cha=450,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}
if($dis=="Jalgauon")
{
	$final=$temp+440;
	$result1 = $conn->prepare("update final set ship_cha=440,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}




if($dis=="Dhule")
{
	$final=$temp+430;
	$result1 = $conn->prepare("update final set ship_cha=430,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}
if($dis=="Nandurbar")
{
	$final=$temp+470;
	$result1 = $conn->prepare("update final set ship_cha=470,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}
if($dis=="Buldhana")
{
	$final=$temp+450;
	$result1 = $conn->prepare("update final set ship_cha=450,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}
if($dis=="Akola")
{
	$final=$temp+470;
	$result1 = $conn->prepare("update final set ship_cha=470,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}




if($dis=="Yavatmal")
{
	$final=$temp+500;
	$result1 = $conn->prepare("update final set ship_cha=500,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}
if($dis=="Amaravati")
{
	$final=$temp+490;
	$result1 = $conn->prepare("update final set ship_cha=490,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}
if($dis=="Wardha")
{
	$final=$temp+510;
	$result1 = $conn->prepare("update final set ship_cha=510,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}
if($dis=="Chandrapur")
{
	$final=$temp+530;
	$result1 = $conn->prepare("update final set ship_cha=530,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}



if($dis=="Nagpur")
{
	$final=$temp+540;
	$result1 = $conn->prepare("update final set ship_cha=540,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}
if($dis=="Gadchiroli")
{
	$final=$temp+560;
	$result1 = $conn->prepare("update final set ship_cha=560,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}
if($dis=="Bandra")
{
	$final=$temp+570;
	$result1 = $conn->prepare("update final set ship_cha=570,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}
if($dis=="Gondia")
{
	$final=$temp+590;
	$result1 = $conn->prepare("update final set ship_cha=590,ship=".$final." where status='pending' and cus_id=".$uid);
                                           $result1->execute();
}
?>
 <h1>product list</h1>
 <div class="data-tables datatable-dark">
 <table id="dataTable3"  class="table table-hover">
<thead class="text-capitalize">
<tr>

<th>Sr.No</th>

<th scope="col">Customer id</th>
<th scope="col">Product id</th>
<th scope="col">Price</th>
<th scope="col">Quantity</th>
<th scope="col">Total</th>
<th scope="col">Date</th>
</tr>
</thead>
<tbody>
 <?php

$result=$conn->prepare("select * From cart_bil where cstatus='pending' and cus_id=".$uid);
$result->execute();
for($i=0;$row=$result->fetch();$i++)
{
	?>
	<tr><td> <?php echo $i+1 ?> </td>
		<td><?php 
                                                      if($row['cus_id']>0)
                                                {

                                                $resultcom = $conn->prepare("SELECT * From customer where id=".$row['cus_id']."");
                                                $resultcom->execute();
                                                $rowcomp = $resultcom->fetch();

                                                  echo $rowcomp['Name'] ;

                                                }?></td>
	<td> <?php echo $row['prod_id'] ?> </td>
	<td> <?php echo $row['price'] ?> </td>
	<td> <?php echo $row['quantity'] ?> </td>
	<td> <?php echo $row['total'] ?> </td>
	<td> <?php echo $row['ca_date'] ?> </td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>

<!-------------->



 <?php

$result=$conn->prepare("select * From cart_bil where cstatus='pending' and cus_id=".$uid);
$result->execute();
for($i=0;$row=$result->fetch();$i++)
{
	?>
	<tr>
	<td> <?php $cprodid=$row['prod_id']; ?> </td>

	<td> <?php $cqty=$row['quantity'];  ?> </td>
</tr>
<?php
}
?>




<!-------------->




 <?php

$result=$conn->prepare("select * From prod1 where id='$cprodid' ");
$result->execute();
for($i=0;$row=$result->fetch();$i++)
{
	?>
	<tr>
    
	<td> <?php $prod=$row['name'];  ?> </td>
	<td> <?php $qty=$row['stock'];  ?> </td>
 <?php $upqty=$qty-$cqty;?>
</tr>
<?php
}
 $result4 = $conn->prepare("update prod1 set stock='$upqty' where id='$cprodid'");
                                           $result4->execute();
?>





<!-------------->


<h1>bill details </h1>
<table  class="table table-hover">
<thead class="text-capitalize">
<tr>

<th>Sr.No</th>
<th scope="col">Bill No</th>
<th scope="col">Customer name</th>
<th scope="col">Address</th>
<th scope="col">District</th>
<th scope="col">E-mail</th>
<th scope="col">Mobile</th>
<th scope="col">Method</th>
<th scope="col">Cart total</th>
<th scope="col">Shiping charges</th>
<th scope="col">Bill amount</th>
<th scope="col">Date</th>
</tr>
</thead>
<tbody>
	<?php 

$result1 = $conn->prepare("SELECT * From final where status='pending' and cus_id=".$uid);
$result1->execute();

$row = $result1->fetch();
?>
<tr>
<td>1</td>
<td><?php echo $row['bil'];?></td>
	<td><?php 
                                                      if($row['cus_id']>0)
                                                {

                                                $resultcom = $conn->prepare("SELECT * From customer where id=".$row['cus_id']."");
                                                $resultcom->execute();
                                                $rowcomp = $resultcom->fetch();

                                                  echo $rowcomp['Name'] ;

                                                }?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['district'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['phone'];?></td>
<td><?php echo $row['pay'];?></td>
<td><?php echo $row['total'];?></td>
<td><?php echo $row['ship_cha'];?></td>
<td><?php echo $row['ship'];?></td>
<td><?php echo $row['fdate'];?></td>

 </tbody>
</table>

<?php

 $result1 = $conn->prepare("update cart set cstatus='shipping' where cstatus='pending' and cus_id=".$uid);
                                           $result1->execute();
											
$result1 = $conn->prepare("update cart_bil set cstatus='shipping' where cstatus='pending' and cus_id=".$uid);
                                           $result1->execute();	
										   
 $result2 = $conn->prepare("update final set status='shipping' where status='pending' and cus_id=".$uid);
                                           $result2->execute();	

?>