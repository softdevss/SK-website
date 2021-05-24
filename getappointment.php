
<?php include "includes/header.php" ?> 
<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap hero-cap2 text-center">
                        <!--<h2>About Us</h2>-->
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--? About Start-->
  
    <!-- About  End-->
    <!--? All startups Start -->
    
        <!-- DONATIONS -->
       <div class="donations">
           <div class="header">
               <h3>Get Appointment</h3>
           </div>
       </div>


    <?php
    ob_start();

   include "includes/db.php"; 
  
if(isset($_POST['submit'])){

        $name      = $_POST['name'];
        $email   = $_POST['email'];  
        $contact   = $_POST['contact'];
        $address     = $_POST['address'];
        $date  = $_POST['date']; 
        $purpose  = $_POST['purpose'];                                       


        $name   =  mysqli_real_escape_string($connection, $name);
        $email    =  mysqli_real_escape_string($connection, $email);
        $contact      =  mysqli_real_escape_string($connection, $contact);
        $address      =  mysqli_real_escape_string($connection, $address);
        $purpose    =  mysqli_real_escape_string($connection, $purpose);

            $query = "INSERT INTO appointment(name, email, contact, address, date, purpose) ";
            $query .= "VALUES('{$name}', '{$email}', '{$contact}', '{$address}', now(), '{$purpose}' ) ";

            $purpose_query = mysqli_query($connection, $query );

            if(!$purpose_query){

                die('QUERY FAILED'. mysqli_error($connection) . ' ' . mysqli_error($connection) );
                    
                }

        }

?>
<div class="appointment" style="display: flex; align-items:center; justify-content:center; ">
<form action="getappointment.php" method="POST" autocomplete="on" style="display:flex; width:700px; max-width:100%; flex-direction:column; justify-content:center; border:2px solid silver; padding:2rem; border-radius:30px;">
    <div class="m-3 p-2">
            <label class="fs-2" style="font-size: 1.4rem;">Full name: </label>
            <input class="form-control" type="text" name="name" placeholder="">
    </div>

    <div class="m-3 p-2">
            <label for=""style="font-size: 1.4rem;">Email Address: </label>
            <input class="form-control" type="email" name="email" placeholder="">
    </div>

    <div class="m-3 p-2">
            <label for="" style="font-size: 1.4rem;">Contact # : </label>
            <input class="form-control" type="text" name="contact" placeholder="">
    </div>

    <div class="m-3 p-2">
        <label for=""style="font-size: 1.4rem;">Address: </label>
        <input class="form-control" type="text" name="address" placeholder="">
    </div>

    <div class="m-3 p-2">
        <label for=""style="font-size: 1.4rem;">Date of Appointment</label><br/>
        <input type="date" name="date" placeholder="">
    </div>
    
    <div class="m-3 p-2">
        <label for=""style="font-size: 1.4rem;">Purpose: </label>
        <textarea style="font-size: 1.4rem;" name="purpose" id="" cols="30" rows="5" placeholder="What is your purpose to get Appointment"></textarea>
    </div>
    <div class="m-3 p-3">

    <input class="btn btn-primary" type="submit" name="submit" value="Submit">
    </div>
  
</form>
</div>
        <!--DONATIONS END  -->
    
   
    <!--? gallery Products Start -->
    <div class="gallery-area fix">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery1.png);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery4.png);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                             <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery5.png);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery6.png);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery Products End -->
    
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

    <script>var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");
        var btn2 = document.getElementById("cancel");
        
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        
        // When the user clicks on the button, open the modal
        btn.onclick = function() {
          modal.style.display = "block";
        }
        
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }

        btn2.onclick = function() {
          modal.style.display = "none";
        }
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }</script>
    
    </body>
</html>