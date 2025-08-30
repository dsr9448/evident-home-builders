<?php include 'content.php';
include './admin/includes/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Evident Home Builders">
  <link href="./assets/images/favicon/favicon.png" rel="icon">
  <title>Evident Home Builders</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Barlow:400,500,600,700%7cHeebo:400,500,700&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
  <link rel="stylesheet" href="./assets/css/libraries.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  
</head>

<body>
  <div class="wrapper">
    <!-- <div class="preloader">
      <div class="loading">
        <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
      </div>
    </div> -->
    <!-- /.preloader -->
    <!-- =========================
        Header
    =========================== -->
    <header class="header header-layout2">
      <nav class="navbar navbar-expand-lg">
        <div class="container ">
          <a class="navbar-brand" href="index.php">
            <img src="./assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
          </a>
          <div class="header-topbar d-none d-lg-block">
            <div class="d-flex flex-wrap">
              <ul class="header-topbar__contact d-flex flex-wrap list-unstyled mb-0">
                <li>
                  <i class="icon-phone1"></i>
                  <div>
                    <span>Call Us:</span><strong><a href="tel:+919535008035 ">+91 9535008035</a></strong>
                  </div>
                </li>
                <li>
                  <i class="icon-envelope1"></i>
                  <div>
                    <span>Email Us:</span><strong><a href="mailto:info@evidenthomebuilders.in">info@evidenthomebuilders.in</a></strong>
                  </div>
                </li>
            
              </ul>
              <a href="estimator.php" class="btn btn__secondary header__btn">
                <i class="icon-arrow-right1"></i><span>COST ESTIMATE</span>
              </a>
            </div>
          </div><!-- /.header-topbar -->
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
        </div><!-- /.container -->
        <div class="navbar__bottom sticky-navbar">
          <div class="container ">
            <div class="collapse navbar-collapse" id="mainNavigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav__item">
                  <a href="index.php" class="nav__item-link ">Home</a>
                </li> <li class="nav__item">
                  <a href="about.php" class="nav__item-link ">About Us</a>
                </li>
               
                <li class="nav__item with-dropdown">
                  <a href="services.php" class="dropdown-toggle nav__item-link ">Services</a>
                  <i data-toggle="dropdown" class="fa fa-angle-down d-block d-lg-none"></i>
                  <ul class="dropdown-menu">
                    <?php foreach(services as $service){ ?>
                    <li class="nav__item"><a href="service.php?<?php echo $service['title']; ?>" class="nav__item-link"><?php echo $service['title']; ?></a></li>
                    <?php } ?>
             
                    <!-- /.nav-item -->
                  </ul><!-- /.dropdown-menu -->
                </li><!-- /.nav-item -->

            
                <li class="nav__item">
                  <a href="projects.php" class="nav__item-link ">Projects</a>
                </li>
                <li class="nav__item">
                  <a href="gallery.php" class="nav__item-link ">Gallery</a>
                </li>
                <li class="nav__item">
                  <a href="contact.php" class="nav__item-link ">Contact Us</a>
                </li>
                <li class="nav__item d-block d-md-none" >
                  <a href="estimator.php" class="nav__item-link ">                 <span>COST ESTIMATE</span> 
                  </a>
                </li>
              </ul><!-- /.navbar-nav -->
             
            </div><!-- /.navbar-collapse -->

          </div><!-- /.container -->
        </div><!-- /.navbar-bottom -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->