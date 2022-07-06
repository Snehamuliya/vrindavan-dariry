<?php include("userheader.php");

//$pro_id=$_SESSION['p_id'];
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
						
								
										
										
										
										
										
	
	
										 if (isset($_POST['submit']))
										{
											$qty=$_POST['cqty'];
											$ca_id=$_POST['c_id'];
											
											/*-------------------*/
											
											$result2 = $conn->prepare("SELECT * FROM cart where id=".$ca_id);
		                                   $result2->execute();
		                                  $row = $result2->fetch();
										  
											$prodid=$row['prod_id'];
											
											/*-------------------*/
											
											$result1 = $conn->prepare("SELECT * From prod1 where id=".$prodid);
		                                   $result1->execute();
											$row = $result1->fetch();
											$pstock=$row['stock'];
											
											
											/*-------------------*/
											
											$result = $conn->prepare("SELECT * FROM cart where id=".$ca_id);
		                                   $result->execute();
		                                  $row = $result->fetch();
										  
											$price=$row['price'];
					
											$total= $price*$qty;
											
											if($qty<=$pstock)
											{
											$result1 = $conn->prepare("update cart set quantity='$qty',total='$total' Where id=$ca_id ");
	                                        $result1->execute();
											$result2 = $conn->prepare("update cart_bil set quantity='$qty',total='$total' Where id=$ca_id ");
	                                        $result2->execute();
											echo "<script>
											alert('Your record is updated successfully....!');
											window.location.href='cart.php';
											</script>";
											}
											else
											{
											echo "<script>
											alert('Stock not availible....!');
											window.location.href='cart.php';
											</script>";	
											}
										}
										
										?>

                                                   
    <h4><?php echo $total ?></h4>


        <!-- main content area end -->
      <?php include("userfooter.php");?>
	  