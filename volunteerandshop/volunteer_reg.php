
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
  <head>  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>1Assam</title>
    <!-- Bootstrap -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Template style.css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
	  <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	      <link rel="stylesheet" type="text/css" href="css/custom.css">
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
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<?php 

include('configproduct.php');
												

try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname","root","");
	
}
catch(Exception $e)
{
	echo 'Not connected'.$e->getMessage();
}
?>            <?php
if(@$_REQUEST['submit'])
{ 
	$imgData =($_FILES['fileToUpload']['name']);
	$name=@$_REQUEST['volname'];    
	$email=@$_REQUEST['email'];
    $mob=@$_REQUEST['mob'];
    $tbu=@$_REQUEST['tbu'];
	    $int=@$_REQUEST['int'];
    $occ=@$_REQUEST['occ'];
    	echo $tbu;
	
if(!empty($mob)) // phone number is not empty
{
    if(preg_match('/^\d{10}$/',$mob)) // phone number is valid
    {
      $mob = '0' . $mob;
	$query="INSERT INTO `volunteer`(`name`, `email`, `mob`, `tellabout`, `occup`, `interest`, `profile`) VALUES ('$name','$email','$mob','$tbu','$occ','$int','$imgData')";
	$conn->exec($query);
	echo "<script>
	$(document).ready(function(){
		$('#add-even').modal('show');

	});
		</script>";
 }
    else // phone number is not valid
    {
		echo"<script>
	$(document).ready(function(){
		$('#add-eve').modal('show');

	});
		</script>"; 
	}
}
else // phone number is empty
{
  echo 'You must provid a phone number !';
}

}
?>

<html>
 
    <body>
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
                            <li><a href="partners.php"> Partners</a></li>
                            <li><a href="members.php">Members</a></li>
                            <li><a href="http://1assam.com/services/login">Vendor</a></li>
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
                        <a href="index.html"><img src="images/logo.png" alt="Wedding Vendors" class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="navigation" id="navigation">
                        <ul>
                            <li class="active"><a href="index.php">Home</a></li>
                            <li class="active"><a href="aboutus.php">Team	</a></li>
                            <li class="active"><a href="http://1assam.com/services/">Services</a></li>
                            <li class="active"><a href="Opportunities.php">Opportunities</a></li>
                            <li class="active"><a href="http://news.1assam.com/">Media</a></li>
                            <li class="active"><a href="http://1assam.com/jobs">Jobs</a></li>
                     
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page header -->	
  
		<div class="modal modal-vcenter fade" id="contactModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
           
                  <div class="row" style="background-color: #faf9f5;">
                       <div class="col-md-1">
					   </div>
					<div class="col-md-10">

						<!-- DFB Forms -->
							<div id="c7">
								Fill out my <a href="http://womenhr.in/app/app/form?id=7">online form</a>.
							</div>
							<script type="text/javascript">
								(function(d, t) {
									var s = d.createElement(t), options = {
										'id': 7,
										'container': 'c7',
										'height': '408px',
										'form': '//womenhr.in/app/app/embed'
									};
									s.type= 'text/javascript';
									s.src = 'http://womenhr.in/app/static_files/js/form.widget.js';
									s.onload = s.onreadystatechange = function() {
										var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
										try { (new EasyForms()).initialize(options).display() } catch (e) { }
									};
									var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
								})(document, 'script');
							</script>
							<!-- End DFB Forms -->
                     </div>
                 
					<div class="col-md-1"></div>
					
                </div>
            </div>
			
		</div>
	</div>
	    <div class="tp-page-head" style="background:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCRybiCfh8183XLlyZrABFK0g-5CwwL5DYmVwmt94ns4XkGjQxsg) no-repeat center;    background-size:cover;">
        <!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="page-header text-center">
                        <h1>1 Assam Volunteer</h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">

			<div class="row" style=" text-align:center;">
				<div class="aboutus	" id="aboutus">
                                <h1>Why Register as a Volunteer with 1 Assam?</h1>
                                <p class="lead">
								
								Welcome to the world of Opportunities for Volunteer</p>
								
								<ul class="check-circle" style="text-align:justify;padding-right: 71px;text-align:center;">
                                    <li>Get number of projects to work for</li>
                                    <li>Earn experience, share your knowledge & experience for the betterment of others.</li>
                                    <li>Spread Joy & Happines through slefless services for people.</li>
                                    
                                </ul>
                                
                            </div><br>
			</div>				
            <div class="row">
		 <div class="col-md-7">
                        <div class="col-md-12 how-it-works" id="howwork">
                            
                            <div class="row">
                                <div class="col-md-7 how-it-desc">
                                    <h2>Grow Your Business By connecting larger no of  Targeted customerbase </h2>
                                    <p>Mintlime Creating the largest marketplace for Event Industry where its partner  can connect to larger no of targeted customer and grow its business with very less time & effort.
