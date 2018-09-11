<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-type">
    <meta name="author" content="Migrate Hub">
    <meta name="copyright" content="This content is copyright by MigrateHub">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keyword; ?>">
    <meta name = "robots" content="index/follow" />
    <title><?php echo $title; ?></title>    

    <!-- Favicon -->
    <link rel="shortcut icon" href="fevicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">    
    <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">  
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" type="text/css">  
    <!-- Material CSS -->
    <link rel="stylesheet" href="assets/css/material-kit.css" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" type="text/css"> 
    <link rel="stylesheet" href="assets/fonts/themify-icons.css"> 

    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/extras/animate.css" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/extras/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/extras/owl.theme.css" type="text/css">
    <!-- Rev Slider CSS -->
    <link rel="stylesheet" href="assets/extras/settings.css" type="text/css"> 
    <!-- Slicknav js -->
    <link rel="stylesheet" href="assets/css/slicknav.css" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="assets/css/colors/red.css" media="screen" />

    <link rel="stylesheet" href="assets/alertifyjs/css/alertify.min.css" />
<!-- include a theme -->
    <link rel="stylesheet" href="assets/alertifyjs/css/themes/default.min.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113923934-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-113923934-1');
</script>

    
  </head>

  <body>  
      <!-- Header Section Start -->
      <div class="header">    
        <!-- Start intro section -->
        <section style="background-image: url('images/Country11.jpg'); background-position: center center;height: auto; width: 100%;">
          <div class="logo-menu">
            <nav class="navbar navbar-default" data-spy="affix" data-offset-top="50">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand logo" href="/"><img src="assets/img/MigrateHUB-logo-PNG.png" alt=""></a>
                </div>

                <div class="collapse navbar-collapse" id="navbar">              
                <!-- Start Navigation List -->
                <ul class="nav navbar-nav"> 
                 
                  <li>
                    <a href="/"<?php if($active=='Home') echo "class='active'"; ?>>
                    Home
                    </a>
                  </li>
                  <li>
                    <a href="services.php"<?php if($active=='services') echo "class='active'"; ?>>
                    Services<i class="fa fa-angle-down" style="padding-left: 5px;"></i>
                    </a>
                    <ul class="dropdown">
                      <li>
                        <a href="migrate-overseas.php"<?php if($active=='migrate-overseas') echo "class='active'"; ?>>
                       Migrate Overseas
                        </a>
                      </li>
                      <li>
                        <a href="settle-abroad.php"<?php if($active=='settle-abroad') echo "class='active'"; ?>>
                        Settle Abroad
                        </a>
                      </li>
                      
                      <li>
                        <a href="student-visas.php"<?php if($active=='student-visas') echo "class='active'"; ?>>
                       Student Visas
                        </a>
                      </li>
                      <li>
                        <a href="invest-abroad.php"<?php if($active=='invest-abroad') echo "class='active'"; ?>>
                       Invest Abroad
                        </a>
                      </li>
                     
                      <li>
                        <a href="evaluations.php"<?php if($active=='evaluations') echo "class='active'"; ?>>
                        Evaluation
                        </a>
                      </li>
                      <li>
                        <a href="dependent-visas.php"<?php if($active=='dependent-visas') echo "class='active'"; ?>>
                       Dependent Visas
                        </a>
                      </li>
                      <li>
                        <a href="concierge-services.php"<?php if($active=='concierge-services') echo "class='active'"; ?>>
                       Concierge Services
                        </a>
                      </li>
                      <li>
                        <a href="other.php"<?php if($active=='other') echo "class='active'"; ?>>
                        Others
                        </a>
                      </li>
                      
                    </ul>
                  </li>
                  <li>
                    <a href="products.php"<?php if($active=='products') echo "class='active'"; ?>>
                    Products 
                    </a>
                   
                  </li>
                  <li>
                    <a href="online-store.php"<?php if($active=='online-store') echo "class='active'"; ?>>
                    Online Store
                    </a>
                    
                  </li>

                  <li>
                    <a href="http://migratehub.com/news/" <?php if($active=='News') echo "class='active'"; ?>>
                    News Blog
                    </a>
                    
                  </li>
                  <li>
                    <a href="#">
                    Others <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown">
                      <li>
                        <a href="about-us.php"<?php if($active=='about-us') echo "class='active'"; ?>>
                        About Us
                        </a>
                      </li>
                      <li>
                        <a href="contact-us.php"<?php if($active=='contact-us') echo "class='active'"; ?>>
                       Contact Us
                        </a>
                      </li>
                      <li><a href="successlist.php"<?php if($active=='successlist') echo "class='active'"; ?>>Success List</a></li>
                      <li>
                        <a href="faqs.php"<?php if($active=='faqs') echo "class='active'"; ?>>
                       FAQs
                        </a>
                      </li>
                      <li>
                        <a href="testimonials.php"<?php if($active=='testimonials') echo "class='active'"; ?>>
                       Testimonials
                        </a>
                      </li>
                      
                  
                    </ul>
                  </li>
                </ul>
                 <ul class="nav navbar-nav navbar-right float-right">
                  <li class="left"><a href="migrate-now.php"><i class="ti-pencil-alt"></i>Migrate Now</a></li>
                  <li class="right"><a href="client-login.php"><i class="ti-lock"></i>Client LogIn</a></li>
                </ul>
              </div>
            </div>
            <!-- Mobile Menu Start -->
            <ul class="wpb-mobile-menu">
               <li>
                    <a class="active" href="index.php">
                    Home
                    </a>
                  </li>
                  <li>
                    <a href="services.php">
                    Services
                    </a>
                    <ul class="dropdown">
                      <li>
                        <a href="migrate-overseas.php">
                       Migrate Overseas
                        </a>
                      </li>
                      <li>
                        <a href="settle-abroad.php">
                        Settle Abroad
                        </a>
                      </li>
                      
                      <li>
                        <a href="student-visas.php">
                       Student Visas
                        </a>
                      </li>
                      <li>
                        <a href="invest-abroad.php">
                       Invest Abroad
                        </a>
                      </li>
                     
                      <li>
                        <a href="evaluations.php">
                        Evaluation
                        </a>
                      </li>
                      <li>
                        <a href="dependent-visas.php">
                       Dependent Visas
                        </a>
                      </li>
                      <li>
                        <a href="concierge-services.php">
                       Concierge Services
                        </a>
                      </li>
                      <li>
                        <a href="other.php">
                        Others
                        </a>
                      </li>
                      
                    </ul>
                  </li>
                  <li>
                    <a href="products.php">
                    Products 
                    </a>
                   
                  </li>
                  <li>
                    <a href="online-store.php">
                    Online Store
                    </a>
                    
                  </li>

                  <li>
                    <a href="http://migratehub.com/news/">
                    News Blog
                    </a>
                    
                  </li>
                  <li>
                    <a href="#">
                    Others
                    </a>
                    <ul class="dropdown">
                      <li>
                        <a href="about-us.php">
                        About Us
                        </a>
                      </li>
                      <li>
                        <a href="contact-us.php">
                       Contact Us
                        </a>
                      </li>
                      <li><a href="successlist.php">Success List</a></li>
                      <li>
                        <a href="faqs.php">
                       FAQs
                        </a>
                      </li>
                      <li>
                        <a href="testimonials.php">
                       Testimonials
                        </a>
                      </li>
                      
                  
                    </ul>
                  </li>      
            </ul>
            <!-- Mobile Menu End --> 
          </nav>

          <div class="navmenu navmenu-default navmenu-fixed-left offcanvas"> 
          <!--- Off Canvas Side Menu -->
            <div class="close" data-toggle="offcanvas" data-target=".navmenu">
                <i class="ti-close"></i>
            </div>
              <h3 class="title-menu">All Pages</h3>
              <ul class="nav navmenu-nav">
                <li>
                    <a class="active" href="index.php">
                    Home
                    </a>
                  </li>

