<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rentit App</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    
	<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
	<button type="button" class="navbar-toggle"
	data-toggle="collapse"
	data-target=".navbar-collapse">
	<span class="sr-only">Toggle Navigation</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="index.php"><image ID="Image1" src="images/logo.jpg" Height="96px" style="margin-left: 42px" Width="155px" /></a>
	<div class="navbar-collapse collapse">
	<ul class="nav navbar-nav navbar-right">
	<li><a href="register.php">Registration </a></li>
	<li><a href="#">About</a></li>
	<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Already a Member?<b	class="caret"></b>
	<ul class="dropdown-menu">
	<li class="dropdown-header"><h5> Login Here	</h5></li>
	<li><a href="#"> Forgot Username? </a></li>
	<li><a href="#"> Forgot Password? </a></li>
	</ul>
   	</li>
	<li><a href="#">Contact Us</a></li>
	</ul>
	</div>
	</div>
	</nav>
	
	
	
	
	<br/><br/>
	<br/><br/>
	<br/><br/>
	<div class="row"><div class="col-md-3"></div>
	<div class="col-md-6">
	<div class="panel panel-primary">
	<div class="panel-heading">Please Login to continue!</div>
	<div class="panel-body">
	
	<form action="script1.php" method="post">
	<form class="form-horizontal" role="form">
	
	<div class="form-group">
	<label for="email" class="control-label col-sm-2">Email:</label>
      <div class="col-sm-10">
	  <input type="email" class="form-controll" name="email" id="email"/>
	</div>
	</div><br>
	<div class="form-group">
	  <label for="pwd" class="control-label col-sm-2">Password:</label>
      <div class="col-sm-10">
	  <input type="password" id="pass" class="form-controll" name="pass" id="pass"/>
	</div></div><br>
	
	<div class="col-sm-offset-2 col-sm-10">
	<button type="submit" id="post" class="btn btn-primary">Login</button>
	</div></form></div></div>
	</div><div class="col-md-3"><image src="images/rentit.jpg" id="profile" /><br><br><br><image src="images/rent.jpg" id="profile" /></div></div>

	
	
	
	<div class="navbar navbar-inverse navbar-fixed-bottom"
	 <div class="container">
	 <div class="navbar-text pull-right">Rentit Application.
	 </div>
	 </div>
	
  </body>
</html>