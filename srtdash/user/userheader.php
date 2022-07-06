<?php
session_start();
$_SESSION["cart"]=0;
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>vrundavan farm</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="../style.css">
<script src="boot/js/bootstrap.bundle.min.js"></script>
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><image src="../vrundavan-remove.png" height="65px" width="150px"></img></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Products
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="shop.php">Organic</a></li>
            <li><a class="dropdown-item" href="imgdisplay.php">Gardning and other</a></li>
			
          </ul>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="farm.php">Farm Visit</a></li>
            <li><a class="dropdown-item" href="goupooja.php">Gaupooja</a></li>

			
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact Us</a>
        </li>
		
		
  <?php if(isset($_SESSION['name']))
  {
	  ?>
       
	           <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            My Account
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="accview.php">Profile</a></li>
            <li><a class="dropdown-item" href="accedit.php">Update Account</a></li>
            <li><a class="dropdown-item" href="my orders.php">My orders</a></li>
			<li><a class="dropdown-item" href="return.php">return orders</a></li>
          </ul>
        </li>
	   
	   <li class="nav-item">
	   		<a class="nav-link" href="logout.php">Logout</a> 
	   </li>
	   	   		
 <?php
}
else { ?>
		<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
		<li class="nav-item"><a class="nav-link" href="#"></a>
        </li>
		<li class="nav-item"><a class="nav-link" href="#"></a>
        </li>
<?php } ?>




  <?php if(isset($_SESSION['name']))
  {
	  $username=$_SESSION['name'];
	  $uid=$_SESSION["id"];
	  ?>
<li class="nav-item">
	 <a class="nav-link" href="#.php"  style="padding-left:250px;">Welcome &nbsp;<?php echo $_SESSION["name"]; ?></a>
  <?php
}
else { ?>  

      <a class="nav-link" href="#.php"></a> 
	 </li>
<?php } ?>

  <?php if(isset($_SESSION['name']))
  {
	  $username=$_SESSION['name'];
	  $uid=$_SESSION["id"];
	  ?>
<li class="nav-item">
<?php
$result3 = $conn->prepare("SELECT COUNT(id) AS total FROM cart where cstatus='add' and cus_id=".$uid);
$result3->execute();
//$res = $db->query($qry);

$row = $result3->fetch();

//$rec = $db->fetchAssoc($res);
$count = $row['total'];

?>
<a class="nav-link" href="cart.php" style="font-size:20px;">&nbsp;&nbsp;<i class="fa fa-shopping-cart"></i>&nbsp;<?php echo $count; ?></a>
  <?php
}
else { ?>  

  <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i></a>
	 </li>
<?php } ?>
      </ul>
    </div>
  </div>
</nav>
<br>

</body>
</html>


			
