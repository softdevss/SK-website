<?php include "includes/header.php" ?>

<main>

<!-- for carousel -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active max-wid">
    <div class="slider-area position-relative">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                            <div class="hero__caption">
                                <!--<span>Committed to success</span>-->
                                <h1 class="cd-headline letters scale " data-animation="fadeInLeft" data-delay="0.3s">Committed to Success Youth 
                                    <strong class="cd-words-wrapper ">
                                        <b class="is-visible color-blue">Representation</b>
                                        <b  class="color-orange">Empowerment</b>
                                        <b class="color-red">Participation</b>
                                    </strong>
                                </h1>
                                <!--<p data-animation="fadeInLeft" data-delay="0.1s">Paragraph.</p>-->
                                <a href="getappointment.php" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.3s">Get Appointment <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->
            
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                            <div class="hero__caption">
                                <!--<span>Committed to success</span>-->
                                <h1 class="cd-headline letters scale " data-animation="fadeInLeft" data-delay="0.3s">Committed to success Youth
                                    <strong class="cd-words-wrapper">
                                        <b class="is-visible color-blue">Representation</b>
                                        <b class="color-orange">Empowerment</b> 
                                        <b class="color-red">Participation</b>
                                    </strong>
                                </h1>
                                <!--<p data-animation="fadeInLeft" data-delay="0.1s">Paragraph.</p>-->
                                <a href="getappointment.php" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.3s">Get Appointment <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </div>
    </div>
    <div class="carousel-item max-wid">
      <img src="assets/img/gallery/gallery4.png" class="w-100 max-wid img-fluid max-wid" alt="...">
      <div class="carousel-caption d-none d-md-block text-left font-weight-bold mb-50 ">
      <div class="drk"></div>
          <h1 class="hero-title"></h1>
      </div>
    </div>
    <div class="carousel-item max-wid" >
      <img src="assets/img/COVER/sunrise.jpg" class=" w-100 max-wid img-fluid max-wid" alt="...">
      <div class="carousel-caption d-none d-md-block">
       
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

     <div class="container">
        <div class="section-tittle text-center mb-70 mt-30">
            <h2>News</h2>
        </div>
    </div>

    <?php

    $query = "SELECT * FROM events ";
    $select_all_events_query = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_all_events_query)) {

        $id = $row['id'];
        $event_title = $row['news_title'];
        $event_content = $row['event_content'];
        $event_link = $row['event_link'];
        $post_author = $row['event_user'];
        $event_date = $row['event_date'];
        $event_image = $row['event_image'];


        $monthNum  = 0;

        $monthName = date("F", mktime($monthNum));

        $day = date("d", strtotime($event_date));
    ?>
    
    <div class="container">
        <div class="row">
            <div class="col">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="img-responsive w-150" style="max-width: 100%;"
                                    src="image/<?php echo $event_image; ?>" alt="">

                                <a href="#" class="blog_item_date">
                                    <p>Date</p>
                                    <h3><?php echo $monthName; ?>
                                        <?php echo $day; ?></h3>
                                    <h3><?php echo date("Y"); ?></h3>
                                </a>
                            </div>

                            <div class="blog_details">
                                <h2>
                                    <a href="<?php echo $event_link?>"><?php echo $event_title?>
                                    
                                    </a>
                                        
                                </h2>
                                    <h4>
                                <?php echo $event_content; ?>
                              </h4>
                            </div>
                        <?php } ?>
                        </article>
             </div>
        </div>
    </div>
</main>
<?php include "includes/footer.php" ?>
<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

</body>

</html>