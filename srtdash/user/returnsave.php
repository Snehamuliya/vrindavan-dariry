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
											$qty=$_POST['b_id'];
											$feed=$_POST['msg'];
											$c_date=date("Y/m/d");
											
											
											
											$result = $conn->prepare("SELECT * From final where id=".$qty);
		                                   $result->execute();
											$row = $result->fetch();
											
												 if (($username==true) && ($qty>0))
										{
											$bil=$row['total'];
								
											$cid=$row['cus_id'];
											$ship=$row['ship'];
											
											
											
											$result=$conn->prepare("insert into p_return(b_id,amount,rdate,reason,c_id) values('$qty','$ship','$c_date','$feed','$cid')");
											
											$result->execute();
											
											 $result = $conn->prepare("update final set status='return',del_date='$da' Where id=".$qty);
											$result->execute();
					
					$result = $conn->prepare("update cart_bil set cstatus='return' Where bil_no=".$qty);
	                $result->execute();
										
											
											echo "<script>
                          alert('Your form succesfully saved');
                           window.location.href='return.php';
                             </script>";
										}
											
										}
										
										?>

                                                   
    


        <!-- main content area end -->
      <?php include("userfooter.php");?>
	  