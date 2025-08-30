<?php 
session_start();
include 'layout/header.php' 
?>
<section class="page-title page-title-layout5 bg-overlay bg-parallax text-center">
      <div class="bg-img"><img
      src="assets/images/banners/about-banner.jpg"
      alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle__heading">Contact Us</h1>
            <nav>
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
              </ol>
            </nav>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
    
    <section class="contact-layout1 py-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="contact-panel">
              <div class="contact-panel__banner d-flex align-items-end mb-20">
                <div class="bg-img"><img src="assets/images/contact/contact.jpg" alt="banner"></div>
                <div class="contact-panel__banner__inner">
                  <!-- <h4 class="contact-panel__banner__title">Leading Way In Building & Civil Construction!</h4>
                  <p class="contact-panel__banner__desc">Yet those embrace change are thriving, building bigger, better,
                    faster & stronger products than ever before!</p> -->
                </div>
              </div><!-- /.contact-panel__banner -->
              <form class="contact-panel__form" method="post" action="enquire.php" id="contactForm">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="contact-panel__title">Get In Touch</h4>
                    <p class="contact-panel__desc mb-40">We're here to answer your questions, provide detailed information, and help you get started with our services.</p>
                    
                    <?php
                    // Display success/error messages
                    if (isset($_SESSION['success'])) {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fas fa-check-circle"></i> ' . $_SESSION['success'] . '
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                              </div>';
                        unset($_SESSION['success']);
                    }
                    
                    if (isset($_SESSION['error'])) {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fas fa-exclamation-circle"></i> ' . $_SESSION['error'] . '
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                              </div>';
                        unset($_SESSION['error']);
                    }
                    ?>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group"><input type="text" class="form-control" placeholder="Name" id="contact-name"
                        name="contact-name" required></div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group"><input type="email" class="form-control" placeholder="Email"
                        id="contact-email" name="contact-email" required></div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group"><input type="text" class="form-control" placeholder="Phone"
                        id="contact-Phone" name="contact-phone" required></div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <select class="form-control" name="contact-service" id="contact-service">
                        <option value="">Select Your Service</option>
                        <?php foreach(services as $service){ ?>
                        <option value="<?php echo $service['title']; ?>"><?php echo $service['title']; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Additional Details!" id="contact-message"
                        name="contact-message" required></textarea>
                    </div>
                  </div><!-- /.col-lg-12 -->
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <button type="submit" class="btn btn__secondary btn__block ">Submit Request </button>
                    <div class="contact-result"></div>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
              </form>
            </div><!-- /.contact__panel -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
    <section class="google-map p-0 mt--120">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243.01995469955355!2d77.49310695728109!3d12.95141022804133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3ea504cf17f9%3A0x63b45afab3ab218c!2sUllal%20Main%20Rd%2C%20Jnana%20Ganga%20Nagar%2C%20Bengaluru%2C%20Karnataka%20560056!5e0!3m2!1sen!2sin!4v1754623856857!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
<?php include 'layout/footer.php' ?>
