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
            <!-- Section Tittle -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-tittle text-center">
                      
                        <p><h2 class="text-center"> Get in touch</h2></p>
                    </div>
                </div>
            </div>
            <div class="grid">

<div class="grid-item" style="width:350px">
  <div class="cards">
    <img
      class="card-img"
      src="./assets/img/blog/single_blog_1.png"
      alt="Grand Canyon"
    />
    <div class="card-content ">
      <h6 class="card-header" >  Online Request </h6>

      <button class="card-btn background-grid"><a href="online-request.phponline-request.php" target="_blank"><i class="fas fa-angle-right"></i> Get started</a></button>
    </div>
  </div>
</div>
<div class="grid-item" style="width:350px">
  <div class="cards">
    <img class="card-img" src="./assets/img/165899291_1710008445846342_4653169932694819731_n.jpg" alt="Maldives" />
    <div class="card-content">
      <h1 class="card-header"> Donate </h1>
      
      <button class="card-btn background-grid"><a href="donation.php" target="_blank"><i class="fas fa-angle-right"></i> Get started</a></button>
    </div>
  </div>
</div>
<div class="grid-item" style="width:350px">
    <div class="cards">
      <img class="card-img" src="./assets/img/hero/h1_hero.png" alt="Maldives" />
      <div class="card-content">
        <h1 class="card-header" > Appointment</h1>
        
        <button class="card-btn background-grid"><a href="getappointment.php" target="_blank"><i class="fas fa-angle-right"></i> Get started</a></button>
      </div>
    </div>
  </div>
  
</div>

<div class="section-tittle text-center">

<p><h2 class="text-center"> Achievements</h2></p>
</div>

<div class="container">    
    <?php

    $query = "SELECT * FROM events ";
    $select_all_events_query = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_all_events_query)) {

        $id = $row['id'];
        $event_title = $row['news_title'];
        $event_content = $row['event_content'];
        $event_link = $row['event_link'];
        $event_author = $row['event_user'];
        $event_date = $row['event_date'];
        $event_image = $row['event_image'];


        $monthNum  = 0;

        $monthName = date("F", mktime($monthNum));

        $day = date("d", strtotime($event_date));
                   
       ?>
                

                <!-- First Blog Post -->
            <div class="d-flex">
            
                <a href="post.php?p_id=<?php echo $id;?>">
                <img class="img-responsive w-50" src="image/<?php echo $event_image;?>" alt="">
                </a>
                    
                <h2>
                    <a href="post.php?p_id=<?php echo $id;?>"><?php echo $event_title ?></a>
                </h2>
              
                <p class="lead">
                <h1>
                    by <a style="color:black" href=""><?php echo $event_author; ?></a>
                </h1>
                </p>
                <p>
                <span class="glyphicon glyphicon-time"></span><?php echo $event_date; ?>
                </p>
                <hr>
                <p><?php echo $event_content; ?></p>
         
                   
                 
            <?php  }  ?>
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