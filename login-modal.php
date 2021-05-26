<?php 
include "includes/db.php";
session_start();

if(isset($_POST['submit'])){
        
  $username  = $_POST['username'];
  $password  = $_POST['password'];
      // mysqli_real_escape_string Escapes special characters in a string for use in an SQL statement //
  $username  =  mysqli_real_escape_string($connection, $username  );
  $password  =  mysqli_real_escape_string($connection, $password  );
      
     // this query says that u enter username is exist in db code will output //
  $query = "SELECT * FROM users WHERE username = '{$username}' ";
  $select_user_query = mysqli_query($connection, $query);
      
      if(!$select_user_query){
          
          die('QUERY FAILED' . mysqli_error($connection));
    }
     
      while($row = mysqli_fetch_array($select_user_query)){
          
         $db_fullname = $row['fullname'];
         $db_username = $row['username'];
         $db_user_password = $row['password'];
         $db_user_role = $row['role'];
   
      }

    

      
   
      // if($db_username == $_POST['username'] && $db_user_password == $_POST['password']) {

        if(password_verify($password, $db_user_password)){

          $_SESSION['fullname'] = $db_fullname;
          $_SESSION['username'] = $db_username;
          $_SESSION['role'] = $db_user_role;

     
      
          header("Location: /Sk-website/admin/");
              
      }else{

          header("Location: index.php"); 
          
      }
      
      
  }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 4 Login Modal Example</title>
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
    <!-- Style CSS -->
    <link rel="stylesheet" href="modal-login-form/css/style.css">
	<!-- Demo CSS -->
	<link rel="stylesheet" href="modal-login-form/css/demo.css">
  
  </head>
  <body>
 <main>
  <article>

  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-title text-center">
          <h4>Login</h4>
        </div>
        <div class="d-flex flex-column text-center">


        <form action="login-modal.php" method="POST">
            <div class="form-group">
              <input type="text" name="username" class="form-control" placeholder="Your email username..." required>
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control"  placeholder="Your password..." required>
            </div>

            <input  class="btn btn-info btn-block btn-round" type="submit" name="submit" value="submit">
          </form>
          
      
          <div class="d-flex justify-content-center social-buttons">
           
          
          </di>
        </div>
      </div>
    </div>
      
  </div>
</div>
<!-- partial -->

  
  </article>
 </main>
 
  
  <!-- jQuery -->
  <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
  <!-- Popper JS -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
  <!-- Bootstrap JS -->
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
   <!-- Custom Script -->      
  <script  src="modal-login-form/js/script.js"></script>
  
  </body>
</html>