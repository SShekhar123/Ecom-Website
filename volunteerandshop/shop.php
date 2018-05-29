<?php
include('configproduct.php');
include('admin/assets/config3.php');
include('admin/assets/config4.php');
include 'admin/assets/track.php';
try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname","root","");
}
catch(Exception $e)
{
	echo 'Not connected'.$e->getMessage();
}

?>
<style>

@import url("https://fonts.googleapis.com/css?family=Hind:400,700");

img {
  max-width: 100%;
  height: auto;
  display: block;
}

h3 {
  text-align: center;
  font-weight: 400;
  margin-bottom: 0;
}

.carousel-wrapper {
  position: relative;
  width: 100%;
  height: 70%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);

  overflow: hidden;
}
.carousel-wrapper .carousel {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 100%;
  height: auto;
}
.carousel-wrapper .carousel .carousel-cell {
  padding: 10px;
  background-color: #FFFFFF;
  width: 20%;
  height: auto;
  min-width: 120px;
  margin: 0 20px;
  transition: transform 500ms ease;
}
.carousel-wrapper .carousel .carousel-cell .more {
  display: block;
  opacity: 0;
  margin: 5px 0 15px 0;
  text-align: center;
  font-size: 10px;
  color: #CFCFCF;
  text-decoration: none;
  transition: opacity 300ms ease;
}
.carousel-wrapper .carousel .carousel-cell .more:hover, .carousel-wrapper .carousel .carousel-cell .more:active, .carousel-wrapper .carousel .carousel-cell .more:visited, .carousel-wrapper .carousel .carousel-cell .more:focus {
  color: #CFCFCF;
  text-decoration: none;
}
.carousel-wrapper .carousel .carousel-cell .line {
  position: absolute;
  width: 2px;
  height: 0;
  background-color: black;
  left: 50%;
  margin: 5px 0 0 -1px;
  transition: height 300ms ease;
  display: block;
}
.carousel-wrapper .carousel .carousel-cell .price {
  position: absolute;
  font-weight: 700;
  margin: 45px auto 0 auto;
  left: 50%;
  transform: translate(-50%);
  opacity: 0;
  transition: opacity 300ms ease 300ms;
}
.carousel-wrapper .carousel .carousel-cell .price sup {
  top: 2px;
  position: absolute;
}
.carousel-wrapper .carousel .carousel-cell.is-selected {
  transform: scale(1.2);
}
.carousel-wrapper .carousel .carousel-cell.is-selected .line {
  height: 35px;
}
.carousel-wrapper .carousel .carousel-cell.is-selected .price, .carousel-wrapper .carousel .carousel-cell.is-selected .more {
  opacity: 1;
}
.carousel-wrapper .flickity-page-dots {
  display: none;
}
.carousel-wrapper .flickity-viewport, .carousel-wrapper .flickity-slider {
  overflow: visible;
}
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>1Assam</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template style.css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <!-- Font used in template -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,300italic,300' rel='stylesheet' type='text/css'>
    <!--font awesome icon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="collapse" id="searcharea">
        <!-- top search -->
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
    <button class="btn btn-primary" type="button">Search</button>
    </span> </div>
    </div>
    <!-- /.top search -->
    <div class="header-v2 navbar-fixed-top">
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
 
    </div>
    <div class="slider-bg">
        <!-- slider start-->
        <div id="slider" class="owl-carousel owl-theme slider">
            <div class="item slider-shade"><img src="http://www.rankyuga.com/wp-content/uploads/2017/02/contentmanagmentbanner-1.jpg" alt="Wedding couple just married"></div>
            <div class="item slider-shade"><img src="https://www.houseofjoyce.com/wp-content/uploads/2016/09/slide5.jpg" alt="Wedding couple just married"></div>
            <div class="item slider-shade"><img src="http://www.tezer-design.de/wp-content/uploads/2014/10/slide2-1400x500.jpg" alt="Wedding couple just married"></div>
        
        </div>
        <div class="find-section">
            <!-- Find search section-->
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 finder-block">
                        <div class="finder-caption">
                            <h1>Discover Top Trends of Assam</h1>
                            <p>Over <strong>1200+ </strong>exotic & handmade products espcally for you.</p>
                        </div>
                        <div class="finder-form-transparent">
						<form action="shop_search.php" method="post">
                                 <div class="row">
                                    <div class="form-group col-md-8">
  <?php
                                
							
								?>
                                        <select name="Category" class="form-control">
										<option>Select Category</option>
                                  <?php 
                                  $query="select distinct(Category) from product";
							        foreach($conn->query($query) as $row)
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
                                   
                                    <div class="form-group col-md-4">
                                      
                                       
                                       <!--  <input type="hidden" name="category" value="<?php echo $category;?>"> -->
                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" >Search</button>
                                    </div>
                                </div>
                            </form>
                            <?php


                                    
                                    ?>
                            <form>
                              
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.Find search section-->
    </div>
    <!-- slider end-->
    <div class="section-space80">
        <!-- Feature Blog Start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb60 text-center">
                        <h1>Plan your wedding one step at a time</h1>
                        <p>Simple wedding planning tools to help you stay on track. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- feature center -->
                <div class="col-md-3">
                    <div class="feature-block feature-center mb30">
                        <!-- feature block -->
                        <div class="feature-icon"> <i class="icon icon-size-60 icon-calendar icon-default"></i></div>
                        <h2>Checklist</h2>
                        <p>Get your planning sorted with our free wedding planning checklist!</p>
                    </div>
                </div>
                <!-- /.feature block -->
                <div class="col-md-3">
                    <div class="feature-block feature-center mb30">
                        <!-- feature block -->
                        <div class="feature-icon"><i class="icon icon-size-60 icon-budget icon-default"></i></div>
                        <h2>Budget Planner</h2>
                        <p>Budget estimator tool that lets you specify your program plan.</p>
                    </div>
                </div>
                <!-- /.feature block -->
                <div class="col-md-3">
                    <div class="feature-block feature-center mb30">
                        <!-- feature block -->
                        <div class="feature-icon"><i class="icon icon-size-60 icon-group icon-default"></i></div>
                        <h2>Guest list</h2>
                        <p>Build your free wedding guest list, collect mailing addresses and RSVPs.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-block feature-center mb30">
                        <!-- feature block -->
                        <div class="feature-icon"><i class="icon icon-size-60 icon-table icon-default"></i></div>
                        <h2>Table Planer</h2>
                        <p>Easy online tool for creating seating arrangements for weddings.</p>
                    </div>
                </div>
                <!-- /.feature block -->
            </div>
            <!-- /.feature center -->
            <div class="row">
                <div class="col-md-12 text-center"> <a href="#" class="btn btn-primary">Get Started</a> </div>
            </div>
        </div>
    </div>
    <!-- Feature Blog End -->
    <div class="section-space20 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb20 text-center">
                        <h1>Big January Sale, 2018</h1>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="vendor-total-list mb30">
                        <!-- vendor-total-list -->
                        <div class="vendor-total-thumb">
                            <!-- vendor-total-thumb -->
                            <a href="#"><img src="https://rukminim1.flixcart.com/flap/960/960/image/536441.jpg?q=50" class="img-responsive" alt=""></a>
                        </div>
                        <!-- /.vendor-total-thumb -->
                        <div class="well-box vendor-total-info">
                            <!-- vendor-total-info -->
                            <h2 class="vendor-total-title"><a href="#" class="title">Wedding Venues </a><span class="badge badge-primary">12+</span> </h2>
                        </div>
                        <!-- /.vendor-total-info -->
                    </div>
                    <!-- /.vendor-total-list -->
                </div>
                <div class="col-md-4">
                    <div class="vendor-total-list mb30">
                        <!-- vendor-total-list -->
                        <div class="vendor-total-thumb">
                            <!-- vendor-total-thumb -->
                            <a href="#"><img src="https://rukminim1.flixcart.com/flap/960/960/image/241469.jpg?q=50" class="img-responsive" alt=""></a>
                        </div>
                        <!-- /.vendor-total-thumb -->
                        <div class="well-box vendor-total-info">
                            <!-- vendor-total-info -->
                            <h2 class="vendor-total-title"><a href="#" class="title">Wedding Cakes </a><span class="badge badge-primary">10+</span> </h2>
                        </div>
                        <!-- /.vendor-total-info -->
                    </div>
                    <!-- /.vendor-total-list -->
                </div>
                <div class="col-md-4">
                    <div class="vendor-total-list mb30">
                        <!-- vendor-total-list -->
                        <div class="vendor-total-thumb">
                            <!-- vendor-total-thumb -->
                            <a href="#"><img src="https://rukminim1.flixcart.com/flap/960/960/image/6d6ef5.jpg?q=50" class="img-responsive" alt=""></a>
                        </div>
                        <!-- /.vendor-total-thumb -->
                        <div class="well-box vendor-total-info">
                            <!-- vendor-total-info -->
                            <h2 class="vendor-total-title"><a href="#" class="title">Wedding Venues </a><span class="badge badge-primary">12+</span> </h2>
                        </div>
                        <!-- /.vendor-total-info -->
                    </div>
                    <!-- /.vendor-total-list -->
                </div>
         
            <div class="row">
                <div class="col-md-12 text-center"><a href="#" class="btn btn-default btn-lg">View All Deals</a></div>
            </div>
        </div>
    </div>
    </div>
    <div class="section-space20">
        <!-- Real Weddings -->
        <div class="container">
                       <div class="row">
          <link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>

