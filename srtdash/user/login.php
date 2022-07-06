<?php
include("userheader.php");
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','root','','Dairy1') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM customer WHERE user='" . $_POST["user_name"] . "' and pass = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['user'];
        } else {
         $message = "Invalid Username or Password!";
        }
		
    }
    if(isset($_SESSION["id"])) {
    header("Location:home.php");
    }
?>
<html>
<head>
<title>User Login</title>
</head>
<body>
<div class="container">
 <div class="row">
    <div class="col-sm-6"><img src="../gaupooja2.jpg" class="img-fluid"></img></div>
	    <div class="col-sm-6">
<form name="frmUser" method="post" action="" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Enter Login Details</h3>
 Username:<br>
 <input type="text" name="user_name">
 <br>
 Password:<br>
<input type="password" name="password">
<br><br>
<input type="submit" name="submit" value="Submit">
<input type="reset">
</form>
<center>Don't have account then <a href="customer.php">Register Now</a></center>
</div>
</div>
</div>
</body>
</html>
<?php include("userfooter.php"); ?>