<?php
session_start();
$_SESSION["cart"]=0;
include("connection.php");
?>
  <?php if(isset($_SESSION['aname']))
  {
	  $aname=$_SESSION['aname'];
	  $aid=$_SESSION["aid"];
  }
	  ?>
<?php echo $aid; ?>

<H1>HII</H1>
		