<li>
                        <a href="migrate-overseas.php">
                       Migrate Overseas
                        </a>
                      </li>
                      <li>
                        <a href="settle-abroad.php">
                        Settle Abroad
                        </a>
                      </li>
                      
                      <li>
                        <a href="student-visas.php">
                       Student Visas
                        </a>
                      </li>
                      <li>
                        <a href="invest-abroad.php">
                       Invest Abroad
                        </a>
                      </li>
                     
                      <li>
                        <a href="evaluations.php">
                        Evaluation
                        </a>
                      </li>
                      <li>
                        <a href="dependent-visas.php">
                       Dependent Visas
                        </a>
                      </li>
                      <li>
                        <a href="concierge-services.php">
                       Concierge Services
                        </a>
                      </li>
                      <li>
                        <a href="other.php">
                        Others
                        </a>
                      </li>

<li>
                    <a href="products.php">
                    Products 
                    </a>
                   
                  </li>
                  <li>
                    <a href="online-store.php">
                    Online Store
                    </a>
                    
                  </li>

                  <li>
                    <a href="http://migratehub.com/news/">
                    News Blog
                    </a>
                    
                  </li>

<li>
                        <a href="about-us.php">
                        About Us
                        </a>
                      </li>
                      <li>
                        <a href="contact-us.php">
                       Contact Us
                        </a>
                      </li>
                      <li><a href="successlist.php">Success List</a></li>
                      <li>
                        <a href="faqs.php">
                       FAQs
                        </a>
                      </li>
                      <li>
                        <a href="testimonials.php">
                       Testimonials
                        </a>
                      </li>
                      


            </ul><!--- End Menu -->
          </div> 
          <div class="tbtn wow pulse" id="menu" data-wow-iteration="infinite" data-wow-duration="500ms" data-toggle="offcanvas" data-target=".navmenu">
            <p><i class="ti-files"></i> All Pages</p>
          </div>
      </div>
      <!-- Header Section End -->   