</p>
                                </div>
                                <div class="col-md-4 text-center how-it-icon"> <img src="images/vendor-1.svg" alt=""> </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 text-center how-it-icon"> <img src="images/list.svg" alt=""> </div>
                                <div class="col-md-7 how-it-desc">
                                    <h2>Enable our “Do It Your Self “ option and enjoy the freedom of doing Business   </h2>
                                    <p>Mintlime providing DIY option where its partner can operate their business by themselves using its platform and all latest technology Support with very minimum cost.
</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 how-it-desc">
                                    <h2>Empower yourself by using all latest technology support  with a minimum cost
</h2>
                                    <p>Mintlime’s bringing all latest technology support to its customer so that they can scale their business and enjoy the smart way of doing business
 </p>
                                </div>
                                <div class="col-md-4 text-center how-it-icon"> <img src="images/vendor-done.svg" alt=""> </div>
                            </div>
                        </div>
                    </div>
		
			               <div class="col-md-5">
                    <div class="well-box">
                        <p>Please fill out the form below and we will get back to you as soon as possible.</p>
                        <form method="post" enctype="multipart/form-data">
                            
                            <!-- Text input-->
                            <div class="form-group" id="input1">
                                <label class="control-label" for="volname">Volunteer Name:
                                    <span class="required">*</span>
                                </label>
                                <input id="orgname" name="volname" type="text" placeholder="Volunteer Name" class="form-control input-md" required="">
                            </div>

                            <!-- Text input-->
                            <div class="form-group" id="input2">
                                <label class=" control-label" for="email">E-Mail:
                                    <span class="required">*</span>
                                </label>
                                <input id="email" name="email" type="email" placeholder="E-Mail" class="form-control input-md" required="">
                            </div>
							   <!-- Tel input-->
                            <div class="form-group" id="input6">
                                <label class="control-label" for="mob">Mobile No.:
                                    <span class="required">*</span>
                                </label>
                                <input id="mob" name="mob" type="tel" placeholder="Enter ur Mobile Number" class="form-control input-md" required="">
                               
                            </div>

                            <!-- Dropdown Input -->
                            <div class="form-group" id="input3">
                                <label for="inter" class=" control-label">Interested In: </label>
                                    <select name="int" class="form-control" required>
                                        <option id="edu">Education</option>
                                        <option id="events">Events</option>
                                        <option id="community">Community Services</option>
                                        <option id="other">Any Other</option>
                                        
                                    </select>
                            </div>

                            <!-- Dropdown Input -->
                            <div class="form-group" id="input4">
                                <label for="occupation" class=" control-label">Occupation: </label>
                                    <select name="occ" class="form-control" required>
                                        <option id="stu">Student</option>
                                        <option id="pro">Professional</option>
                                        <option id="self">Self Employed</option>
                                        <option id="other">Others</option>
                            
                                    </select>
                            </div>

                            <!--textarea  -->
                            <div class="form-group" id="input5">
                                <label for="info" class="control-label">Tell Us About Yourself: </label>
                                    <textarea name="tbu" class="form-control" rows="3"></textarea>
                            </div>
                            

                         <div class="form-group">
                                <label for="info" class="control-label">Upload your profile</label>
								<input type="file" name="fileToUpload" id="fileToUpload">                              
                                
                            </div>
                           
                            <!-- Terms and condition -->
                            <div class="col-xs-12 form-group m-bottom-0">
                                <div class="checkbox checkbox-warning">
                                    <input type="checkbox" name="tnc" id="partner-tnc" value="true" tabindex="17">
                                    <label for="tnc" class="text-normal text-light text-gray-darker">I agree to all&nbsp;
                                        <a href="/terms/" target="_blank" class="text-info">terms and conditions</a>
                                    </label>
                                </div>
                            <div class="g-recaptcha" data-sitekey="6LcssUgUAAAAAP5ewpoSdT7u88PEm7etIK-AU3pZ"></div>
                            
                            </div>
                            <!-- Button -->
                            <div class="form-group">
                                                           
                                <input type="submit" id="submit" name="submit" value="submit"class="btn btn-primary btn-lg">
                            </div>
                        </form>
                    </div>
                </div>
			
			</div>

        </div>
		    <div class="container" style="padding-top:30px;">
		
            <div class="row pricing-container">
	
            <div class="section-space80">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb60 text-center">
                            <h1>Do you have a question ?</h1>
                        </div>
                    </div>
                    <div class="col-md-6 question-block">
                        <div class="question-answer">
                            <h2><span class="question-sign">Q</span> How  Can i join Mintlime to Grow my Businesss ?</h2>
                            <p>You can connect with us  by registering with us by following two simple steps available online .</p>
                        </div>
                        <div class="question-answer">
                            <h2><span class="question-sign">Q</span> What are the Technology Advantage i am getting for my business ?</h2>
                            <p>Mintlime providing so many features  like listing page , profile page in the website and  its also providing provision for free website to promote its partner’s business.