<div class="carousel-wrapper" style="margin-top:60px;">
  <div class="carousel" data-flickity>
    <div class="carousel-cell">
      <h3>Bamboo Products</h3>
      <a class="more" href="">Explore more</a>
      <img src="https://images.unsplash.com/photo-1464305795204-6f5bbfc7fb81?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=" />
      <div class="line"></div>
      <div class="price">
        <span>225<sup><i class="fa fa-inr" aria-hidden="true"></i></sup></span>
      </div>
    </div>
    <div class="carousel-cell">
      <h3>Indian Spices</h3>
      <a class="more" href="">Explore more</a>
      <img src="https://images.unsplash.com/photo-1464305795204-6f5bbfc7fb81?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=" />
      <div class="line"></div>
      <div class="price">
        <span>225<sup><i class="fa fa-inr" aria-hidden="true"></i></sup></span>
      </div>
    </div>
    <div class="carousel-cell">
      <h3>Cratfs</h3>
      <a class="more" href="">Explore more</a>
      <img src="https://images.unsplash.com/photo-1464305795204-6f5bbfc7fb81?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=" />
      <div class="line"></div>
      <div class="price">
        <span>225<sup><i class="fa fa-inr" aria-hidden="true"></i></sup></span>
      </div>
    </div>
  </div>
