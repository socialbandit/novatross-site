<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
	
	$keywords = "";
	$description = "";
	if($this->router->fetch_method()=="index"){
		$keywords = "Index, CSS, XML, XHTML, JavaScript";
		$description = "lorem ipsum dolar sit amet"; 
	}
	else if($this->router->fetch_method()=="about"){
		$keywords = "About, CSS, XML, XHTML, JavaScript";
		$description = "lorem ipsum dolar sit amet"; 
	}
	else if($this->router->fetch_method()=="document_management"){
		$keywords = "document_management, CSS, XML, XHTML, JavaScript";
		$description = "document_management ipsum dolar sit amet"; 
	}
	else if($this->router->fetch_method()=="erp"){
		$keywords = "erp, CSS, XML, XHTML, JavaScript";
		$description = "erp ipsum dolar sit amet"; 
	}
	else if($this->router->fetch_method()=="web_app_development"){
		$keywords = "erp, CSS, XML, XHTML, JavaScript";
		$description = "erp ipsum dolar sit amet"; 
	}
	else if($this->router->fetch_method()=="medical_records_scanning"){
		$keywords = "medical_records_scanning, CSS, XML, XHTML, JavaScript";
		$description = "medical_records_scanning ipsum dolar sit amet"; 
	}
	else if($this->router->fetch_method()=="awv"){
		$keywords = "awv, CSS, XML, XHTML, JavaScript";
		$description = "awv ipsum dolar sit amet"; 
	}
	else if($this->router->fetch_method()=="contact"){
		$keywords = "contact, CSS, XML, XHTML, JavaScript";
		$description = "contact ipsum dolar sit amet"; 
	}
	?>
    <meta name="description" content="<?php echo $description; ?>">
	<meta name="keywords" content="<?php echo $keywords; ?>">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico2/favicon.ico">

    

    <!-- Bootstrap core CSS -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Resources -->
    <link href="<?php echo base_url();?>fonts/font-awesome-4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/lightbox.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="<?php echo base_url();?>js/chart.js" type="text/javascript"></script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51999941-1', 'novatross.com');
  ga('send', 'pageview');

</script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  

    <!-- Navigation -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url('index');?>"><img src="img/logo.png" alt="..."></a>
        </div>
        <div class="collapse navbar-collapse">
        <a href="http://hub.novatross.com">  <button class="navbar-btn btn btn-red pull-right hidden-sm hidden-xs">Login&nbsp;</button></a>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown active">
			
              <a href="<?php echo base_url('index');?>" class="" data-toggle="">Home <b class=""></b></a>
             <!-- <ul class="dropdown-menu">
                <li><a href="index.html">Home: Default</a></li>
                
              </ul>-->
            </li>
            <li class="">
              <a href="<?php echo base_url('about');?>" class="" data-toggle="">ABOUT US <b class=""></b></a>
             <!-- <ul class="dropdown-menu">
                <li><a href="about-us.html">About Us</a></li>
                <li><a href="coming-soon.html">Coming Soon</a></li>
                <li><a href="contact-us.html">Contact Us</a></li>
                <li><a href="help-center.html">Help Center</a></li>
                <li><a href="help-item.html">Help Item</a></li>
                <li><a href="pricing-table.html">Pricing Table</a></li>
                <li><a href="responsive-video.html">Responsive Video</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="sign-in.html">Sign In</a></li>
                <li><a href="sign-up.html">Sign Up</a></li>
                <li><a href="error-page.html">404 Error Page</a></li>
              </ul>-->
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">SOLUTIONS <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url('document_management')?>">E.C.M Solutions</a></li>
                <li><a href="<?php echo base_url('erp')?>">E.R.P Solutions</a></li>
				<li><a href="<?php echo base_url('web_app_development')?>">Web & App Development</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown" data-toggle="dropdown">MED-IQ <b class="caret"></b></a>
              <ul class="dropdown-menu">
			    <li><a href="<?php echo base_url('medical_records_scanning');?>">Medical Records Scanning</a></li>
                <li><a href="<?php echo base_url('awv');?>">Annual Wellness Visit</a></li>
                
              </ul>
            </li>
            <li class="">
              <a href="<?php echo base_url ('contact')?>" class="" data-toggle="">CONTACT <b class=""></b></a>
              <!--<ul class="dropdown-menu">
                <li><a href="shop.html">Shop</a></li>
                <li><a href="shop-item.html">Shop Item</a></li>
                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                <li><a href="user-profile.html">User Profile</a></li>
              </ul>-->
            </li>
           <!-- <li class="hidden-sm">
              <a href="ui-elements.html">UI Elements</a>
            </li>-->
            <!-- Navbar Search -->
            <li class="hidden-xs" id="navbar-search">
              <a href="#">
                <i class="fa fa-search"></i>
              </a>
              <div class="hidden" id="navbar-search-box">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </li>
          </ul>
          <!-- Mobile Search -->
          <form class="navbar-form navbar-right visible-xs" role="search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search">
              <span class="input-group-btn">
                <button class="btn btn-red" type="button">Search!</button>
              </span>
            </div>
          </form>
        </div><!--/.nav-collapse -->
      </div>
    </div> <!-- / .navigation -->