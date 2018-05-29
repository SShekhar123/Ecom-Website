<?php
include('admin/assets/config.php');
include('admin/assets/config3.php');
include('admin/assets/config4.php');
include 'admin/assets/track.php';

    		

?>
 
<!DOCTYPE html>
<html lang="en">
<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109904717-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109904717-1');
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
       <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>1Assam</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template style.css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <!-- Font used in template -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,300italic,300' rel='stylesheet' type='text/css'>
    <!--font awesome icon -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- OpenGraph Facebook Meta Tags -->
 </head>
<body>
<div id="fb-root"></div>
<script>    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    } (document, 'script', 'facebook-jssdk'));
</script>
<script language="javascript">
		function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}</script><a rel="nofollow" href="http://www.facebook.com/share.php?u=<;url>" onclick="return fbs_click()" target="_blank">Share on Facebook</a>
	
</script>
<form>
  <div class="collapse" id="searcharea">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
    <button class="btn tp-btn-primary" type="button">Search</button>
    </span> </div>
    </div>
    <div class="top-bar">
             <div class="container">
            <div class="row">
                <div class="col-md-6 top-message">
                 
                </div>
              <div class="col-md-6 top-links">
                        <ul class="listnone">
                            <li><a href="faq.html"> Partners</a></li>
                            <li><a href="opportunities.html">Members</a></li>
                            <li><a href="signup-vendor.html">Vendor</a></li>
                             <li>
                                <!--a role="button" data-toggle="collapse" href="#searcharea" aria-expanded="false" aria-controls="searcharea"> <i class="fa fa-search"></i> </a-->
                            </li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
    <div class="header">
     <div class="container">
          <div class="row">
                <div class="col-md-3 logo">
                    <div class="navbar-brand">
                        <a href="index.php"><img src="images/logo.png" alt="1Assam" class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="navigation" id="navigation">
                        <ul>
                            <li class="active"><a href="index.html">Home</a></li>
                            <li class="active"><a href="index.html">Team</a></li>
                            <li class="active"><a href="index.html">Services</a></li>
                            <li class="active"><a href="index.php">Finding Opportunities</a></li>
                            <li class="active"><a href="index.html">Media</a></li>
                            <li class="active"><a href="index.html">Jobs</a></li>
                     
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
        <!-- page header -->
  
      