</div>

       <div class="col-md-12 text-center"><a href="#" class="btn btn-default btn-lg">View More Inspirations</a></div>
            </div>
            <div class="row">
         
            </div>
        </div>
    </div>
    <!-- /.Real Weddings -->
    <section class="module parallax parallax-2">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 parallax-caption">
                    <h2>Are you trying our planning tools ?</h2>
                    <p>Donec sagittis blandit ex consequat pulvinm condimentum tortor lorem ipsum oleo sit ament eitae suscipit augupibus. </p>
                    <a href="#" class="btn btn-primary">Start Planning Today</a> </div>
            </div>
        </div>
    </section>
    <div class="section-space80 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb60 text-center">
                        <h1>Most Reason to Why Choose us</h1>
                        <p>Donec sagittis blandit ex consequat pulvinm condimentum tortor eitae suscipit augupibus </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="well-box feature-block text-center">
                        <div class="feature-icon"><i class="icon-heart-4 icon-size-60 icon-light"></i></div>
                        <div class="feature-info">
                            <h3>20 Years Experiance</h3>
                            <p>We are never short of suggestions or inspiring ideas.We will support you and advise you.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="well-box feature-block text-center">
                        <div class="feature-icon"><i class="icon-newly-married-couple icon-size-60 icon-light"></i></div>
                        <div class="feature-info">
                            <h3>100 real weddings</h3>
                            <p>Every wedding is unique and has a special story. Share all the details of your special moments.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="well-box feature-block text-center">
                        <div class="feature-icon"><i class="icon-curtains icon-size-60 icon-light"></i></div>
                        <div class="feature-info">
                            <h3>1500 + Wedding Suppliers</h3>
                            <p> Sed semper sapien commodo iaculis nec quis lacus malesuada, icula tortor. ut turpiliquepellentesque. </p>
                        </div>
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
                    <h2>Wedding.Vendor</h2>
                    <p>At Wedding Vendor our purpose is to help people find great online network connecting wedding suppliers and wedding couples who use those suppliers. <a href="#">Start Find Vendor!</a></p>
                    <a href="#" class="btn btn-default">Find a Vendor</a> </div>
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
                <div class="col-md-12">Copyright © 2018. All Rights Reserved</div>
            </div>
        </div>
    </div>
    <!-- /. Tiny Footer -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Flex Nav Script -->
    <script src="js/jquery.flexnav.js" type="text/javascript"></script>
    <script src="js/navigation.js"></script>
    <!-- slider -->
    <script src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
    <!-- sticky header -->
    <script type="text/javascript">
    //jQuery to collapse the navbar on scroll
    $(window).scroll(function() {
        if ($(".header-v2").offset().top > 50) {
            $(".navbar-fixed-top").addClass("top-nav-collapse");
        } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
        }
    });
    </script>
</body>

</html>
