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
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Dairy Managament</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
	
	
	<script>
function isNumberKey(evt)
 {
 var charCode = (evt.which) ? evt.which : event.keyCode
 if (charCode > 31 && (charCode < 48 || charCode > 57))
 return false;
 return true;
 }
 function onlyAlphabets(e, t)
{
 try {
 if (window.event) {
 var charCode = window.event.keyCode;
 }
 else if (e) {
 var charCode = e.which;
 }
 else { return true;}
 if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode == 32))
 return true;
 else
 return false;
 }
 catch (err) {
 alert(err.Description);
 } Pro Web Graphics
 }
 </script>

	
	
</head>

<body class="body-bg">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- main wrapper start -->
    <div class="horizontal-main-wrapper">
        <!-- main header area start -->
        <div class="mainheader-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/icon/logo2.png" alt="logo"></a>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-9 clearfix text-right">
                        <div class="d-md-inline-block d-block mr-md-4">
                            <ul class="notification-area">
                                <li id="full-view"><i class="ti-fullscreen"></i></li>
                                <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                                <li class="dropdown">
                                    <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                        <span>2</span>
                                    </i>
                                    <div class="dropdown-menu bell-notify-box notify-box">
                                        <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                        <div class="nofity-list">
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                                <div class="notify-text">
                                                    <p>You have Changed Your Password</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                                <div class="notify-text">
                                                    <p>New Commetns On Post</p>
                                                    <span>30 Seconds ago</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                                <div class="notify-text">
                                                    <p>Some special like you</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                                <div class="notify-text">
                                                    <p>New Commetns On Post</p>
                                                    <span>30 Seconds ago</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                                <div class="notify-text">
                                                    <p>Some special like you</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                                <div class="notify-text">
                                                    <p>You have Changed Your Password</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                                <div class="notify-text">
                                                    <p>You have Changed Your Password</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
                                    <div class="dropdown-menu notify-box nt-enveloper-box">
                                        <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                        <div class="nofity-list">
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb">
                                                    <img src="assets/images/author/author-img1.jpg" alt="image">
                                                </div>
                                                <div class="notify-text">
                                                    <p>Aglae Mayer</p>
                                                    <span class="msg">Hey I am waiting for you...</span>
                                                    <span>3:15 PM</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb">
                                                    <img src="assets/images/author/author-img2.jpg" alt="image">
                                                </div>
                                                <div class="notify-text">
                                                    <p>Aglae Mayer</p>
                                                    <span class="msg">When you can connect with me...</span>
                                                    <span>3:15 PM</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb">
                                                    <img src="assets/images/author/author-img3.jpg" alt="image">
                                                </div>
                                                <div class="notify-text">
                                                    <p>Aglae Mayer</p>
                                                    <span class="msg">I missed you so much...</span>
                                                    <span>3:15 PM</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb">
                                                    <img src="assets/images/author/author-img4.jpg" alt="image">
                                                </div>
                                                <div class="notify-text">
                                                    <p>Aglae Mayer</p>
                                                    <span class="msg">Your product is completely Ready...</span>
                                                    <span>3:15 PM</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb">
                                                    <img src="assets/images/author/author-img2.jpg" alt="image">
                                                </div>
                                                <div class="notify-text">
                                                    <p>Aglae Mayer</p>
                                                    <span class="msg">Hey I am waiting for you...</span>
                                                    <span>3:15 PM</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb">
                                                    <img src="assets/images/author/author-img1.jpg" alt="image">
                                                </div>
                                                <div class="notify-text">
                                                    <p>Aglae Mayer</p>
                                                    <span class="msg">Hey I am waiting for you...</span>
                                                    <span>3:15 PM</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb">
                                                    <img src="assets/images/author/author-img3.jpg" alt="image">
                                                </div>
                                                <div class="notify-text">
                                                    <p>Aglae Mayer</p>
                                                    <span class="msg">Hey I am waiting for you...</span>
                                                    <span>3:15 PM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="settings-btn">
                                    <i class="ti-settings"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix d-md-inline-block d-block">
                            <div class="user-profile m-0">
                                <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION["aname"] ; ?><i class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Message</a>
                                    <a class="dropdown-item" href="hi.php">Account</a>
							
                                    <a class="dropdown-item" href="alogout.php">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header area end -->
        <!-- header area start -->
        <div class="header-area header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9  d-none d-lg-block">
                        <div class="horizontal-menu">
                            <nav>
                                <ul id="nav_menu">
                                    <li>
                                        <a href="javascript:void(0)"><i class="ti-dashboard"></i><span>dashboard</span></a>
                                        <ul class="submenu">
											<li><a href="admindash.php">dashboard</a></li>
                                           <!-- <li><a href="index.html">ICO dashboard</a></li>
                                            <li><a href="index2.html">Ecommerce dashboard</a></li>
                                            <li><a href="index3.html">SEO dashboard</a></li>-->
                                        </ul>
                                    </li>
									 <li class="active">
                                        <a href="javascript:void(0)"><i class="ti-layout-sidebar-left"></i><span>Masters</span></a>
                                        <ul class="submenu">
                                            
                                          <li class="active"><a href="Categoryview.php">Categoryview Master</a></li>
											<li class="active"><a href="subcategoryview.php">Sub-Categoryview Master</a></li>
										    <li class="active"><a href="Supplierview.php">Supplier Master</a></li>
											<li class="active"><a href="Matarialview.php">Matarial Master</a></li>
                                           <li class="active"><a href="Productview.php">Product Master</a></li>
										   <li class="active"><a href="companyview.php">Company Master</a></li>
										   <li class="active"><a href="customerview.php">Customer Master</a></li>
										   <li class="active"><a href="contactview.php">Feedback Master</a></li>
										   <li class="active"><a href="bill_mas.php">Bill Master</a></li>
										   
                                        </ul>
                                    </li>
									<li class="active">
                                        <a href="javascript:void(0)"><i class="ti-layout-sidebar-left"></i><span>Transaction
                                                </span></a>
                                        <ul class="submenu">
                                            <li><a href="salelist.php">Sales Master</a></li>
                                            <li><a href="purchaselist.php">Purchase Master</a></li>
											<li><a href="sreturn_view.php">sale_return</a></li>
											<li><a href="preturn_view.php">Purchase_return</a></li>
                                        </ul>
                                    </li> 
									 <li class="active">
                                        <a href="javascript:void(0)"><i class="ti-layout-sidebar-left"></i><span>Reports</span></a>
                                        <ul class="submenu">
                                            
                                          <li class="active"><a href="cat_rep.php">Category report</a></li>
											<li class="active"><a href="subcat_rep.php">Sub-Category report</a></li>
										    <li class="active"><a href="sup_rep.php">Supplier report</a></li>
											<li class="active"><a href="mat_rep.php">Matarial report</a></li>
                                            <li class="active"><a href="cus_rep.php">Customer report</a></li>
										    <li class="active"><a href="com_rep.php">Company report</a></li>
										    <li class="active"><a href="pro_rep.php">Product report</a></li>		
											<li class="active"><a href="cartview.php">cart report</a></li>
											<li class="active"><a href="Stockview.php">stock report</a></li>
											
                                        </ul>
                                    </li>
									 <li class="active">
                                        <a href="javascript:void(0)"><i class="ti-layout-sidebar-left"></i><span>Bill Reports</span></a>
                                        <ul class="submenu">
                                            
                                         
											<li class="active"><a href="billview.php">bill report</a></li>
											<li class="active"><a href="doneview.php">Done report</a></li>
											<li class="active"><a href="shipview.php">shiping report</a></li>
											<li class="active"><a href="todyrep.php">Today report</a></li>
											<li class="active"><a href="monthrep.php">month report</a></li>
                                        </ul>
                                    </li>
								
                                  
                          
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- nav and search button -->
                    <div class="col-lg-3 clearfix">
                        <div class="search-box">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- mobile_menu -->
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header area end -->
