<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<link rel="profile" href="http://gmpg.org/xfn/11">
	    <meta name="description" content="Shopping Cart">
	    <meta name="author" content="Benjamin">

		<title>Jamins |</title>

		<!-- /all in one seo pack -->
	    <link rel="dns-prefetch" href="http://fonts.googleapis.com/">
	    <link rel="dns-prefetch" href="http://s.w.org/">


		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
	<link rel="stylesheet" 
    href="<?php print HTTP_VENDOR_PATH; ?>fontawesome/css/all.css">

    <link rel="stylesheet" href="<?php print HTTP_VENDOR_PATH; ?>fontawesome/css/fontawesome.min.css.css">
    <link rel="stylesheet" href="<?php print HTTP_VENDOR_PATH; ?>css/kbootstrap.min.css">

	<link rel="stylesheet" href="<?php print HTTP_CSS_PATH; ?>bootstrap.min.css">
    <link rel="stylesheet" href="<?php print HTTP_CSS_PATH; ?>slick.css">
    <link rel="stylesheet" href="<?php print HTTP_CSS_PATH; ?>slick-theme.css">
    <link rel="stylesheet" href="<?php print HTTP_CSS_PATH; ?>nouislider.min.css">
    <link rel="stylesheet" href="<?php print HTTP_CSS_PATH; ?>font-awesome.min.css">
    <link rel="stylesheet" href="<?php print HTTP_CSS_PATH; ?>register.css">
    <link rel="stylesheet" href="<?php print HTTP_CSS_PATH; ?>mystyle.css">
    <link rel="stylesheet" href="<?php print HTTP_CSS_PATH; ?>cart.css">

		
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +234-812-9944-224</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> info@jamin.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> No 2, Jamins Close</a></li>
						<li style="color: white;"><i class="fa fa-clock"></i>
							<span id=tick2></span>&nbsp;|
                            <?php
                            	$date = new DateTime();
                            	echo $date->format('l, F jS, Y');
                            ?>
						</li>
					</ul>
					
					<ul class="header-links pull-right">
						<li>
							<?php
            //set the error message
ini_set('display_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
//$dbname = "SHOPPING";

// Create connection
$conn = new mysqli(/*$servername, $username, $password, $dbname*/);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

                //session_start();

                    //if(!isset($_SESSION['email'])||isset($_COOKIE['SHOPPING'])){

                    // set the session
                        if(isset($_SESSION['email']) && isset($_COOKIE['SHOPPING'])){
                            $_SESSION['email'] = $_COOKIE['SHOPPING'];
                        //}

                // Connection to Database 
                    $dbs = mysql_connect("localhost", "root", "");
                        mysql_select_db("SHOPPING", $dbs);
 
                        $result = mysql_query("SELECT name FROM customers WHERE 
                            email='".$_SESSION['email']."'", $dbs);

                        while ($myrow = mysql_fetch_array($result)){
                            $name = $myrow['name'];
                            echo '';
                        }

                        echo '<b>' .$name.'</b>';
                        echo '<a href="logout.php">
                        <span class="glyphicon glyphicon-log-out"></span> Sign out</a>
                        ';
                    } else {?>
							<li>
								<i class="fa fa-user"></i> <a href="<?php print site_url();?>signup">Sign up</a>
							</li>
							<li>
								<i class="fa fa-user-o"></i> <a href="<?php print site_url();?>account">My Account</a>
							</li>

							<?php                        
						
                    }
                ?>
						
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="<?php print site_url();?>product" class="logo">
									<img src="<?php print HTTP_IMAGES_PATH;?>logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form id="header-search-form">
									<!-- <select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
									</select> -->
									<input class="input round" placeholder="Search Item">
									<button class="search-btn"><i class="fa fa-search"></i></button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
											Wishlist
										<span id="wishlist-item">
                            					<span id="wishlist" class="badge badge-default" style="background-color: #D10024;"> 
                                					0       
                            					</span>
                        					</span> 
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									
									<a class="cart-links" href="<?php print site_url();?>cart">										
                            			<i class="fa fa-shopping-cart ft-19 text-white"></i>            
                        					Cart 
                        					<span id="go-to-basket-item">
                            					<span id="go-to-basket" class="badge badge-default" style="background-color: #D10024;"> 
                                					<?php
						                                if (!empty($this->cart->contents())) {
						                                    print count($this->cart->contents());
						                                } else {
						                                    print 0;
						                                }
						                            ?>        
                            					</span>
                        					</span>                            		
									</a>									
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="<?php print site_url();?>product">Home</a></li>
						 <li class="dropdown">
                    		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Electronics<b class="caret"></b></a>
                        		<ul class="dropdown-menu">
                            		<li>
                            			<a href="itemlist.php?category=Phone">Phones</a>
                            		</li>
                            		<li>
                            			<a href="itemlist.php?category=Laptop">Laptops</a>
                            		</li>
                            		<li><a href="itemlist.php?category=Camera">Cameras</a>
                           			</li>
                            		<li><a href="itemlist.php?category=Television">
                                    Televisions
                                		</a>
                            		</li>
                        		</ul>
                		</li>

						<li class="dropdown">
			                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
			                    Home & Furniture<b class="caret"></b></a>
			                        <ul class="dropdown-menu">
			                            <li><a href="index.php">Kitchen Essentials</a></li>
			                            <li><a href="index.php">Bath Essentials</a></li>
			                            <li><a href="index.php">Furniture</a></li>
			                            <li><a href="index.php">Dining & Serving</a></li>
			                            <li><a href="index.php">Cookware</a></li>
			                        </ul>
			            </li>

						<li class="dropdown">
			                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
			                    Fashion<b class="caret"></b></a>
			                        <ul class="dropdown-menu">
			                            <li><a href="index.php">Children</a></li>
			                            <li><a href="index.php">Men</a></li>
			                            <li><a href="index.php">Women</a></li>
			                            <li><a href="index.php">Unisex</a></li>                     
			                        </ul>
			            </li>

						<li><a href="#">Books</a></li>
						<li><?php echo anchor("shop/contact", "Contact us");?></li>		
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->


