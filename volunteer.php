<?php include "includes/header.php" ?>

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
        <!-- Hero End -->
        <br>
        <br>



<?php
include_once 'includes/db.php';


?>
    <!---Be a volunteer-->


                <div class="volunteer-container">
                    <div class="volunteer-row">
                        <div class="volunteer-col vol-col-1">
                            <div class="volunteer-card vol-1">
                               
                               
                            </div>
                            <div class="volunteer-card vol-2">
                                
                               
                            </div>
                            <div class="volunteer-card vol-3">
                             
                                
                            </div>
                            <div class="volunteer-card vol-4">
                         
                               
                            </div>
                        </div>
                        <div class="volunteer-col">
                            <h1>Be a Volunteer</h1>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores ab fugit nisi, architecto accusantium aliquam!</p>

                            <button id="modal-btn"> Get Started </button>
                        </div>
                    </div>
                </div>

             

                <div id="my-modal" class="modal">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h2>Be a Volunteer</h2>
                    </div>
                    <div class="modal-body">
                       <form action="admin/upload.php" method="post" enctype="multipart/form-data">
                       
                           <span class="placeholder">Full Name</span>
                          <label class="custom-field one">
                            <input type="text" name="fullname"  required> </label>
                    <span class="placeholder">Address</span>
                          <label class="custom-field one">
                            <input type="text" name="address" required></label>
                    <span class="placeholder">Contact No. </span>
                          <label class="custom-field one">
                            <input type="text" name="contact" required></label>
                    <span class="placeholder">Why do you want to be a volunteer of SK San Isidro</span>
                          <label class="custom-field one">
                            <input type="text" name="message"required></label>
                          
                          <br>
                         <legend>UPLOAD YOUR ID AS YOUR DETAILS:</legend>
            <div class="form-group">
                <input type="file" name="file1" />
            </div>
            <div class="forms" >
                <input  type="submit" name="submit" value="Submit" />
                <button id="cancelss" class="cancel"> cancel</button>
            </div>
            
            <?php if(isset($_GET['st'])) { ?>
                <div class="alert alert-danger text-center">
                <?php if ($_GET['st'] == 'success') {
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
                    <div class="modal-footer">
                      
                    </div>
                  </div>
                </div>





    <!---Be a volunteer END-->
    <br>
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

<script>
   const modal = document.querySelector('#my-modal');
const modalBtn = document.querySelector('#modal-btn');
const closeBtn = document.querySelector('.cancel');

// Events
modalBtn.addEventListener('click', openModal);
closeBtn.addEventListener('click', closeModal);
window.addEventListener('click', outsideClick);

// Open
function openModal() {
  modal.style.display = 'block';
}

// Close
function closeModal() {
  modal.style.display = 'none';
}

// Close If Outside Click
function outsideClick(e) {
  if (e.target == modal) {
    modal.style.display = 'none';
  }
}



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