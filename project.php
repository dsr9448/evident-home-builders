<?php 
$name = urldecode($_SERVER['QUERY_STRING']);
if ($name == '') {
  header("Location: projects.php");
  exit();
}
include 'layout/header.php';
$projectdata = projects[$name];
 ?>

<section class="page-title page-title-layout5 bg-overlay bg-parallax text-center">

      <div class="bg-img"><img
      src="assets/images/banners/about-banner.jpg"
      alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle__heading"><?php echo $projectdata['title']; ?></h1>
            <nav>
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="projects.php">Projects</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $projectdata['title']; ?></li>
              </ol>
            </nav>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
    <section class="portfolio-slider pb-0">

      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="carousel-arrows-light slick-carousel"
              data-slick='{"slidesToShow": 1, "arrows": false, "dots": true, "centerMode": true, "centerPadding": "300px","responsive": [ {"breakpoint": 992, "settings": {"centerPadding": "40px"}}]}'>
              <?php foreach($projectdata['images'] as $image){ ?>
              <img src="assets/images/projects/<?php echo $image; ?>" alt="slider">
              <?php } ?>
            </div><!-- /.portfolio-slider -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <section class="text-content pt-90 pb-90">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
            <div class="text__block">
              <h5 class="text__block-title mb-30">Overview of <?php echo $projectdata['title']; ?></h5>
              <div class="text__block-content">
                <p class="text__block-desc text-justify"><?php echo $projectdata['description']; ?></p>
             
              </div>
            </div><!-- /.text-block -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-5">
            <ul class="portfolio-item__meta-list list-unstyled mt-60 mb-30">
              <?php foreach($projectdata['features'] as $key => $value){ ?>
              <li><strong><?php echo $key; ?>:</strong><span><?php echo $value; ?></span></li>
              <?php } ?>
            </ul>
            <a href="contact.php" class="btn btn__secondary btn__lg">
              <i class="icon-arrow-right1"></i><span>Get in touch</span>
            </a>
          </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Text Content -->

 


<?php include 'layout/footer.php' ?>