<div class="tp-page-head" style="background:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCRybiCfh8183XLlyZrABFK0g-5CwwL5DYmVwmt94ns4XkGjQxsg) no-repeat center;    background-size:cover;">
        <!-- page header -->
        <div class="container">
              <div class="row">
                    <div class="col-md-offset-1 col-md-10 finder-block">
                        
                        <div class="finder-form-transparent">
                            <form action="shop_search.php" method="post">
                                <div class="row">
                                    <div class="form-group col-md-9">
                                        <select name="Category"class="form-control">
                                            <option>Select Product Category</option>
                                             <?php 
                                  $query="select distinct(Category) from product";
											$ress=mysqli_query($conn,$query);
							        while($row=mysqli_fetch_array($ress))
									{//while($row=mysqli_fetch_array($product))
									//{
                                        
										?>
										<option><?php echo $row['Category']; ?></option>
                                    <?php

                                    $category = $_POST['Category'];
									}
									?>
								
									
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="submit" name="sub" value="search"  class="btn btn-primary btn-lg btn-block">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="tp-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="donations.php">Products</a></li>
                      </ol>
                </div>
            </div>
        </div>
    </div>
    
    	
  <div class="main-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div class="filter-sidebar">
                        <div class="col-md-12 form-title">
                            <h2>Refine Your Search</h2>
                        </div>
                        <form action="shop_search.php" method="post">
                            <div class="col-md-12 form-group">
                                <label class="control-label" for="venuetype">Product Category</label>
                                <select id="venuetype" name="venuetyp"  class="form-control">
                                    <option value="">Select Category</option>
                                <?php
                                $query23="select distinct(Category) from product";
											$ress1=mysqli_query($conn,$query23);
							        while($row3=mysqli_fetch_array($ress1))
									{//while($row=mysqli_fetch_array($product))
									//{
                                        
										?>
										<option><?php echo $row3['Category'];?></option>
                                    <?php

                                    $scategory = @$_POST['Category'];
									}
									?>
								    
                                    </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="control-label" for="venuetype">Brand Name</label>
                                <select id="venuetype" name="venuetype" class="form-control">
                                    <option value="">Select Brand</option>
                                <?php
									$c=@$_REQUEST['Category'];
                                $query12="select distinct(bname) from product where Category='$c'";
											$ress12=mysqli_query($conn,$query12);
							        while($row4=mysqli_fetch_array($ress12))
									{//while($row=mysqli_fetch_array($product))
									//{
                                        
										?>
										<option><?php echo $row4['bname']; ?></option>
                                    <?php

                                    $sname = @$_POST['bname'];
									}
									?>
								    
                                    </select>
                            </div>
                            
						 <!--<div class="col-md-12 form-group">
                                <div class="price-range default-range">
                                    <label for="amount" class="control-label">Investment Range:</label>
                                    <input type="text" name="amt"id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                    <div id="slider-range"></div>
                                </div>
                            </div>!-->
							
                            <div class="col-md-12 form-group">
                                <label class="control-label" for="venuetype">Sort By</label>
                                <select id="venuetype" name="htl" class="form-control">
                                    <option value="">Select</option>
                                    <option value="1">High to low</option>
                                    <option value="2">low to High</option>
                              
								    
                                    </select>
                            </div>
                            
					
                               <!--        <div class="col-md-12 form-group">
                                <label class="control-label" for="capacity">Location</label>
                                <select id="capacity" name="capacity" class="form-control">
                                    <option value="">Select Location</option>
                                    <option value="0 - 99">All India</option>
                                    <option value="100 - 199">Delhi</option>
                                    <option value="200 - 299">Mumbai</option>
                                    <option value="300 - 399">Kolkata</option>
                                    <option value="400+">Bangalore</option>
                                </select>
                            </div>!-->
                           
                            <div class="col-md-12 form-group rating">
                                <label class="control-label">Select Rating </label>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="checkbox-0" value="1" class="styled">
                                    <label for="checkbox-0" class="control-label"> <i class="fa fa-star"></i> </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="checkbox-1" value="2" class="styled">
                                    <label for="checkbox-1" class="control-label"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="checkbox-2" value="3" class="styled">
                                    <label for="checkbox-2" class="control-label"> <i class="fa fa-star"></i> <i class="fa fa-star"></i><i class="fa fa-star"></i> </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="checkbox-3" value="4" class="styled">
                                    <label for="checkbox-3" class="control-label"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </label>
                                </div>
                                <div class="checkbox checkbox-success">
                                    <input type="checkbox" name="checkbox" id="checkbox-4" value="5" class="styled">
                                    <label for="checkbox-4" class="control-label"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </label>
                                </div>
                            </div>
                           
                            <div class="col-md-12 form-group">
                              <input type="submit" name="search" value="Search" class="btn btn-primary btn-block">
                            </div>
                        </form>
                    </div>
				</div>
	               <div class="col-md-10">
			
    <?php
	$amt=@$_REQUEST['amt'];
	$scategory = @$_POST['venuetyp'];
	$sname = @$_POST['venuetype'];
	$htl = @$_POST['htl'];
	$checkbox=@$_POST['checkbox'];								
	
					   if(@$_REQUEST['search'])
	{	if($htl=="1")
		{
		 $sql2="SELECT `ID`, `Product_Title`, `Product_Description`, `Category`, `Sub_category`, `Stock`, `Display_Price`, `Product_Images`, `Delivery` FROM `product` WHERE `bname`='$sname' and `Category`='$scategory'  ORDER BY `Display_Price` DESC";
		}
		else if($htl=="2")
		{
		$sql2="SELECT `ID`, `Product_Title`, `Product_Description`, `Category`, `Sub_category`, `Stock`, `Display_Price`, `Product_Images`, `Delivery` FROM `product`  WHERE `bname`='$sname' and `Category`='$scategory' and `Rating`='$checkbox' ORDER BY `Display_Price` ASC";
		}
			$resul = mysqli_query($conn,$sql2) or die($sql2."<br/><br/>".mysqli_error());
$count2 = mysqli_num_rows($resul);
					
								// output data of each row
						while($row23 = mysqli_fetch_array($resul)) {	
				echo
                    			
                   '<div class="col-md-3"  style="background-color:#e7e7e7; padding-top:15px;">
				 <div class="vendor-total-list mb30">
                        <!-- vendor-total-list -->
                        <div class="vendor-total-thumb">
                            <!-- vendor-total-thumb -->
                            <a href="#"><img src="admin1/assets/images/'.$row23['Product_Images'].'" class="img-responsive" alt=""></a>
						    <div class="favourite-bg" style=" bottom: 143px; right: 18px;"><a href="#" class="" data-toggle="modal" data-target="#fbShare"><i class="fa fa-share-alt"></i></a></div>
                        </div>
                        <!-- /.vendor-total-thumb -->
                        <div class="well-box vendor-total-info" style="text-align:justify;">
                            <!-- vendor-total-info -->
                            <h2 class="vendor-total-title"><a href="#" class="title">'.$row23['Product_Title'].'</a></h2>
                          
							<p>'.$row23['Product_Description'].'<strong><span class="more"> <a href="product_detail.php?jobid='.$row23['ID'].'">Read More <i class="fa fa-angle-right"></i></a></span></strong></p>
							 <h5 class="vendor-total-title"><i class="fa fa-inr" aria-hidden="true" style="color:#ffa422;"></i> <a href="#" class="title">'.$row23['Display_Price'].'</a></h5>
                        </div>
                        <!-- /.vendor-total-info -->
						<div class="vendor-price" style="background-color:#fcfbf900;">
                                    <div class="price"><a href="product_detail.php?jobid='.$row23['ID'].'"><button type="submit" class="btn btn-primary btn-block">Get Info</button></a></div>
                                </div>
                    </div>
                    <!-- /.vendor-total-list -->
                </div>';
                    }
		}
	
	
	?>
	               	
    <?php
		if(@$_REQUEST['sub'])  
		{		   $cat = @$_REQUEST['Category'];
      
  $sql1="SELECT `ID`, `vendor_id`, `Product_Title`, `Product_Description`, `Category`, `Sub_category`, `Stock`, `Display_Price`, `Product_Images`, `Delivery`, `Tags`, `Status`, `label`, `home`, `Rating` FROM `product` WHERE `Category`='$cat'";
	$resu = mysqli_query($conn,$sql1) or die($sql1."<br/><br/>".mysqli_error());
$count1 = mysqli_num_rows($resu);
					
								// output data of each row
						while($row1 = mysqli_fetch_array($resu)) {	
				echo
                    			
                   '<div class="col-md-3"  style="background-color:#e7e7e7; padding-top:15px;">
				 <div class="vendor-total-list mb30">
                        <!-- vendor-total-list -->
                        <div class="vendor-total-thumb">
                            <!-- vendor-total-thumb -->
                            <a href="#"><img src="admin1/assets/images/'.$row1['Product_Images'].'" class="img-responsive" alt=""></a>
						    <div class="favourite-bg" style=" bottom: 143px; right: 18px;"><a href="#" class="" data-toggle="modal" data-target="#fbShare"><i class="fa fa-share-alt"></i></a></div>
                        </div>
                        <!-- /.vendor-total-thumb -->
                        <div class="well-box vendor-total-info" style="text-align:justify;">
                            <!-- vendor-total-info -->
                            <h2 class="vendor-total-title"><a href="#" class="title">'.$row1['Product_Title'].'</a></h2>
                          
							<p>'.$row1['Product_Description'].'<strong><span class="more"> <a href="product_detail.php?jobid='.$row1['ID'].'">Read More <i class="fa fa-angle-right"></i></a></span></strong></p>
							 <h5 class="vendor-total-title"><i class="fa fa-inr" aria-hidden="true" style="color:#ffa422;"></i> <a href="#" class="title">'.$row1['Display_Price'].'</a></h5>
                        </div>
                        <!-- /.vendor-total-info -->
						<div class="vendor-price" style="background-color:#fcfbf900;">
                                    <div class="price"><a href="product_detail.php?jobid='.$row1['ID'].'"><button type="submit" class="btn btn-primary btn-block">Get Info</button></a></div>
                                </div>
                    </div>
                    <!-- /.vendor-total-list -->
                </div>';
                    }
		}
