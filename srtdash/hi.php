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
<link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/themify-icons.css">
<link rel="stylesheet" href="assets/css/metisMenu.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/slicknav.min.css">
<!-- amchart css -->
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<!-- Start datatable css -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
<!-- others css -->
<link rel="stylesheet" href="assets/css/typography.css">
<link rel="stylesheet" href="assets/css/default-css.css">
<link rel="stylesheet" href="assets/css/styles.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<!-- modernizr css -->
<script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
<?php
    $resultcom = $conn->prepare("SELECT * From admin where id=".$aid);
            $resultcom->execute();
            $rowcomp = $resultcom->fetch();
?>

              <center>  <div class="card" style="width: 30rem;border:1px solid #E1E1E1;" >
                     <a href=" ">
                        <img class="card-img-top" src="admin.png" height="30%" width="30%" alt="h">
                    </a>
<p class="card-t" style="font-size:22px;font-family:Lucida Fax;font-weight:bold;padding-left:30px;">
                           Name:- <?php echo $rowcomp['Name']?>
                        </p>
						 <br>
						 <p class="card-t" style="font-size:22px;font-family:Lucida Fax;font-weight:bold;padding-left:30px;">
                            <?php echo $rowcomp['Address']?>
                        </p>
						<p><strong style="font-size:22px;font-family:Lucida Fax;font-weight:bold;padding-left:30px;">City:- <?php echo $rowcomp['City']?></strong> </p>
						
						    <p class="card-t" style="font-size:22px;font-family:Lucida Fax;font-weight:bold;padding-left:30px;">
                            District :-&nbsp;<?php echo $rowcomp['District']?>
                        </p>
						 <p class="card-t" style="font-size:22px;font-family:Lucida Fax;font-weight:bold;padding-left:30px;">
                            Pincode :-&nbsp;<?php echo $rowcomp['Pincode']?>
                        </p>
						  <p class="card-t" style="font-size:22px;font-family:Lucida Fax;font-weight:bold;padding-left:30px;">
                            Email :-&nbsp;<?php echo $rowcomp['Email']?>
                        </p> 
						<p class="card-t" style="font-size:22px;font-family:Lucida Fax;font-weight:bold;padding-left:30px;">
                            Phone :-&nbsp;<?php echo $rowcomp['Phone']?>
                        </p>
						 
						
</div>
<br><br><a href="aupd.php" class="btn btn-primary btn-sm">
                                Update Account
                            </a>&nbsp;&nbsp;&nbsp;
							<a href="auser.php" class="btn btn-primary btn-sm">
                                Update Username
                            </a></center>
												  