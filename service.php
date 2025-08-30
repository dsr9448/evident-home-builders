<?php
$slug = urldecode($_SERVER['QUERY_STRING']);
if ($slug == '') {
  header("Location: services.php");
  exit();
}
include 'layout/header.php';
$servicedata= services[$slug];
?>
<section class="page-title page-title-layout5 bg-overlay bg-parallax text-center">
      <div class="bg-img"><img
      src="assets/images/banners/about-banner.jpg"
      alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 ">
            <h1 class="pagetitle__heading"><?php echo $servicedata['title']; ?></h1>
            <nav>
              <ol class="breadcrumb justify-content-center mb-0">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="services.php">Services</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $servicedata['title']; ?></li>
              </ol>
            </nav>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
    <section class="text-content-section pb-90">
      <div class="container">
        <div>
             <div class="text__block mb-30">
            <h5 class="text__block-title"><?php echo $servicedata['title']; ?> </h5>
            <p class="text__block-desc"><?php echo $servicedata['subtitle']; ?></p>
            <p class="text__block-desc"><?php echo $servicedata['description']; ?></p>
          </div><!-- /.text-block -->
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="features-list mb-30">
                <div class="row">
                  <?php foreach($servicedata['features'] as $feature){ ?>
                  <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="feature-list-item">
                      <div class="feature-item__content">
                        <h4 class="feature-item__title mb-0 pb-0"><?php echo $feature; ?></h4>

                      </div><!-- /.feature-content -->
                    </div><!-- /.feature-item -->
                  </div><!-- /.col-lg-6 -->
                  <?php } ?>
                
                </div><!-- /.row -->
              </div><!-- /.features-list -->
            </div><!-- /.col-lg-12 -->
          </div>



          <div class="video-banner mb-50">
            <img src="assets/images/services/<?php echo $servicedata['image']; ?>" alt="banner">
    
           <?php if ($slug == 'Custom & Luxury Home Construction') { ?>
            <div class="text__block  mt-30">
            <h5 class="text__block-title"><?php echo villa['title']; ?> </h5>
            <p class="text__block-desc"><?php echo villa['subtitle']; ?></p>
            <p class="text__block-desc"><?php echo villa['description']; ?></p>
          </div><!-- /.text-block -->
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="features-list mb-30">
                <div class="row">
                  <?php foreach(villa['features'] as $feature){ ?>
                  <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="feature-list-item">
                      <div class="feature-item__content">
                        <h4 class="feature-item__title mb-0 pb-0"><?php echo $feature; ?></h4>

                      </div><!-- /.feature-content -->
                    </div><!-- /.feature-item -->
                  </div><!-- /.col-lg-6 -->
                  <?php } ?>
                
                </div><!-- /.row -->
              </div><!-- /.features-list -->
            </div><!-- /.col-lg-12 -->
          </div>

           <?php } ?>         


          </div><!-- /.video -->

          <div class="portfolio-grid-layout">
  
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 text-center mb-60">
                <a href="projects.php" class="btn btn__primary">
                  <span>Explore All Projects</span>  <i class="icon-arrow-right1 ms-2"></i>
                </a>
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
          </div>
        </div>
   
      </div><!-- /.container -->
      <?php if ($slug == 'Turnkey Project Management') { ?>


      <section class="pricing py-0">
      <div class="container col-padding-0">
        <div class="row">
          <!-- pricing item #1-->
          <div class="col-12">
            <div class="pricing-item">
          <div class="row align-items-center">
            <div class="col-md-6">    <div class="pricing-item__header">
                <div class="pricing-item__price">
                  <span class="pricing-item__currency">&#8377;1899 </span><span class="pricing-item__time">/sqft</span>
                </div>
                <p class="pricing-item__desc">Fast project turnaround time, substantial cost savings & quality
                  standards.
                </p>
                <h5 class="pricing-item__title">premium  package</h5>
              </div><!--  Pricing header  --></div>
            <div class="col-md-6">

              <a class="btn btn__primary btn__block" href="estimator.php">Get a Free Estimate</a>
              <a class="btn btn__secondary btn__block mt-3" href="contact.php">Contact Us</a>
            </div>
          </div>
        
            </div>
          </div><!-- /.pricing-item -->
          <!-- pricing item #2-->
          
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.pricing  -->
    <?php } ?>
    </section>
<?php include 'layout/footer.php' ?>