</p>
                        </div>
                        
                    </div>
                    <div class="col-md-6 question-block">
                        <div class="question-answer">
                            <h2><span class="question-sign">Q</span> What are the other benefit i am getting from Mintlime ?</h2>
                            <p>Mintlime’s  Special team is working on 24/7 hrs for the improvement of its partner’s business , there are lot other supporting servics already available including speciliast who can guide you to run the business cost effective way and how to scale in less time .</p>
                        </div>
                        <div class="question-answer">
                            <h2><span class="question-sign">Q</span> Can i do it from my home or shop ?</h2>
                            <p>Yes you can run your business from anywhere provided with internet support . </p>
                        </div>
                        
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
                    <h2>1Assam</h2>
                    <p>1Assam, a platform to grow, promote & nurture the abilities, skills and opportunities for people of Assam through its various initiatives & programs. We are missioned to become a unified platform for the people of Assam to represent & show off their skills, </p></div>
					
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
                                                   <div class="modal fade" id="add-even" role="dialog">
                                                    <div class="modal-dialog">

                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <!-- Form Starts Here -->
                                                               <div class="col-md-12">
                                                                    <form class="form-horizontal" method="post"enctype="multipart/form-data">
                                                                        <div class="form-group">
                                                                            <div class="col-md-7">
                                                                                <p>Success! Thank You For Showing Interest</p>
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
                                                            </div>
                                                            <div class="modal-footer">
                                                                <!-- Form Starts Here -->
                                                               <div class="col-md-12">
                                                                    <form class="form-horizontal" method="post"enctype="multipart/form-data">
                                                                        <div class="form-group">
                                                                            <div class="col-md-7">
                                                                                <p>Invalid Mobile No.</p>
                                                                            </div>
                                                                        </div>
                                                                        </form>
                                               </div>
                                                 </div>
                                                </div>
                                                </div>
                                                </div>
                                              
  
  </body>
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
	    <script type="text/javascript" src="js/thumbnail-slider.js"></script>
    <script type="text/javascript" src="js/slider.js"></script>
	    <script src="js/custom.js"></script>
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



</html>
