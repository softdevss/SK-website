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
<?php  
include_once 'includes/db.php';
?>     


<!------Online Heeath-->                

        <div class="health-main">
            <div class="health-wrapper">
                <div class="health-hero">
                    <div class="health-hero-text">
                        <h3 class="text"> <span>Health</span>  Desk</h3>
                        <p>SK Isidro official website offers online health desk for those who want to consult in a license physician and to diagnose</p>
                    </div>
                        
                </div>

                <div class="health-form" style="margin-bottom:1rem;">
                    <div class="l-form">
                        <form action="admin/uploads.php" method="POST" enctype="multipart/form-data">
                            <h1 class="form__title">Patient Info</h1>
            
                            <div class="form__div">
                                <input type="text" class="form__input" name="fullname">
                                <label for="text" class="form__label">Name</label>
                            </div>
            
                            <div class="form__div">
                                <input type="text" class="form__input" name="address">
                                <label for="text" class="form__label">Address</label>
                            </div>

                            <div class="form__div">
                                <input type="text" class="form__input" name="contact">
                                <label for="text" class="form__label">Contact</label>
                            </div>

                            <div class="form__div">
                                <input type="date" class="form__input" id="birthday" name="date">
                                <label for="birthday" class="form__label">Date of birth</label>
                            </div>

                            <div class="form__div">
                                <input type="text" class="form__input" name="doctor">
                                <label for="text" class="form__label">Doctor</label>
                            </div>
                            <label for="w3review">Message / Diagnosis</label>

                            <textarea id="w3review" name="message" rows="4" cols="30"></textarea>

                            <legend>Select File to Upload:</legend>
                    <div class="form-group">
                <input type="file" name="file2" />
            </div>
            
            <div class="form-group" align="right" style="margin-right:1rem;">
                
                <input type="submit" name="submit" value="Submit" class="btn btn-info"/>
            </div>


            <?php if(isset($_GET['sd'])) { ?>
                <div class="alert alert-danger text-center">
                <?php if ($_GET['sd'] == 'success') {
                        echo "File Uploaded Successfully!";
                    }
                    else
                    {
                        echo 'Invalid File Extension!';
                    } ?>
                </div>
            <?php } ?>
                        </form>
                    </div>
                </div>

            </div>
        </div>


                    <div style="height:100px"></div>
                 
        <!--DONATIONS END  -->
    <br>
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

    <script> 


        const realFileBtn = document.getElementById("real-file");
const customBtn = document.getElementById("custom-button");
const customTxt = document.getElementById("custom-text");

customBtn.addEventListener("click", function() {
  realFileBtn.click();
});

realFileBtn.addEventListener("change", function() {
  if (realFileBtn.value) {
    customTxt.innerHTML = realFileBtn.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
  } else {
    customTxt.innerHTML = "No file chosen, yet.";
  }
});

        
        </script>
    
    </body>
</html>