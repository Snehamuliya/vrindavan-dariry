<?php include("userheader.php");

if($username==true)
{
	
	
}
else
	
	{
		echo '<script>alert("please log in first to insert product into cart!");</script>';
		echo "<script>window.location.href='login.php';</script>";
		
	}

?>          
	<?php
										 if (isset($_POST['submit']))
										{
											$qty=$_POST['qty'];
											$pro_id=$_POST['p_id'];
											$cartdate=date("Y/m/d");
											
											
											echo $qty;
											
											echo $pro_id;
											
											$result = $conn->prepare("SELECT * From prod1 where id=".$pro_id);
		                                   $result->execute();
											$row = $result->fetch();
											
												 if (($username==true) && ($pro_id>0))
										{
											$pri=$row['price'];
											$name=$row['name'];
											$s_no=$row['no'];
											$pstock=$row['stock'];
											
											$total= $pri*$qty;
											
											
											if($qty>$pstock)
											{
												echo "<script>
                          alert('Sorry stock not availible');
                           window.location.href='shop.php';
                             </script>";
											}
											else if($qty>0 && $qty<=$pstock)
											{
											
												$result=$conn->prepare("insert into cart(cus_id,prod_id,price,quantity,total,cstatus,ca_date,sno) values('$uid','$pro_id','$pri','$qty','$total','add','$cartdate','$s_no')");
											
											$result->execute();
											
											$result1=$conn->prepare("insert into cart_bil(cus_id,prod_id,price,quantity,total,cstatus,ca_date,sno) values('$uid','$pro_id','$pri','$qty','$total','add','$cartdate','$s_no')");
											
											$result1->execute();
											
											echo "<script>
                          alert('Your product added cart succesfully');
                           window.location.href='shop.php';
                             </script>";
											}
											else
											{
												echo "<script>
                          alert('quantity should greater than 0 or atleast 1');
                           window.location.href='shop.php';
                             </script>";
											}
											
											
											
											
											
										}
											echo "<script>
                          alert('Your record is inserted successfully...!');
                         
                             </script>";
										}
										
										?>

                                                   
    


        <!-- main content area end -->
      <?php include("userfooter.php");?>
	  