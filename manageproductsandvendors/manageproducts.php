

    
<?php
include('configproduct.php');
												

try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname","root","");
	
}
catch(Exception $e)
{
	echo 'Not connected'.$e->getMessage();
}

$hk=@$_REQUEST['hh'];
if(isset($_POST['submit']))
{ 
	$imgData =($_FILES['pbimg']['name']);
	$pprice=@$_POST['pprice'];    
	$name=@$_POST['name'];
    $email=@$_POST['email'];
    $contact=@$_POST['contact'];
$pdis=@$_POST['pdis'];
$bname=@$_POST['bname'];
$brandlogo=($_FILES['brandlogos']['name']);
$drange=@$_POST['drange'];
$psub=@$_POST['psub'];
	$pcat=@$_POST['pcat'];
$psub2=@$_POST['psub2'];
$ptitle=@$_POST['ptitle'];
$scolor=@$_POST['scolor'];
$color=@$_POST['color'];
$checkboxes=@$_POST['checkboxes'];
$sinfo=@$_POST['sinfo'];
	$squant=@$_POST['quant'];

	$qwo="SELECT `ID` FROM `vendors` WHERE `Mail_ID` = '$email'";
	$abc=array();
	foreach($conn->query($qwo) as $qwe)
	{
		$ab=$qwe['ID'];
	$abc[]=$ab;
	}
	$res=sizeof($abc);
	
	if($res==0)
	{
		
    $qwert="INSERT INTO `vendors`( `Mail_ID`, `Mobile_No`) VALUES ('$email','$contact')";
		$conn->exec($qwert);
	$qwob="SELECT `ID` FROM `vendors` WHERE `Mail_ID` = '$email'";
	foreach($conn->query($qwob) as $qwem)
	{
		$abn=$qwem['ID'];
		
	}
	$query34="INSERT INTO `product`(`name`, `email`, `contact`, `vendor_id`, `Product_Title`, `Product_Description`, `bname`, `blogo`, `color`, `scolor`, `size`, `Category`, `Sub_category`, `psub2`, `Stock`, `Display_Price`, `Product_Images`, `Delivery`,`quantity`)VALUES('$name','$email','$contact','$abn','$ptitle','$pdis','$bname','$brandlogo','$color','$scolor','$checkboxes','$pcat','$psub','$psub2','$sinfo','$pprice','$imgData','$drange','$squant')";
	$conn->exec($query34);

}	
	else{
	
	
	
	
	
	
	$query="INSERT INTO `product`(`name`, `email`, `contact`, `vendor_id`, `Product_Title`, `Product_Description`, `bname`, `blogo`, `color`, `scolor`, `size`, `Category`, `Sub_category`, `psub2`, `Stock`, `Display_Price`, `Product_Images`, `Delivery`,`quantity`)VALUES('$name','$email','$contact','$ab','$ptitle','$pdis','$bname','$brandlogo','$color','$scolor','$checkboxes','$pcat','$psub','$psub2','$sinfo','$pprice','$imgData','$drange','$squant')";
	$conn->exec($query);

}}
else if(@$_REQUEST['edel'])
{
	$edname=@$_REQUEST['edname'];
    $del="DELETE FROM `product` WHERE `name`='$edname'";
$conn->exec($del);
}
	

?>


<html>

<!-- /tables.html by , Sat, 05 Aug 2017 13:58:48 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="A Components Mix Bootstarp 3 Admin Dashboard Template">
<meta name="author" content="Westilian">
<title>Womenfederation Admin</title>
<link rel="stylesheet" href="css/font-awesome.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="css/animate.css" type="text/css">
<link rel="stylesheet" href="css/waves.css" type="text/css">
<link rel="stylesheet" href="css/layout.css" type="text/css">
<link rel="stylesheet" href="css/components.css" type="text/css">
<link rel="stylesheet" href="css/plugins.css" type="text/css">
<link rel="stylesheet" href="css/common-styles.css" type="text/css">
<link rel="stylesheet" href="css/pages.css" type="text/css">
<link rel="stylesheet" href="css/responsive.css" type="text/css">
<link rel="stylesheet" href="css/matmix-iconfont.css" type="text/css">
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>


    <!--Data Table-->
    <script type="text/javascript" charset="utf8" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript"  src=" https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>

    <!--Export table buttons-->
    <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js" ></script>
    <script type="text/javascript"  src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.1/js/buttons.print.min.js"></script>

<!--Export table button CSS-->

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<link href="http://fonts.googleapis.com/css?family=Roboto:400,300,400italic,500,500italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet" type="text/css">
</head>
<body>

	<script>
$(document).ready(function($){
$('#mytable').DataTable();
});</script>

