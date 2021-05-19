
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
               <h3>For donations</h3>
           </div>
       </div>
    
       <div class="grid">
        <div class="grid-item">
          <div class="cards">
            <img class="card-img" src="./assets/img/GCASH.png" alt="Rome" />
            <div class="card-content">
              <h1 class="card-header">Cash donations</h1>
              <p class="card-text">
                 G-CASH DONATIONS <strong><br> ARKY MANNING <br> <strong>096475135895</strong></strong>
              </p>
              <p class="card-text">
               BANK DONATIONS <strong><br> ARKY MANNING <br> <strong>BDO </strong></strong>
             </p>
             <P>Note you can freely scan the QR code to automatically get the infos</P>
             
              
              <button class="card-btn" ><a href="https://www.facebook.com/manningarky" target="_blank"> Visit page</a><span>&rarr;</span></button>
            </div>
          </div>
        </div>
        <div class="grid-item">
          <div class="cards">
            <img
              class="card-img"
              src="./assets/img/165899291_1710008445846342_4653169932694819731_n.jpg"
              alt="Grand Canyon"
            />
            <div class="card-content">
              <h1 class="card-header">In kind donations</h1>
              <p class="card-text">
                    We are accepting any kind of help and support for our projects
                    and help giving donations thanks for coordinations ,
                    Sharing is caring. <br> <br> just always get in touch of our authorize officers for the donations
                <br><strong> <br> <br> Kindly fill up the form</strong>.
              </p>
              <button class="card-btn" id="myBtn"> Fill up form <span>&rarr;</span></button>
            </div>
          </div>
        </div>
        <div class="grid-item " style="width: 700px;">
          <div class="cards">
            <img class="card-img" src="./assets/img/IMG_20210427_171636.jpg" alt="Maldives" />
            <div class="card-content">
              <h1 class="card-header">Barangay San Isidro Taytay, Rizal</h1>
              <p class="card-text">
                

San Isidro is one of the progressive Barangay of the town having garment factories, sash factories and other small business firms continuously operating within the community.  Banking business is also progressive with a total of six banks serving the business sector.  This is one of the reasons why San Isidro is attractive to investors considering its easy access from Manila via Ortigas Avenue extension and Rizal Avenue.
              </p>
              <button class="card-btn"><a href="https://goo.gl/maps/Lw4KaaDfigdr6W9s9" target="_blank"> Visit on map</a> <span>&rarr;</span></button>
            </div>
          </div>
        </div>
      </div>

      
    <?php
   include "includes/db.php"; 

if(isset($_POST['submit'])){

        $name      = $_POST['name'];
        $contact   = $_POST['contact'];  
        $address   = $_POST['address'];
        $email     = $_POST['email'];
        $donation  = $_POST['donation'];                                     


        $name   =  mysqli_real_escape_string($connection, $name);
        $contact    =  mysqli_real_escape_string($connection, $contact);
        $address      =  mysqli_real_escape_string($connection, $address);
        $email      =  mysqli_real_escape_string($connection, $email);
        $donation    =  mysqli_real_escape_string($connection, $donation);

            $query = "INSERT INTO donate(name, contact, address, email, donation) ";
            $query .= "VALUES('{$name}', '{$contact}', '{$address}', '{$email}',  '{$donation}' ) ";

            $donate_query = mysqli_query($connection, $query );

            if(!$donate_query){

                die('QUERY FAILED'. mysqli_error($connection) . ' ' . mysqli_error($connection) );
                    
                }     
                
            echo "Submitted Successfully";                             
                                            
        
        }

?>

     
<!--  Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close"></span>

    <div class="wrapper-heading">
        <h3> IN KIND DONATIONS FORM</h3>
    </div>



    <form action="donation.php" method="POST" autocomplete="on">
  
    <div class="wrapper">
        <div class="input-data">
            
          <input type="text" name="name"  required>
          <div class="underline">
  </div>
  <label>Full name</label>
        </div>
  </div>
  <div class="wrapper">
    <div class="input-data">
      <input type="text" name="contact"  required>
      <div class="underline">
</div>
<label>Contact</label>
    </div>
</div>
<div class="wrapper">
    <div class="input-data">
      <input type="text" name="address"  required>
      <div class="underline">
</div>
<label>Address</label>
    </div>
</div>
<div class="wrapper">
    <div class="input-data">
      <input type="email" name="email"  required>
      <div class="underline">
</div>

<label>Email</label>
    </div>
</div>
<div class="wrapper">
    <div class="input-data">
      <input type="text" name="donation" required>
      <div class="underline">
</div>

<label>Donation</label>

    </div>
</div>
           
        <div class="button-wrapper">
            <button id="cancel" class="cancel"> Cancel</button>
            <input class="btn-primary" type="submit" name="submit" value="Submit">
        </div>
  </div>

</div>
</form>

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