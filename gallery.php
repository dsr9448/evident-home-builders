<?php include 'layout/header.php' ?>
<section class="page-title page-title-layout5 bg-overlay bg-parallax text-center">
      <div class="bg-img"><img
      src="assets/images/banners/about-banner.jpg"
      alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle__heading">Gallery</h1>
            <nav>
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
              </ol>
            </nav>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>


    <section class="portfolio-grid">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <ul class="portfolio-filter d-flex flex-wrap justify-content-center list-unstyled">
              <li><a class="filter active" href="#" data-filter="all">ALL Works</a></li>
              <li><a class="filter" href="#" data-filter=".filter-construction">Construction</a></li>
              <li><a class="filter" href="#" data-filter=".filter-architecture">Architecture</a></li>
          
              <li><a class="filter" href="#" data-filter=".filter-interior">Interior</a></li>
            </ul><!-- /.portfolio-filter  -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div id="filtered-items-wrap" class="row">
          <!-- portfolio item #1 -->
           <?php foreach(gallery as $gallerys){ ?>
          <div class="col-sm-6 col-md-6 col-lg-4 mix <?php echo $gallerys['filter']; ?>">
            <div class="portfolio-item">
              <div class="portfolio-item__img">
                <img src="assets/images/projects/<?php echo $gallerys['image']; ?>" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio-item__hover">
                <div class="portfolio-item__content">
                  <h4 class="portfolio-item__title"><a href="#"><?php echo $gallerys['title']; ?></a></h4>
                  <div class="portfolio-item__cat">
                    <a href="#"><?php echo $gallerys['category']; ?></a>
                  </div><!-- /.portfolio-cat -->
                </div><!-- /.portfolio-content -->
              </div><!-- /.portfolio-item__hover -->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
          <?php } ?>

        </div><!-- /.row -->
       
      </div><!-- /.container -->
    </section>
<?php include 'layout/footer.php' ?>
