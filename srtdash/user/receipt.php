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
										 if (isset($_POST['submit']))
										{
											$qty=$_POST['qty'];
											$pro_id=$_POST['p_id'];
											$cartdate=date("Y/m/d");
											
											
											echo $qty;
											
											echo $pro_id;
											
									
										}
										
//$result1 = $conn->prepare("update cart set cstatus='shiping' where cus_id=".$uid);
                                           // $result1->execute();
											?>