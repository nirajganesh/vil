<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Vaswani Industries Limited - Sponge Iron, Forging Ingots and Billets">
    <meta name="author" content="Digikraft Social">

    <!-- Page Title -->
    <title> Sponge Iron, Forging Ingots and Billets &amp; Power -  Vaswani Industries Limited </title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?=base_url('assets/')?>images/favicon.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('assets/')?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>fonts/font-awesome/css/font-awesome.min.css">

    <!-- Flex Slider -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/owl.theme.min.css">

    <!-- Custom styles for this template -->
    <link href="<?=base_url('assets/')?>css/style.css" rel="stylesheet">
    
</head>
<body class="homepage">

    <!-- Preloader -->
    <div class="loader-wrapper">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
    </div>

    <!-- Page Wrapper -->
    <div class="wrapper">
        <!-- Header Section -->
        <header>
            <div class="header-area">

                <!-- Top Contact Info -->
                <div class="row logo-top-info">
                    <div class="container">
                        <div class="col-md-3 logo">
                            <!-- Main Logo -->
                            <a href="<?=base_url()?>"><img src="<?=base_url('assets/')?>images/logo.png" alt="Logo" /></a>
                            <!-- Responsive Toggle Menu -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                                <span class="sr-only"> Main Menu </span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="col-md-9 top-info-social">
                            <div class="pull-right">
                                <div class="top-info">
                                    <div class="call">
                                        <h3> CALL US </h3>
                                        <p> +91 <?=$web->phone1?></p>
                                    </div>
                                    <div class="email">
                                        <h3> EMAIL US </h3>
                                        <p> <?=$web->email1?></p>
                                    </div>
                                    <!-- <div class="market">
                                        <h3> MARKET </h3>
                                        <p> 256.78 <span class="forex"> <i class="fa fa-caret-up" aria-hidden="true"></i> + 4.26 </span> </p>
                                    </div> -->
                                </div>
                                <div class="social">
                                    <ul class="social-icons">
                                        <li><a href="<?=$web->fblink?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="<?=$web->twitterlink?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="<?=$web->linkedin?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Navigation Section -->
                <nav id="navbar" class="collapse navbar-collapse main-menu">
                    <div class="container">
                        <ul class="main-menu">
                            <li class="active"> <a href="<?=base_url()?>"> Home </a></li>
                            <li class="dropdown"> <a href="<?=base_url('About')?>" data-toggle="dropdown"> About
                                <i class="fa fa-chevron-down dropdown-toggle"> </i>  </a>
                                <ul>
                                    <li> <a href="<?=base_url('About/1')?>"> The Company </a> </li>
                                    <li> <a href="<?=base_url('About/2')?>"> Our Vision &amp; Mission </a> </li>
                                    <li> <a href="<?=base_url('About/3')?>"> Chairman's Message</a> </li>
                                    <li> <a href="<?=base_url('About/4')?>"> Board of Directors</a> </li>
                                    <li> <a href="<?=base_url('About/5')?>"> Committees </a> </li>
                                    <li> <a href="<?=base_url('About/6')?>"> Familiarization Programme </a> </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="<?=base_url('Products')?>" data-toggle="dropdown"> Our Products
                                <i class="fa fa-chevron-down dropdown-toggle"> </i>  </a>
                                <ul>
                                    <li> <a href="<?=base_url('Products/1')?>"> Forging Ingots/Billets</a> </li>
                                    <li> <a href="<?=base_url('Products/2')?>"> Sponge Iron </a> </li>
                                    <li> <a href="<?=base_url('Products/3')?>"> Power </a> </li>
                                </ul>
                            </li>
                            <li><a href="<?=base_url('News')?>"> News &amp; Media </a> </li>
                            <li class="dropdown"><a href="<?=base_url('Investors')?>" data-toggle="dropdown"> INVESTORS
                                <i class="fa fa-chevron-down dropdown-toggle"> </i>  </a>
                                <ul>
                                    <li> <a href="<?=base_url('Investors/investor_financial')?>"> Financials</a> </li>
                                    <li> <a href="<?=base_url('Investors/investor_disclosure')?>"> Disclosures </a> </li>
                                    <li> <a href="<?=base_url('Investors/investor_listing')?>"> Listing Information </a> </li>
                                    <li> <a href="<?=base_url('Investors/investor_policies')?>"> Policies </a> </li>
                                    <li> <a href="<?=base_url('Investors/investor_other')?>"> Others </a> </li>
                                </ul>
                            </li>

                            <!-- <li class="dropdown"> <a href="<?//=base_url('Investors')?>" data-toggle="dropdown"> INVESTORS
                                <i class="fa fa-chevron-down dropdown-toggle"> </i>  </a>
                                <ul>
                                    <li class="dropdown"> <a href="<?//=base_url('Investors')?>" data-toggle="dropdown"> Financials 
                                       <i class="fa fa-chevron-down dropdown-toggle"> </i>
                                        <ul style="background-color: #F4F5F8;margin-top:15px;" class="dropdown-menu dropdown-submenu-left">
                                           <li> <a  class="dropdown-item" style="margin-top:-50px;" href="<?//=base_url('Investors')?>"> Annual Reports</a> </li>
                                           <li> <a class="dropdown-item" href="<?//=base_url('Investors')?>"> Quarterly Results</a> </li>
                                           <li> <a  class="dropdown-item" href="<?//=base_url('Investors')?>"> Related Party Disclosure</a> </li>
                                        </ul> 
                                      </a> 
                                    </li>
                                    <li> <a href="<?//=base_url('Investors')?>"> Annual Reports</a> </li>
                                    <li> <a href="<?//=base_url('Investors')?>"> Company Announcements</a> </li>
                                    <li> <a href="<?//=base_url('Investors')?>"> Policies </a> </li>
                                    <li> <a href="<?//=base_url('Investors')?>"> Investor Information </a> </li>
                                    <li> <a href="<?//=base_url('Investors')?>"> Corporate Governance </a> </li>
                                    <li> <a href="<?//=base_url('Investors')?>"> Investor's Contact </a> </li>
                                </ul>
                            </li> -->

                            <li><a href="<?=base_url('Careers')?>"> CAREERS </a> </li>
                            <li><a href="<?=base_url('Contact')?>"> CONTACT </a> </li>
                              
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Header Section -->