<div id="123">
          </div>
           <div class="bb-alert alert alert-success noty_animated fadeInUp">
        <span>Table Callback Demo Content</span>
    </div>
    <div class="page-container list-menu-view">
        <!--Leftbar Start Here -->
        <div class="left-aside desktop-view">
            <div class="aside-branding">
                <a href="index.html" class="iconic-logo">
                    <img src="images/logo-iconic.png" alt="Matmix Logo">
                </a>
                <a href="index.html" class="large-logo">
                    <img src="images/logo-large.png" alt="Matmix Logo">
                </a>
                <span class="aside-pin waves-effect">
                    <i class="fa fa-thumb-tack"></i>
                </span>
                <span class="aside-close waves-effect">
                    <i class="fa fa-times"></i>
                </span>
            </div>
            <div class="left-navigation">
                <ul class="list-accordion">
                    <li>
                        <a href="#" class="waves-effect">
                            <span class="nav-icon">
                                <i class="fa fa-home"></i>
                            </span>
                            <span class="nav-label">Dashboard</span>
                            <span class="label label-primary">New</span>
                        </a>

                    </li>
                    <li>
                        <a href="#" class="waves-effect">
                            <span class="nav-icon">
                                <i class="fa fa-align-justify"></i>
                            </span>
                            <span class="nav-label">User Management</span>
                        </a>
                        <ul>
                            <li>
                                <a href="manage-user.html">Manage User</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <span class="nav-icon">
                                <i class="fa fa-table"></i>
                            </span>
                            <span class="nav-label">Products</span>
                        </a>
                        <ul>
                            <li>
                                <a href="manageproducts.php">Manage Products</a>
                            </li>
                            <li>
                                <a href="stock.html">Stock</a>
                            </li>
                            <li>
                                <a href="vendors.php">Vendors</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <span class="nav-icon">
                                <i class="ico-hammer-wrench"></i>
                            </span>
                            <span class="nav-label">Orders</span>
                        </a>
                        <ul>
                            <li>
                                <a href="manage-order.html">Manage Order</a>
                            </li>
                            <li>
                                <a href="invoices.html">View Invoices</a>
                            </li>
                            <li>
                                <a href="track-order.html">Track Order Status</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="events.html">
                            <span class="nav-icon">
                                <i class="ico-chart"></i>
                            </span>
                            <span class="nav-label">Events</span>
                        </a>
                        <ul>
                            <li>
                                <a href="manage-events.html">Manage Events</a>
                            </li>
                            <li>
                                <a href="events-booking.html">Event Bookings</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <span class="nav-icon">
                                <i class="ico-lifebuoy"></i>
                            </span>
                            <span class="nav-label">Community</span>
                        </a>
                        <ul>
                            <li>
                                <a href="manage-community.html">Manage Community</a>
                            </li>
                            <li>
                                <a href="manage-community-page.html">Manage Community Page</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <span class="nav-icon">
                                <i class="fa fa-file-text-o"></i>
                            </span>
                            <span class="nav-label">Members</span>
                        </a>
                        <ul>
                            <li>
                                <a href="members.html">Manage Members</a>
                            </li>
                            <li>
                                <a href="manager-membership.html">Manager Membership</a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>


        <div class="page-content">
            <!--Topbar Start Here -->
            <header class="top-bar">
                <div class="container-fluid top-nav">
                    <div class="search-form search-bar">
                        <form>
                            <input name="searchbox" value="" placeholder="Search Topic..." class="search-input">
                            <input type="text" name="hh" style="visibility:hidden">
                        </form>
                        <span class="search-close waves-effect">
                            <i class="ico-cross"></i>
                        </span>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="clearfix top-bar-action">
                                <span class="leftbar-action-mobile waves-effect">
                                    <i class="fa fa-bars "></i>
                                </span>
                                <span class="leftbar-action desktop waves-effect">
                                    <i class="fa fa-bars "></i>
                                </span>
                                <span class="waves-effect search-btn mobile-search-btn">
                                    <i class="fa fa-search"></i>
                                </span>
                                <span class="rightbar-action waves-effect">
                                    <i class="fa fa-bars"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4 responsive-fix top-mid">
                            <div class="notification-nav">
                                <ul class="clearfix">
                                    <li class="dropdown">
                                        <a href="#" data-toggle="dropdown" class="hide-small-device waves-effect">
                                            <i class="fa fa-envelope"></i>
                                            <span class="alert-bubble">15</span>
                                        </a>
                                        <div role="menu" class="dropdown-menu message-dropdown msg-lists fadeInUp hide-small-device">
                                            <div class="message-wrap">
                                                <h4>You have 15 new messages</h4>
                                                <ul class="clearfix">
                                                    <li class="clearfix">
                                                        <a href="#" class="message-thumb">
                                                            <img src="images/avatar/adellecharles.jpg" alt="image">
                                                        </a>
                                                        <a href="#" class="message-intro">
                                                            <span class="message-meta">Adellecharles </span>Nunc aliquam dolor...
                                                            <span class="message-time">today at 10:20 pm</span>
                                                        </a>
                                                    </li>
                                                    <li class="clearfix">
                                                        <a href="#" class="message-thumb">
                                                            <img src="images/avatar/allisongrayce.jpg" alt="image">
                                                        </a>
                                                        <a href="#" class="message-intro">
                                                            <span class="message-meta">Allisongrayce </span>In hac habitasse ...
                                                            <span class="message-time">today at 8:29 pm</span>
                                                        </a>
                                                    </li>
                                                    <li class="clearfix">
                                                        <a href="#" class="message-thumb">
                                                            <img src="images/avatar/amarkdalen.jpg" alt="image">
                                                        </a>
                                                        <a href="#" class="message-intro">
                                                            <span class="message-meta">Amarkdalen </span>Suspendisse ac mauris ...
                                                            <span class="message-time">yesterday at 12:29 pm</span>
                                                        </a>
                                                    </li>
                                                    <li class="clearfix">
                                                        <a href="#" class="message-thumb">
                                                            <img src="images/avatar/annapickard.jpg" alt="image">
                                                        </a>
                                                        <a href="#" class="message-intro">
                                                            <span class="message-meta">Annapickard </span>Vivamus lacinia facilisis...
                                                            <span class="message-time">yesterday at 11:48 pm</span>
                                                        </a>
                                                    </li>
                                                    <li class="clearfix">
                                                        <a href="#" class="message-thumb">
                                                            <img src="images/avatar/bobbyjkane.jpg" alt="image">
                                                        </a>
                                                        <a href="#" class="message-intro">
                                                            <span class="message-meta">Bobbyjkane </span>Donec vel iaculis ...
                                                            <span class="message-time">1 month ago</span>
                                                        </a>
                                                    </li>
                                                    <li class="clearfix">
                                                        <a href="#" class="message-thumb">
                                                            <img src="images/avatar/chexee.jpg" alt="image">
                                                        </a>
                                                        <a href="#" class="message-intro">
                                                            <span class="message-meta">Chexee </span> Curabitur eget blandit...
                                                            <span class="message-time">3 months ago</span>
                                                        </a>
                                                    </li>
                                                    <li class="clearfix">
                                                        <a href="#" class="message-thumb">
                                                            <img src="images/avatar/coreyweb.jpg" alt="image">
                                                        </a>
                                                        <a href="#" class="message-intro">
                                                            <span class="message-meta">Coreyweb </span>Etiam molestie nulla...
                                                            <span class="message-time">1 year ago</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <a class="btn btn-primary btn-block notification-btn clearfix waves-effect" href="#">
                                                    <span>View All</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" data-toggle="dropdown" class="hide-small-device waves-effect ">
                                            <i class="fa fa-bell"></i>
                                            <span class="alert-bubble">10</span>
                                        </a>
                                        <div role="menu" class="dropdown-menu notification-dropdown fadeInUp noty-lists hide-small-device">
                                            <div class="notification-wrap">
                                                <h4>You have 10 new notifications</h4>
                                                <ul>
                                                    <li>
                                                        <a href="#" class="clearfix">
                                                            <span class="ni w-green">
                                                                <i class="fa fa-bullhorn"></i>
                                                            </span>
                                                            <span class="notification-message">Pellentesque semper posuere.
                                                                <span class="notification-time clearfix">3 Min Ago</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="clearfix">
                                                            <span class="ni w-orange">
                                                                <i class="fa fa-life-ring"></i>
                                                            </span>
                                                            <span class="notification-message">Nulla commodo sem at purus.
                                                                <span class="notification-time clearfix">1 Hours Ago</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="clearfix">
                                                            <span class="ni w-bondi-blue">
                                                                <i class="fa fa-star-o"></i>
                                                            </span>
                                                            <span class="notification-message">Fusce condimentum turpis.
                                                                <span class="notification-time clearfix">3 Hours Ago</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="clearfix">
                                                            <span class="ni w-blue">
                                                                <i class="fa fa-trophy"></i>
                                                            </span>
                                                            <span class="notification-message">Pellentesque habitant morbi.
                                                                <span class="notification-time clearfix">Yesterday</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="clearfix">
                                                            <span class="ni w-brown">
                                                                <i class="fa fa-bolt"></i>
                                                            </span>
                                                            <span class="notification-message">Fusce bibendum lacus mauris.
                                                                <span class="notification-time clearfix">1 Month Ago</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="clearfix">
                                                            <span class="ni w-dark-yellow">
                                                                <i class="fa fa-bookmark-o"></i>
                                                            </span>
                                                            <span class="notification-message">Donec id mi placerat, scelerisque.
                                                                <span class="notification-time clearfix">3 Months Ago</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <a class="btn btn-primary btn-block notification-btn clearfix waves-effect" href="#">
                                                    <span>View All</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="pull-left mobile-search">
                                <span class=" waves-effect search-btn">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6 responsive-fix">
                            <div class="top-aside-right">
                                <div class="user-nav">
                                    <ul>
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" href="#" class="clearfix dropdown-toggle waves-effect waves-block waves-classic">
                                                <span class="user-info">Westilian Jaman
                                                    <cite>jaman@mymail.com</cite>
                                                </span>
                                                <span class="user-thumb">
                                                    <img src="images/avatar/jaman.jpg" alt="image">
                                                </span>
                                            </a>
                                            <ul role="menu" class="dropdown-menu fadeInUp">
                                                <li>
                                                    <a href="#">
                                                        <span class="user-nav-icon">
                                                            <i class="fa fa-briefcase"></i>
                                                        </span>
                                                        <span class="user-nav-label">My Account</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="user-nav-icon">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                        <span class="user-nav-label">View Profile</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="user-nav-icon">
                                                            <i class="fa fa-cogs"></i>
                                                        </span>
                                                        <span class="user-nav-label">Settings</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="user-nav-icon">
                                                            <i class="fa fa-lock"></i>
                                                        </span>
                                                        <span class="user-nav-label">Logout</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pull-right desktop-search">
                                    <span class="waves-effect search-btn">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </div>
                                <span class="rightbar-action waves-effect">
                                    <i class="fa fa-bars"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="main-container">
                <div class="container-fluid">
                    <div class="page-breadcrumb">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="page-breadcrumb-wrap">

                                </div>
                            </div>
                            <div class="col-md-5">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-header">
                                <h2> Product List</h2>
                            </div>
                            <div class="box-widget widget-module">
                                <div class="widget-head clearfix">
                                    <span class="h-icon">
                                        <i class="fa fa-table"></i>
                                    </span>
                                    <h4>Manage Product</h4>
                                </div>
                                <div class="widget-container">
                                    <div class="widget-block">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <!-- Trigger the modal with a button -->
                                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#add-event">
                                                    <i class="ico-plus"></i> Add New Product</button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="add-event" role="dialog">
                                                    <div class="modal-dialog">

                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title">Create New Product</h4>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <!-- Form Starts Here -->
                                                               
                                                                    <form class="form-horizontal" method="post"enctype="multipart/form-data">
                                                                        <div class="form-group">
                                                                            <label for="Name" class="col-md-3 control-label">Name: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" class="form-control" id="name" name="name"required="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="Email-id" class="col-md-3 control-label">Email-Id: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" class="form-control" name="email"id="email-id" required="">
                                                                            </div>
                                                                        </div>

                                                                           <div class="form-group">
                                                                            <label for="contact" class="col-md-3 control-label">Contact no: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" class="form-control" id="contact"name="contact" required="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="product-title" class="col-md-3 control-label">Product Title: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" class="form-control" id="product-title" required=""name="ptitle">
                                                                            </div>
                                                                        </div>
                                                                       
                                                                        <div class="form-group">
                                                                            <label for="product-description" class="col-md-3 control-label">Product Description: </label>
                                                                            <div class="col-md-7">
                                                                                <textarea class="form-control" rows="3"name="pdis"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="BrandName" class="col-md-3 control-label">BrandName: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" class="form-control" id="brand-name" required=""name="bname">
                                                                            </div>
                                                                            </div>

                                                                        <div class="form-group">
                                                                            <label for="Brand-logo" class="col-md-3 control-label">BrandLogo:</label>
                                                                            <div class="col-md-7">
                                                                                <input type="file" id="brand-logo"name="brandlogos" multiple>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="product-price" class="col-md-3 control-label">Product Price: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="number" class="form-control" id="product-price" min="0" placeholder="" required="" name="pprice">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="stock-info" class="col-md-3 control-label">Stock Information: </label>
                                                                            <div class="col-md-7">
                                                                                <textarea class="form-control" rows="3"name="sinfo"></textarea>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="product-img" class="col-md-3 control-label">Upload Product Images:</label>
                                                                            <div class="col-md-7">
                                                                                <input type="file" name="pbimg"id="product-img" multiple >
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="color-size" class="col-md-3 control-label">Color and Size: </label>
                                                                            <div class="col-md-7">
                                                                                <select name="scolor"class="form-control select2" onclick="yesnoCheck(this);">
                                                                                    <option selected>Select Color and Size:</option>
                                                                                    <option value="color">Color</option>
                                                                                    <option value="size">Size</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div id="color_fileds" style="display: none;">
                                                                            <div class="form-group">
                                                                                <label for="product-color" class="col-md-3 control-label">Color :</label>
                                                                                <div class="content col-md-7">
                                                                                    <input type="color" id="product-color" name="color">
                                                                                    <input type="button" id="more_fields" class="btn btn-primary btn-sm" onclick="add_fields();" value="Add More" />
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div id="ifSize" style="display:none;">
                                                                            <div class="form-group">
                                                                                <label class="col-md-3 control-label" for="checkboxes">Size: </label>
                                                                                <div class="row col-md-7">
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-1 checkbox-inline" for="checkboxes-0">
                                                                                            <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1"> 24
                                                                                        </label>
                                                                                        <label class="col-md-1 checkbox-inline" for="checkboxes-1">
                                                                                            <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2"> 26
                                                                                        </label>
                                                                                        <label class="col-md-1 checkbox-inline" for="checkboxes-2">
                                                                                            <input type="checkbox" name="checkboxes" id="checkboxes-2" value="3"> 28
                                                                                        </label>
                                                                                        <label class="col-md-1 checkbox-inline" for="checkboxes-3">
                                                                                            <input type="checkbox" name="checkboxes" id="checkboxes-3" value="4"> 30
                                                                                        </label>
                                                                                        <label class="col-md-1 checkbox-inline" for="checkboxes-4">
                                                                                            <input type="checkbox" name="checkboxes" id="checkboxes-4" value="5"> 32
                                                                                        </label>
                                                                                        <label class="col-md-1 checkbox-inline" for="checkboxes-5">
                                                                                            <input type="checkbox" name="checkboxes" id="checkboxes-5" value="6"> 34
                                                                                        </label>
                                                                                        <label class="col-md-1 checkbox-inline" for="checkboxes-6">
                                                                                            <input type="checkbox" name="checkboxes" id="checkboxes-6" value="7"> 36
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div class="form-group">
                                                                            <label for="product-cat" class="col-md-3 control-label">Product Category: </label>
                                                                            <div class="col-md-7">
                                                                                <select name="pcat"class="form-control select2" onclick="subcategory(this);">
                                                                                    <option value="none" selected>Select Product:</option>
                                                                                    <?php 
                                  $query111="select distinct(category) from categorymap";
							        foreach($conn->query($query111) as $row2)
									{//while($row=mysqli_fetch_array($product))
									//{
                                        
										?>
										<option><?php echo $row2['category']; ?></option>
                                  <?php
									}	                                    $category2 = $_POST['category'];

																					?>
                                      
                                                                                </select>
                                                                            </div>
                                                                        </div>


                                                                        <div class="form-group" id="subpro-1">
                                                                            <label for="subpro-1" class="col-md-3 control-label">SubProduct: </label>
                                                                            <div class="col-md-7">
                                                                                <select name="psub"class="form-control select2">
                                                                                    <option value="none" selected disabled>Select SubProduct :</option>
                                                                                                                         <?php 
                                  $query112="select distinct(subcategory) from categorymap";
							        foreach($conn->query($query112) as $row12)
									{//while($row=mysqli_fetch_array($product))
									//{
                                        
										?>
										<option><?php echo $row12['subcategory']; ?></option>
                                  <?php
									}	                                    $category132 = $_POST['subcategory'];

																					?>
                                      
                                              
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group" id="subpro-2">
                                                                            <label for="subpro-2" class="col-md-3 control-label">childProduct: </label>
                                                                            <div class="col-md-7">
                                                                                <select name="psub2"class="form-control select2">
                                                                                    <option value="none" selected disabled>Select childProduct:</option>
                                                                                                                         <?php 
                                  $query113="select distinct(childcategory) from categorymap";
							        foreach($conn->query($query113) as $row122)
									{//while($row=mysqli_fetch_array($product))
									//{
                                        
										?>
										<option><?php echo $row122['childcategory']; ?></option>
                                  <?php
									}	                                    $category122 = $_POST['childcategory'];

																					?>
                                      
                                              
                                                                                   </select>
                                                                            </div>
                                                                        </div>
 <div class="form-group">
                                                                            <label for="stock-info" class="col-md-3 control-label">Quantity: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="number" class="form-control" rows="3"name="quant">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="range" class="col-md-3 control-label">Deliver Range: </label>
                                                                            <div class="col-md-7 slidecontainer">
                                                                                <input name="drange"type="range" min="1" max="500" value="35" class="slider" id="myRange" />
                                                                                <p>Value:
                                                                                    <span id="demo"></span>
                                                                                    Km
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                         


                                                                        <div class="form-group">
                                                                            <label for="" class="col-md-3 control-label"></label>
                                                                            <div class="col-md-7 text-center">
                                                                                <button type="Submit" class="btn btn-primary btn-lg " style="" name="submit">Submit</button>
                                                                                <button type="reset" class="btn btn-danger btn-lg " style="" name="reset">Reset</button>

                                                                            </div>
                                                                        </div>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                   
                                    <table class="table table-hover table-bordered matmix-dt bg-hc-border" id="mytable">
                                        <thead>
                                                                           <form method="post" action="productedit.php">

                                            <tr>
                                                <th colspan="8">
                                                    <div class="dt-col-header">All new products.</div>
                                                    <p>
                                                        Manage all the products by signle or bulk action
                                                    </p>
                                                </th>
                                                <th colspan="4">
                                                    <form class="form-horizontal">
                                                        <div class="form-group td-bulk-action">
                                                            <label class="col-md-6 control-label">Bulk Action:</label>
                                                            <div class=" col-md-6">
                                                                <select class="form-control input-sm status-select-all">
                                                                    <option>Select</option>
                                                                    <option>Approve</option>
                                                                    <option>Reject</option>
                                                                    <option>Suspend</option>
                                                                    <option>Pending</option>
                                                                </select>
                                                            </div>
                                                    </form>
                                                </th>
                                            </tr>
                                            <form>
                                            <tr>
                                                <th class="tc-center">
                                                    <input class="tc-check-all" type="checkbox" value="0" />
                                                </th>
                                                <th>
                                                    S.no
                                                </th>
                                                <th>
                                                    Product Title
                                                </th>
                                                <th>
                                                    Price
                                                </th>
                                                <th>
                                                    Stock
                                                </th>
                                                <th>
                                                    Image
                                                </th>
                                                <th>
                                                    Status
                                                </th>
                                                <th>
                                                    Change-Status
                                                </th>
                                                
                                                <th>
                                                    Label
                                                </th>
                                                <th>
                                                    Change-Label
                                                </th>
                                                
                                                  
                                                <th class="tc-center">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                                <?php
												$abc="SELECT * FROM `product`";
												$pro=array();
												
														foreach($conn->query($abc) as $dh)
														{
														$pro[]=$dh['Product_Title'];
														$price[]=$dh['Display_Price'];
														$img[]=$dh['Product_Images'];
														$stock[]=$dh['Stock'];
														$status[]=$dh['Status'];
														$label[]=$dh['label'];
															$mail[]=$dh['email'];
															$con[]=$dh['contact'];
													$id1[]=$dh['ID'];
														
															$id[]=$dh['ID'];
														$yname[]=$dh['name'];
														}
												$ru=sizeof($pro);
                        					
												for($i=$ru-1;$i>=0;$i--){
												echo "
										<tr>
										<td class='tc-center sorting_1'>
                                                    <div class='icheckbox_minimal-aero'>
                                                        <input type='checkbox' class='tc-check' value='0'>
                                                        <ins class='iCheck-helper'>

                                                        </ins>
                                                    </div>
                                                </td>
	                                            
										
												<td>
                                                    $i
                                                </td>
                                                  
										 <td>
												$pro[$i]
												</td>
										
										<td>
                                                    $price[$i]
                                                </td>
                                               <td>
                                                    $stock[$i]
                                                </td>
                                                <td>
                                                   <img src='";?><?php echo "images/$img[$i]"?><?php echo"'>
                                                </td>
												 <td id='display'>
                                                    "?><?php 
													
													   
													   
													   if($status[$i]==1){
													
													
													echo "<label class='label label-info'>Approved</label>";
                                                    }
													else if($status[$i]==2) 
													{
													echo "<label class='label label-warning'>Pending</label>";
                                                    
													}
												    else if($status[$i]==3)
														{
													echo "<label class='label label-danger'>Rejected</label>";
                                                    
													}
													else if($status[$i]==4)
														{
													echo "<label class='label label-danger'>Suspended</label>";
                                                    
													}
													
													
												
												
												
												
												?><?php
                                                 echo "</td>
												 <td>
                                                    <select  value='".$id[$i]."' name='$id[$i]' onchange='aj1(this.id,this.name)' id='$id[$i]'class='form-control input-sm status-select'>
                                                        <option>Select</option>
                                                        <option value='1'>Approve</option>
                                                        <option value='3'>Reject</option>
                                                        <option value='4'>Suspend</option>
                                                        <option value='2'>Pending</option>
                                                    </select>
                                                </td>
                                                
                                                 <td>";?>
                                        
                                                  <?php
													
													
													if($label[$i]==1){
													
													
													echo "<label class='label label-info'>Featured</label>";
                                                    }
													else if($label[$i]==2) 
													{
													echo "<label class='label label-warning'>Popular</label>";
                                                    
													}
												    else if($label[$i]==3)
														{
													echo "<label class='label label-danger'>Top-Rated</label>";
                                                    
													}
													?><?php
                                               echo"
                                                </td>
																								 <td>
                                                    <select value='".$id[$i]."'  name='$id[$i]' onchange='aj2(this.id,this.name)'id='$ru+$id[$i]' class='form-control input-sm status-select'>
                                                        <option>Select</option>
                                                        <option value='1'>Featured</option>
                                                        <option value='2'>Popular</option>
                                                        <option value='3'>Top-Rated</option>
                                                       </select>
                                                </td>
                                                </form>

                                        ";?>
                                                     <script>
        var xhttp;
        function aj1(c,o){
			
			var status_id=document.getElementById(c).value;
            if (window.XMLHttpRequest) {
    xhttp = new XMLHttpRequest();
 } else {
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
 }
            xhttp.onreadystatechange=function(){
                if (this.readyState==4 && this.status==200){
								$('body').load('manageproducts.php');

				}
        };
            xhttp.open("GET","updateproductstatus.php?status_id="+status_id+"&id="+o,true);
            xhttp.send();
        }
														 
                
    </script>
                                                                          <script>
        var xhttp;
        function aj2(d,b){
			
			var status_id1=document.getElementById(d).value;
            if (window.XMLHttpRequest) {
    xhttp = new XMLHttpRequest();
 } else {
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
 }
            xhttp.onreadystatechange=function(){
                if (this.readyState==4 && this.status==200){
								$('body').load('manageproducts.php');

				}
        };
            xhttp.open("GET","productlabelupdate.php?label_id="+status_id1+"&id1="+b,true);
            xhttp.send();
        }
														 
                
    </script>
                                        
                                        
                                        </form><?php echo'   <form method="post" action="productedit.php">
												<td>
												<button type="submit" value="'.$id[$i].'" name="er" class="btn btn-default">Edit</button>
												';?>	</form>
												 <form method="post" action="del34.php">
													<?php echo'
												<button type="submit" id="bt" class="btn btn-default" value="'.$id[$i].'" name="del23" >
                                                    Delete</button>';?></form><?php echo '</td>
													</tr>';?>
													<!-- Modal -->

                                                <div class="modal fade" id="add-even" role="dialog">
                                                    <div class="modal-dialog">


<!-- Modal content-->
                                                   <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title">Edit Info</h4>
                                                            </div>
                                                            <div class="modal-footer">                                                                   
                                                                <!-- Form Starts Here -->
                                                              <div class="col-md-12">
                                                                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                                                        <div class="form-group">
                                                                            <label for="Name" class="col-md-3 control-label">Name: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" class="form-control" id="name" value="<?php  echo $yname[$i]; ?>"  name="ename"required="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="Name" class="col-md-3 control-label">Email: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" class="form-control" id="name" value="<?php  echo $mail[$i]; ?>"readonly name="ename"required="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="Name" class="col-md-3 control-label">Contact: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" class="form-control" id="name" value="<?php  echo $con[$i]; ?>"readonly name="ename"required="">
                                                                            </div>
                                                                        </div>
                                                                        
                                                                           <div class="form-group">
                                                                            <label for="product-title" class="col-md-3 control-label">Product Title: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" class="form-control" id="product-title" required="" value="<?php  echo $pro[$i]; ?>" name="eptitle">
                                                                            </div>
                                                                        </div>
                                                                       
                                                                       
                                                                        <div class="form-group">
                                                                            <label for="product-price" class="col-md-3 control-label">Product Price: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="number" class="form-control" id="product-price" min="0" placeholder="" required="" value="<?php  echo $price[$i]; ?>"name="epprice">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="stock-info" class="col-md-3 control-label">Stock Information: </label>
                                                                            <div class="col-md-7">
                                                                                <textarea class="form-control" rows="3" value="<?php  echo $stock[$i]; ?>"name="esinfo"></textarea>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="product-img" class="col-md-3 control-label">Product Images:</label>
                                                                            <div class="col-md-7">
                                                                                <input type="file"value="<?php  echo $img[$i]; ?>" name="epimg" id="product-img" multiple >
                                                                            </div>
                                                                        </div>
																		
                                                                        <div class="form-group">
                                                                            <label for="status" class="col-md-3 control-label">Change-Status: </label>
                                                                            <div class="col-md-7">
                                                                                <select name="ecstatus" class="form-control"     <option>Select</option>
                                                                                    <option value="1">Approved</option>
                                                                                    <option value="2">Pending</option>
                                                                               <option value="3">Rejected</option>
                                                                                    <option value="4">Suspended</option>
                                                                               
																			   
																			   </select>
                                                                            </div>
                                                                        </div>
																	
																	    <div class="form-group">
                                                                            <label for="label" class="col-md-3 control-label">Change-Label: </label>
                                                                	<div class="col-md-7">
                                                                  
																<select name="eclabel" class="form-control">     <option>Select</option>
                                                                                    <option value="1">Featured</option>
                                                                                    <option value="2">Popular</option>
                                                                               <option value="3">Top-Rated</option>
																			   </select>
                                                                            </div>
                                                                        </div>
                                                                     
                                                                    
                                                                        <div class="form-group">
                                                                            <label for="" class="col-md-3 control-label"></label>
                                                                            <div class="col-md-7 text-center">
                                                                                <input type="Submit" class="btn btn-primary btn-lg " style="" name="esubmit" value="Update">
                                                                                <button type="reset" class="btn btn-danger btn-lg " style="" name="reset">Reset</button>

                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                       </div>
                                                        <div class="modal fade" id="add-eve" role="dialog">
                                                    <div class="modal-dialog">

                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title">Delete Info</h4>
                                                            </div>
                                                            <div class="modal-footer">                                                                   
                                                                <!-- Form Starts Here -->
                                                                <div class="col-md-12">
                                                                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                                                        <div class="form-group">
                                                                            <label for="Name" class="col-md-3 control-label"> Name: </label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" class="form-control" id="name"value="<?php
																					  echo $yname[$i];
																					   ?>" name="edname"required="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="" class="col-md-3 control-label"></label>
                                                                            <div class="col-md-7 text-center">
                                                                                <input type="Submit" class="btn btn-primary btn-lg " style="" name="edel" value="Delete">
                                                                                
                                                                            </div>
                                                                        </div>

                                                                    </form>
                                                                </div>
                                                            </div>
                                    </div>            
                                         </div>          
                                                </div>
                                                <?php } ?>
                                                
                                                </tbody>
                                           
                                           </table>
                                            
                                             
							

							              
								
												
												
												
											
                                   
            
            <footer class="footer-container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="footer-left">
                                <span>&copy; 2015
                                    <a href="http://themeforest.net/user/westilian">westilian</a>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="footer-right">
                                <span class="footer-meta">Crafted with&nbsp;
                                    <i class="fa fa-heart"></i>&nbsp;by&nbsp;
                                    <a href="http://themeforest.net/user/westilian">westilian</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--Rightbar Start Here -->
    <div class="right-aside">
        <div class="aside-branding">
            <div class="aside-tab">
                <ul class="nav nav-tabs pull-left">
                    <li class="active">
                        <a href="#coversetaion" data-toggle="tab" data-tooltip="tooltip" data-placement="bottom" title="Chat" class="waves-effect">
                            <i class="fa fa-comments"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#server-stats" data-toggle="tab" data-tooltip="tooltip" data-placement="bottom" title="Stats" class="waves-effect">
                            <i class="fa fa-pie-chart"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#notifications" data-toggle="tab" data-tooltip="tooltip" data-placement="bottom" title="Notifications" class="waves-effect aside-notifications">
                            <i class="fa fa-bell"></i>
                            <span class="alert-bubble">10</span>
                        </a>
                    </li>
                </ul>
            </div>
            <span class="rightbar-action waves-effect">
                <i class="fa fa-times"></i>
            </span>
        </div>
        <div class="aside-tab-wigets">
            <div class="tab-content">
                <div class="tab-pane active" id="coversetaion">
                    <div class="chat-search-form">
                        <form>
                            <input name="searchbox" value="" placeholder="Chat With" class="chat-u-search form-control">
                        </form>
                    </div>
                    <div class="block-content chat-user-list">
                        <span class="piechart"></span>
                        <h3 class="clearfix">
                            <span class="pull-left">Friends</span>
                            <span class="pull-right online-counter">3 Online</span>
                        </h3>
                        <ul class="chat-list">
                            <li>
                                <a href="#">
                                    <span class="chat-avatar">
                                        <img src="images/avatar/adellecharles.jpg" alt="Avatar">
                                    </span>
                                    <span class="chat-u-info">Adellecharles
                                        <cite>New York</cite>
                                    </span>
                                </a>
                                <span class="chat-u-status">
                                    <i class="fa fa-circle"></i>
                                </span>
                            </li>
                            <li class="chat-u-online">
                                <a href="#">
                                    <span class="chat-avatar">
                                        <img src="images/avatar/allisongrayce.jpg" alt="Avatar">
                                    </span>
                                    <span class="chat-u-info">Allisongrayce
                                        <cite>New York</cite>
                                    </span>
                                </a>
                                <span class="chat-u-status">
                                    <i class="fa fa-circle"></i>
                                </span>
                            </li>
                            <li class="chat-u-online">
                                <a href="#">
                                    <span class="chat-avatar">
                                        <img src="images/avatar/bobbyjkane.jpg" alt="Avatar">
                                    </span>
                                    <span class="chat-u-info">Bobbyjkane
                                        <cite>New York</cite>
                                    </span>
                                </a>
                                <span class="chat-u-status">
                                    <i class="fa fa-circle"></i>
                                </span>
                            </li>
                            <li class="chat-u-online">
                                <a href="#">
                                    <span class="chat-avatar">
                                        <img src="images/avatar/littlenono.jpg" alt="Avatar">
                                    </span>
                                    <span class="chat-u-info">Littlenono
                                        <cite>New York</cite>
                                    </span>
                                </a>
                                <span class="chat-u-status">
                                    <i class="fa fa-circle"></i>
                                </span>
                            </li>
                        </ul>
                        <h3 class="clearfix">
                            <span class="pull-left">Family</span>
                            <span class="pull-right online-counter">1 Online</span>
                        </h3>
                        <ul class="chat-list">
                            <li>
                                <a href="#">
                                    <span class="chat-avatar">
                                        <img src="images/avatar/geeftvorm.jpg" alt="Avatar">
                                    </span>
                                    <span class="chat-u-info">Geeftvorm
                                        <cite>New York</cite>
                                    </span>
                                </a>
                                <span class="chat-u-status">
                                    <i class="fa fa-circle"></i>
                                </span>
                            </li>
                            <li class="chat-u-online">
                                <a href="#">
                                    <span class="chat-avatar">
                                        <img src="images/avatar/amarkdalen.jpg" alt="Avatar">
                                    </span>
                                    <span class="chat-u-info">Amarkdalen
                                        <cite>New York</cite>
                                    </span>
                                </a>
                                <span class="chat-u-status">
                                    <i class="fa fa-circle"></i>
                                </span>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="chat-avatar">
                                        <img src="images/avatar/mko.jpg" alt="Avatar">
                                    </span>
                                    <span class="chat-u-info">Mko
                                        <cite>New York</cite>
                                    </span>
                                </a>
                                <span class="chat-u-status">
                                    <i class="fa fa-circle"></i>
                                </span>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="chat-avatar">
                                        <img src="images/avatar/marktimemedia.jpg" alt="Avatar">
                                    </span>
                                    <span class="chat-u-info">Marktimemedia
                                        <cite>New York</cite>
                                    </span>
                                </a>
                                <span class="chat-u-status">
                                    <i class="fa fa-circle"></i>
                                </span>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="chat-avatar">
                                        <img src="images/avatar/oykun.jpg" alt="Avatar">
                                    </span>
                                    <span class="chat-u-info">Oykun
                                        <cite>New York</cite>
                                    </span>
                                </a>
                                <span class="chat-u-status">
                                    <i class="fa fa-circle"></i>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane" id="server-stats">
                    <div class="block-content">
                        <div class="server-stats-content">
                            <h3>Work Progress</h3>
                            <div class="progress-wrap">
                                <div class="clearfix progress-meta">
                                    <span class="pull-left progress-label">Daily Backup</span>
                                    <span class="pull-right progress-percent label label-primary"></span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" data-progress="80">
                                    </div>
                                </div>
                            </div>
                            <div class="progress-wrap">
                                <div class="clearfix progress-meta">
                                    <span class="pull-left progress-label">My Sql Backup</span>
                                    <span class="pull-right progress-percent label label-primary"></span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" data-progress="60">
                                    </div>
                                </div>
                            </div>
                            <div class="progress-wrap">
                                <div class="clearfix progress-meta">
                                    <span class="pull-left progress-label">Vps Configure </span>
                                    <span class="pull-right progress-percent label label-primary"></span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" data-progress="90">
                                    </div>
                                </div>
                            </div>
                            <h3>Usage</h3>
                            <div class="uasge-wrap">
                                <ul>
                                    <li>
                                        <h4>Bandwidth</h4>
                                        <span class="uasge-intro">950GB of 1.95 TB Used</span>
                                    </li>
                                    <li class="usage-chart">
                                        <span class="epie-chart" data-percent="60" data-barcolor="#e64a19" data-tcolor="#e0e0e0" data-scalecolor="#e0e0e0" data-linecap="butt"
                                            data-linewidth="3" data-size="55" data-animate="2000">
                                            <span class="percent"></span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="uasge-wrap">
                                <ul>
                                    <li>
                                        <h4>Memory </h4>
                                        <span class="uasge-intro">3 GB of 6 GB Used</span>
                                    </li>
                                    <li class="usage-chart">
                                        <span class="epie-chart" data-percent="50" data-barcolor="#00acc1" data-tcolor="#e0e0e0" data-scalecolor="#e0e0e0" data-linecap="butt"
                                            data-linewidth="3" data-size="55" data-animate="2000">
                                            <span class="percent"></span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="uasge-wrap">
                                <ul>
                                    <li>
                                        <h4>HDD </h4>
                                        <span class="uasge-intro">18 GB of 30 GB Used </span>
                                    </li>
                                    <li class="usage-chart">
                                        <span class="epie-chart" data-percent="60" data-barcolor="#43a047" data-tcolor="#e0e0e0" data-scalecolor="#e0e0e0" data-linecap="butt"
                                            data-linewidth="3" data-size="55" data-animate="2000">
                                            <span class="percent"></span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <h3>Used Services</h3>
                            <div class="progress-wrap">
                                <div class="clearfix progress-meta">
                                    <span class="pull-left progress-label">Email</span>
                                    <span class="pull-right progress-percent-multiple label label-primary">90%</span>
                                </div>
                                <div class="progress multi-progress">
                                    <div class="progress-bar progress-bar-success" data-progress="40">
                                    </div>
                                    <div class="progress-bar progress-bar-warning progress-bar-striped" data-progress="30">
                                    </div>
                                    <div class="progress-bar progress-bar-danger" data-progress="20">
                                    </div>
                                </div>
                                <span class="progress-intro">27 of 30 Email Used</span>
                            </div>
                            <div class="progress-wrap">
                                <div class="clearfix progress-meta">
                                    <span class="pull-left progress-label">Credits</span>
                                    <span class="pull-right progress-percent-multiple label label-primary">70%</span>
                                </div>
                                <div class="progress multi-progress">
                                    <div class="progress-bar progress-bar-success" data-progress="40">
                                    </div>
                                    <div class="progress-bar progress-bar-warning progress-bar-striped" data-progress="20">
                                    </div>
                                    <div class="progress-bar progress-bar-danger" data-progress="10">
                                    </div>
                                </div>
                                <span class="progress-intro">700 of 1000 Credits Used</span>
                            </div>
                            <h3>Task Pending</h3>
                            <div class="progress-wrap">
                                <div class="clearfix progress-meta">
                                    <span class="pull-left progress-label">Tickets</span>
                                    <span class="pull-right progress-percent label label-primary"></span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" data-progress="60">
                                    </div>
                                </div>
                                <span class="progress-intro">60 of 100 Replied / 40 Pending</span>
                            </div>
                            <div class="progress-wrap">
                                <div class="clearfix progress-meta">
                                    <span class="pull-left progress-label">Payments</span>
                                    <span class="pull-right progress-percent label label-primary"></span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" data-progress="90">
                                    </div>
                                </div>
                                <span class="progress-intro">90 of 100 Paid / 10 Unpaid</span>
                            </div>
                            <div class="progress-wrap">
                                <div class="clearfix progress-meta">
                                    <span class="pull-left progress-label">Review</span>
                                    <span class="pull-right progress-percent label label-primary"></span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" data-progress="50">
                                    </div>
                                </div>
                                <span class="progress-intro">5 of 10 Reviewed / 5 Pending</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="notifications">
                    <div class="block-content">
                        <div class="aside-notifications-wrap">
                            <div class="message-wrap">
                                <h4>You have 15 new messages</h4>
                                <ul class="clearfix">
                                    <li class="clearfix">
                                        <a href="#" class="message-thumb">
                                            <img src="images/avatar/adellecharles.jpg" alt="image">
                                        </a>
                                        <a href="#" class="message-intro">
                                            <span class="message-meta">Adellecharles </span>Nunc aliquam dolor...
                                            <span class="message-time">today at 10:20 pm</span>
                                        </a>
                                    </li>
                                    <li class="clearfix">
                                        <a href="#" class="message-thumb">
                                            <img src="images/avatar/allisongrayce.jpg" alt="image">
                                        </a>
                                        <a href="#" class="message-intro">
                                            <span class="message-meta">Allisongrayce </span>In hac habitasse ...
                                            <span class="message-time">today at 8:29 pm</span>
                                        </a>
                                    </li>
                                    <li class="clearfix">
                                        <a href="#" class="message-thumb">
                                            <img src="images/avatar/amarkdalen.jpg" alt="image">
                                        </a>
                                        <a href="#" class="message-intro">
                                            <span class="message-meta">Amarkdalen </span>Suspendisse ac mauris ...
                                            <span class="message-time">yesterday at 12:29 pm</span>
                                        </a>
                                    </li>
                                    <li class="clearfix">
                                        <a href="#" class="message-thumb">
                                            <img src="images/avatar/annapickard.jpg" alt="image">
                                        </a>
                                        <a href="#" class="message-intro">
                                            <span class="message-meta">Annapickard </span>Vivamus lacinia facilisis...
                                            <span class="message-time">yesterday at 11:48 pm</span>
                                        </a>
                                    </li>
                                    <li class="clearfix">
                                        <a href="#" class="message-thumb">
                                            <img src="images/avatar/bobbyjkane.jpg" alt="image">
                                        </a>
                                        <a href="#" class="message-intro">
                                            <span class="message-meta">Bobbyjkane </span>Donec vel iaculis ...
                                            <span class="message-time">1 month ago</span>
                                        </a>
                                    </li>
                                    <li class="clearfix">
                                        <a href="#" class="message-thumb">
                                            <img src="images/avatar/chexee.jpg" alt="image">
                                        </a>
                                        <a href="#" class="message-intro">
                                            <span class="message-meta">Chexee </span> Curabitur eget blandit...
                                            <span class="message-time">3 months ago</span>
                                        </a>
                                    </li>
                                    <li class="clearfix">
                                        <a href="#" class="message-thumb">
                                            <img src="images/avatar/coreyweb.jpg" alt="image">
                                        </a>
                                        <a href="#" class="message-intro">
                                            <span class="message-meta">Coreyweb </span>Etiam molestie nulla...
                                            <span class="message-time">1 year ago</span>
                                        </a>
                                    </li>
                                </ul>
                                <a class="btn btn-primary btn-block notification-btn waves-effect clearfix" href="#">
                                    <span>View All</span>
                                </a>
                            </div>
                            <div class="notification-wrap">
                                <h4>You have 10 new notifications</h4>
                                <ul>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <span class="ni w-green">
                                                <i class="fa fa-bullhorn"></i>
                                            </span>
                                            <span class="notification-message">Pellentesque semper posuere.
                                                <span class="notification-time clearfix">3 Min Ago</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <span class="ni w-orange">
                                                <i class="fa fa-life-ring"></i>
                                            </span>
                                            <span class="notification-message">Nulla commodo sem at purus.
                                                <span class="notification-time clearfix">1 Hours Ago</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <span class="ni w-bondi-blue">
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                            <span class="notification-message">Fusce condimentum turpis.
                                                <span class="notification-time clearfix">3 Hours Ago</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <span class="ni w-blue">
                                                <i class="fa fa-trophy"></i>
                                            </span>
                                            <span class="notification-message">Pellentesque habitant morbi.
                                                <span class="notification-time clearfix">Yesterday</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <span class="ni w-brown">
                                                <i class="fa fa-bolt"></i>
                                            </span>
                                            <span class="notification-message">Fusce bibendum lacus mauris.
                                                <span class="notification-time clearfix">1 Month Ago</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <span class="ni w-dark-yellow">
                                                <i class="fa fa-bookmark-o"></i>
                                            </span>
                                            <span class="notification-message">Donec id mi placerat, scelerisque.
                                                <span class="notification-time clearfix">3 Months Ago</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <a class="btn btn-primary btn-block notification-btn clearfix waves-effect " href="#">
                                    <span>View All</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="conv-container">
            <div class="conv-u-info chat-u-online">
                <ul>
                    <li class="chat-avatar">
                        <img src="images/avatar/adellecharles.jpg" alt="Avatar">
                    </li>
                    <li class="chat-u-info">adellecharles
                        <span>New York</span>
                    </li>
                    <li>
                        <span data-tooltip="tooltip" data-placement="bottom" title="Call" class="waves-effect chat-u-call">
                            <i class="fa fa-phone"></i>
                        </span>
                    </li>
                    <li>
                        <span data-tooltip="tooltip" data-placement="bottom" title="Exit" class="waves-effect chat-close">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </li>
                </ul>
            </div>
            <div class="converstaion-list">
                <div class="conversation-back">
                    <div class="conv-thumb">
                        <img src="images/avatar/uxceo.jpg" alt="user">
                    </div>
                    <div class="conv-text">
                        Hello John, thank you for calling Provide Support. How may I help you?
                    </div>
                </div>
                <div class="conversation-front">
                    <div class="conv-text">
                        Hello Mary. I understand the problem and will be happy to help you. Let’s see what I can do.
                    </div>
                </div>
                <div class="conversation-front">
                    <div class="conv-text">
                        Let me see if I have this correct, you want me to…” or “You would like for me to…?
                    </div>
                </div>
                <div class="conversation-back">
                    <div class="conv-thumb">
                        <img src="images/avatar/uxceo.jpg" alt="user">
                    </div>
                    <div class="conv-text">
                        I’m not sure, but let me find out for you.
                    </div>
                </div>
            </div>
            <div class="chat-input-form">
                <form>
                    <input name="chatbox" value="" class="form-control chat-input">
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <!--Load Mask-->
    <script src="js/jquery.loadmask.js"></script>
    <script src="js/jRespond.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/nav-accordion.js"></script>
    <script src="js/hoverintent.js"></script>
    <!--Materialize Effect-->
    <script src="js/waves.js"></script>
    <!--iCheck-->
    <script src="js/icheck.js"></script>
    <!--Select2-->
    <script src="js/select2.js"></script>
    <!--jquery.mentionsInput-->
    <script src="js/underscore.js"></script>
    <script src="js/jquery.elastic.js"></script>
    <script src="js/jquery.events.input.js"></script>
    <script src="js/jquery.mentionsInput.js"></script>
    <script src="js/bootstrap-filestyle.js"></script>
    <!--Text Editor-->
    <script src="js/summernote.min.js"></script>
    <!--CHARTS-->
    <script src="js/chart/sparkline/jquery.sparkline.js"></script>
    <script src="js/chart/easypie/jquery.easypiechart.min.js"></script>
    <!--Smart Resize-->
    <script src="js/smart-resize.js"></script>
    <!--Data Tables-->
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/dataTables.responsive.js"></script>
    <script src="js/dataTables.tableTools.js"></script>
    <script src="js/dataTables.bootstrap.js"></script>
    <script src="js/stacktable.js"></script>
    <script src="js/bootbox.js"></script>
    <script src="js/sweetalert.js"></script>
    <!--Layout Initialize-->
    <script src="js/layout.init.js"></script>
    <!--Template Plugins Initialize-->
    <script src="js/matmix.init.js"></script>
    <!--High Resolution Ready-->
    <script src="js/retina.min.js"></script>
    <!-- Product-dropdown -->
    <script src="js/custom.js"></script>

</body>
<!-- /tables.html by , Sat, 05 Aug 2017 13:59:25 GMT -->

</html>