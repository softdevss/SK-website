<?php include "includes/header.php" ?>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <!--<h2>Blog</h2>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        
<!--================Blog Area =================-->
<section class="blog_area section-padding">

<?php 

$query = "SELECT * FROM events ";
$select_all_events_query = mysqli_query($connection, $query);


while($row = mysqli_fetch_assoc($select_all_events_query)){

$id = $row['id'];
$event_title = $row['news_title'];
$post_author = $row['event_user'];
$event_date = $row['event_date'];
$event_image = $row['event_image'];


$monthNum  = 0;

$monthName = date("F", mktime($monthNum));
 
$day = date("d",strtotime($event_date));



?>

            <div class="container">
            <h1>
                <label for="">News & Update</label>
            </h1>

                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            <article class="blog_item">
                                <div class="blog_item_img">

                                <img class="img-responsive w-100" style="max-width: 100%;" src="image/<?php echo $event_image;?>" alt="">

                                    <a href="#" class="blog_item_date">
                                    <p>Date</p>
                                        <h3><?php echo $monthName; ?>
                                        <?php echo $day; ?></h3>
                                        <h3><?php echo date("Y"); ?></h3>
                                    </a>
                                </div>
                                
                                <div class="blog_details">
                                    <h2>
                                        <a href="event.php?id=<?php echo $id;?>"><?php echo $event_title ?></a>
                                    </h2>
                                    <!--<p>Paragraph</p>-->
                                    
                                </div>
                                
                                
                                <?php } ?>

                            </article>
                                                        
                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Previous">
                                            <i class="ti-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="includes/news.php" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="includes/newspage2.php" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Next">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title" style="color: #2d2d2d;">Category</h4>
                                <ul class="list cat-list">
                                
                                <?php
                                         //read cat in db//
   
                                $query = "SELECT * FROM categories";

                                $select_all_categories_query = mysqli_query($connection,$query);
                                            
                                while($row = mysqli_fetch_assoc($select_all_categories_query)){

                                $cat_title = $row['cat_title'];

                                echo "<li><a href='#'>{$cat_title}</a></li>";

                                }



                                ?>
                                </ul>
                            </aside>

                            <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

                            <script>
                                $(function(){
                                    $(".list a").on('click' , function(){
                                        $("html, body").animate({
                                            scrollTop: $($.attr(this , 'href')).offset().top
                                        }, 500);
                                    });
                                });

                            </script>                         
    </main>
        

    <?php include "includes/footer.php" ?>
    <!-- Scroll Up -->
    <div id="back-top" >
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
    
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

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