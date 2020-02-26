<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width">    
    <title>Jamin</title>    
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <meta name="description" content="Shopping Cart">
    <meta name="author" content="Benjamin">

    <!-- /all in one seo pack -->
    <link rel="dns-prefetch" href="http://fonts.googleapis.com/">
    <link rel="dns-prefetch" href="http://s.w.org/">

    <link rel="stylesheet" 
    href="<?php print HTTP_VENDOR_PATH; ?>fontawesome/css/all.css">

    <link rel="stylesheet" href="<?php print HTTP_VENDOR_PATH; ?>fontawesome/css/fontawesome.min.css.css">
    <link rel="stylesheet" href="<?php print HTTP_VENDOR_PATH; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php print HTTP_CSS_PATH; ?>slick.css">
    <link rel="stylesheet" href="<?php print HTTP_CSS_PATH; ?>slick-theme.css">
    <link rel="stylesheet" href="<?php print HTTP_CSS_PATH; ?>nouislider.min.css">
    <link rel="stylesheet" href="<?php print HTTP_CSS_PATH; ?>font-awesome.min.css">
    <link rel="stylesheet" href="<?php print HTTP_CSS_PATH; ?>style.css">
    <link rel="stylesheet" href="<?php print HTTP_CSS_PATH; ?>mystyle.css">
    <link rel="stylesheet" href="<?php print HTTP_CSS_PATH; ?>cart.css">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body class="page-template-default page page-id-116 logged-in admin-bar  customize-support" cz-shortcut-listen="true">
  <header id="masthead" class="site-header" role="banner">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                        <div id="logo">
                            <div class="site-header-inner col-sm-12">
                                <div class="site-branding">
                                    <h1 class="site-title">
                                        <a href="http://techarise.com/" title="Tech Arise" rel="home">Jamins</a>
                                    </h1>
                				    <h4 class="site-description">Everything You need</h4>
                                </div>
                            </div>
                        </div>
                    </div><!--.col-sm-3-->
                <div class="col-sm-6">
                    <div class="header-social-icon-wrap">
                        <ul class="nav navbar-nav navbar-right" style="display: inherit; float: right;">

                           


                <li class="text-right" style="display: inline;font-size: 14px;">
                    <a class="cart-links" href="<?php print site_url();?>cart"> 
                        <i class="fa fa-shopping-cart ft-19 text-white"></i>            
                        Cart <span id="go-to-basket-item">
                            <span id="go-to-basket" class="badge badge-warning"> 
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
                </li>
            </ul>
                    </div><!--.header-social-icon-wrap-->
                </div><!-- .col-sm-6-->
            </div>
        </div>
     </div>    

</header><!-- #masthead -->

<div class="main-content">
    <div class="container">
        <div id="content" class="main-content-inner">

<div class="row">
    <div class="col-sm-12 col-md-12">
	<div class="box">

