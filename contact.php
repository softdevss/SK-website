<?php include "includes/db.php" ?>
<?php include "includes/header.php" ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<main>
    <!--? Hero Start -->
    <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <!--<h2>Contact Us</h2>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="map-container" style="display: flex; justify-content: center; align-items: center;">
            <iframe class="map"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d860.024017976398!2d121.134774575286!3d14.577561893064306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c77a9e148b63%3A0xb2e05fb8154ee03!2sSan%20Isidro%20Barangay%20Hall!5e0!3m2!1sen!2sph!4v1621399771681!5m2!1sen!2sph"
    width="90%" height="450" style="border:0; margin: 4rem; border-radius: 20px;" allowfullscreen="" loading="lazy"></iframe>
        </div>
            <div class="row">
                <div class="col-12 m-5">
                    <h2 class="contact-title">LEAVE US A MESSAGE</h2>
                </div>
                <?php 

                        if(isset($_POST['submit'])){

                    echo '<script type="text/javascript">
  					swal("", "Successfully Submitted", "success");
  					</script>';

                        $fullname  = $_POST['fullname'];
                        $email     = $_POST['email'];  
                        $address   = $_POST['address'];
                        $contact   = $_POST['contact'];                                     
                        $message   = $_POST['message'];
                        
                        $fullname   =  mysqli_real_escape_string($connection, $fullname);
                        $address    =  mysqli_real_escape_string($connection, $address);
                        $email      =  mysqli_real_escape_string($connection, $email);
                        $message    =  mysqli_real_escape_string($connection, $message);


                           if(!empty($fullname) && !empty($address)  && !empty($email)  && !empty($contact)  && !empty($message)){

                            $query = "INSERT INTO contact(fullname, email, address, contact,  message) ";
                            $query .= "VALUES('{$fullname}', '{$email}', '{$address}', '{$contact}', '{$message}' ) ";
    
                            $contact_query = mysqli_query($connection, $query );
    
                            if(!$contact_query){
               
                                die('QUERY FAILED'. mysqli_error($connection) . ' ' . mysqli_error($connection) );
                                     
                                }     
                                
                            echo "";              
                                                 
                           }
                        }

                        ?>

                <div class="col-lg-8" style="padding: 5rem;">  
                    <form class="form-contact contact_form" action="contact.php" method="POST">

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">

                                    <input class="form-control" type="text" name="fullname"
                                        placeholder="Enter your full name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="address"
                                        placeholder="Enter your address" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="contact"
                                        placeholder="Enter your contact" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" placeholder="Enter your email"
                                        required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" cols="30" rows="5"
                                        placeholder="Enter your message" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3" style="font-weight: bold;">
                            <input type="submit" name="submit" value="Submit"
                                class="button button-contactForm boxed-btn">
                        </div>
                    </form>
                </div>




                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>N.Pascual Gregoria Hts. Brgy. San Isidro</h3>
                            <p>Taytay, Rizal 1920</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+8293402311</h3>
                            <p>Mon to Fri 9am to 5pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>sksanisidro2018@gmail.com</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
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