?>                   
					  	 <?php

 // Create connection

	
					   
					   
if(isset($_POST['submit']))
{
    
      $category = $_POST['Category'];
      
  $sql="SELECT `ID`, `vendor_id`, `Product_Title`, `Product_Description`, `Category`, `Sub_category`, `Stock`, `Display_Price`, `Product_Images`,`Delivery`, `Tags`, `Status`, `label`, `home`, `Rating` FROM `product` WHERE `Category`='$category'";
	$result = mysqli_query($conn,$sql) or die($sql."<br/><br/>".mysql_error());
$count = mysqli_num_rows($result);







						
					
						// output data of each row
						while($row = mysqli_fetch_array($result)) {	
				echo
                    			
                   '<div class="col-md-3"  style="background-color:#e7e7e7; padding-top:15px;">
				 <div class="vendor-total-list mb30">
                        <!-- vendor-total-list -->
                        <div class="vendor-total-thumb">
                            <!-- vendor-total-thumb -->
                            <a href="#"><img src="admin1/assets/images/'.$row['Product_Images'].'" class="img-responsive" alt=""></a>
						    <div class="favourite-bg" style=" bottom: 143px; right: 18px;"><a href="#" class="" data-toggle="modal" data-target="#fbShare"><i class="fa fa-share-alt"></i></a></div>
                        </div>
                        <!-- /.vendor-total-thumb -->
                        <div class="well-box vendor-total-info" style="text-align:justify;">
                            <!-- vendor-total-info -->
                            <h2 class="vendor-total-title"><a href="#" class="title">'.$row['Product_Title'].'</a></h2>
                          
							<p>'.$row['Product_Description'].'<strong><span class="more"> <a href="product_detail.php?jobid='.$row['ID'].'">Read More <i class="fa fa-angle-right"></i></a></span></strong></p>
							 <h5 class="vendor-total-title"><i class="fa fa-inr" aria-hidden="true" style="color:#ffa422;"></i> <a href="#" class="title">'.$row['Display_Price'].'</a></h5>
                        </div>
                        <!-- /.vendor-total-info -->
						<div class="vendor-price" style="background-color:#fcfbf900;">
                                    <div class="price"><a href="product_detail.php?jobid='.$row['ID'].'"><button type="submit" class="btn btn-primary btn-block">Get Info</button></a></div>
                                </div>
                    </div>
                    <!-- /.vendor-total-list -->
                </div>';
                    }
                }
			
				?>			
                  

                </div>
				
				<div class="col-md-2" style="padding-left:20px;">
					<div class="row">
											<div class="well-box feature-left" style="padding:5px;">
											<img src="https://www.franchiseindia.com/uploads/tbo/sanjivani222x50-66199bb6e4.gif?d=2" class="img-responsive">
											</div>
										</div>
									<div class="row">
											<div class="well-box feature-left" style="padding:5px;">
											<img src="https://www.franchiseindia.com/uploads/tbo/vrat222x50-b8d027ceb0.gif?d=2" class="img-responsive">
											</div>
										</div>
											<div class="row">
											<div class="well-box feature-left" style="padding:5px;">
											<img src="https://www.franchiseindia.com/uploads/tbo/ezeego-222x50-982fa864fc.gif?d=2" class="img-responsive">
											</div>
										</div>
										
				</div>
            </div>
        </div>
    </div>
	
	<div id="fbShare" class="modal fade" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          </div>
                                         <div class="modal-body">
										 <div class="row">
                                               <div class="col-md-3">
                                               	<a href="javascript:void(0)" onClick="fbs_click();" target="_blank" alt="Share on Facebook">Facebook</a>
                                               </div>
                                                 <div class="col-md-3"><a class="btn fbsharebtn" onClick="window.open('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F1assam.com%2Fbusiness_opp.php%3Fid%3D193&amp',width=300,height=300); return false;" class="fb-xfbml-parse-ignore" href="#"><i class="fa fa-facebook fa-2"></i> Share on FB</a></div>
                                              <div class="col-md-3"><a class="btn twsharebtn" onClick="window.open('https://twitter.com/intent/tweet?text=http%3A%2F%2F1assam.com%2Fbusiness_opp.php%3Fid%3D193&amp',width=300,height=300); return false;" href="#"><i class="fa fa-twitter fa-2"></i> Tweet</a></div>
                                              <div class="col-md-3"><a class="btn gpsharebtn" onClick="window.open('https://plus.google.com/share?url=http%3A%2F%2F1assam.com%2Fbusiness_opp.php%3Fid%3D193&amp',width=300,height=300); return false;" href="#"><i class="fa fa-google-plus fa-2"></i> Google+</a></div>!-->
                                        </div>
                                        </div>
                                      </div>
		</div>
		</div>
    <div class="footer">
        <!-- Footer -->
        <div class="container">
            <div class="row">
                 <div class="col-md-5 ft-aboutus">
                    <h2>1 Assam</h2>
                    <p>We are a full-fledged event management and marketing communication company, striving to create unparalleled event experiences.Our systems and processes ensure a seamless flow of work from beginning to end. We break barriers when we need to and go that extra mile.We incorporate originality and creativity to enhance the event experience, and create inspiring, exhilarating celebrations. </p></div>
                    
                <div class="col-md-3 ft-link">
                    <h2>Useful links</h2>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-md-4 newsletter">
                    <h2>Subscribe for Newsletter</h2>
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter E-Mail Address" required>
                            <span class="input-group-btn">
            <button class="btn btn-default" type="button">Submit</button>
            </span> </div>
                        <!-- /input-group -->
                        <!-- /.col-lg-6 -->
                    </form>
                    <div class="social-icon">
                        <h2>Be Social &amp; Stay Connected</h2>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Footer -->
    <div class="tiny-footer">
        <!-- Tiny footer -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">Copyright � 2018. All Rights Reserved</div>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Flex Nav Script -->
    <script src="js/jquery.flexnav.js" type="text/javascript"></script>
    <script src="js/navigation.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/header-sticky.js"></script>
    <script src="http://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script type="text/javascript" src="js/price-slider.js"></script>
</form>
</body>

</html>
