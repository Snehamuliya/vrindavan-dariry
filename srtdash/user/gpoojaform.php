<?php include("userheader.php") ?>
<html>
<head>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
<title>Goupooja</title>
<style>
.col-sm-5{

	width:600px;
	margin-left:30px;
}

</style>

</head>

<body>
  <div class="container-fluid">
<div class ="row">
         <div class = "col-sm-6" style="background-color:white";>

																		
											  <center><h1 style="font-family:Tempus Sans ITC;"> goupooja</h1></center><br>
		   <table align=center>
		   <form method="post" action="gpoojaform.php">
	    <tr style="height:40px;">
	         <td>&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">Name :-</font>&nbsp;&nbsp;</td>
			 <td><input class="form-control" type="text" id="ip1" name="fname" pattern="([a-zA-Z] ?)+[a-zA-Z]"/></td>
              
		</tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
	    <tr style="height:40px;width:100px;">
		    <td>&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">E-mail :-</font>&nbsp;&nbsp; </td>
			<td><input class="form-control" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" /></td>
		</tr>
				<tr><td></td></tr>
		<tr><td></td></tr>
	    <tr style="height:40px;width:150px;">
		    <td>&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">Mobile-no :-</font></td>
			<td><input class="form-control" type="text" name="no" pattern="[0-9]{10}" maxlength="10"/></td>
		</tr>
				<tr><td></td></tr>
		<tr><td></td></tr>
	    <tr style="height:40px;width:150px;">
		    <td>&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">visiting date :-</font>&nbsp;&nbsp;</td>
			<td><input class="form-control" type="date" name="day" required /></td>
		</tr>
						<tr><td></td></tr>
		<tr><td></td></tr>
	    <tr style="height:40px;width:150px;">
		    <td>&nbsp;&nbsp;<font style="color:black;font-size:20px;font-family:Book Antiqua;">Head count  :-<br>(including you)</font>&nbsp;&nbsp;</td>
			<td><input class="form-control" type="number" name="h_no" min="1" max="20"/></td>
		</tr>
			    <tr>
			<td colspan="2"><center><input type="submit" class="bt1" id="submit" name="submit"></center></td>
		</tr>
	  </table>
	 </form>
        
			 	<?php
										 if (isset($_POST['submit']))
										{
											$name=$_POST['fname'];
											$mail=$_POST['email'];
											$mno=$_POST['no'];
											$day=$_POST['day'];
											$total=$_POST['h_no'];
											
											$result=$conn->prepare("insert into gpooja(name, email, mobile, vis_date, count) values('$name','$mail','$mno','$day','$total')");
											
											$result->execute();
											
											echo "<script>
                          alert('Your record is inserted successfully...!');
                           window.location.href='gpoojaform.php';
                             </script>";
										}
										
										?>
		
 </div>
         <div class = "col-sm-6"><img src="uimage/gaupooja4.jpg" class="img-fluid"></img></div>
      </div>
	  
<br><br>
</div>

                          

</body>
</html>
<?php include("userfooter.php") ?>