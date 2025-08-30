<?php include 'layout/header.php';
 ?>
<section class="page-title page-title-layout5 bg-overlay bg-parallax text-center">
      <div class="bg-img"><img
      src="assets/images/banners/about-banner.jpg"
      alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle__heading">Services Us</h1>
            <nav>
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Services Us</li>
              </ol>
            </nav>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
    <section class="services-layout1 pb-90 bg-gray">
      <div class="bg-img"><img src="assets/images/backgrounds/map.png" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
            <div class="heading text-center mb-40">
              <span class="heading__subtitle">The Best A Grade Commercial & Residential Services</span>
              <h2 class="heading__title">High Quality Construction Solutions
                For Residentials & Industries!</h2>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
        <div class="row">
          <?php foreach(services as $service){  ?>
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="service-item">
              <div class="service-item__content">
                <h4 class="service-item__title"><?php echo $service['title']; ?></h4>
                <p class="service-item__desc"><?php echo $service['subtitle']; ?></p>
                <a href="service.php?<?php echo $service['title']; ?>" class="btn btn__secondary btn__link">
                  <i class="icon-arrow-right1"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.service-content -->
              <div class="service-item__img">
                <img   src="assets/images/services/<?php echo $service['image']; ?>" alt="service" class="w-100">
              </div><!-- /.service-item__img -->
            </div><!-- /.service-item -->
          </div>
          <?php } ?>
          </div>
      </div><!-- /.container -->
    </section>
<?php include 'layout/footer.php' ?>
