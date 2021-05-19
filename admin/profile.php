<?php include "includes/admin_header.php"; ?>

<?php

    

    if(isset($_SESSION['username'])){
       
        $username = $_SESSION['username'];
        
        $query = "SELECT * FROM users WHERE username = '{$username}' ";
        $select_user_profile_query = mysqli_query($connection,$query);
        
        while($row = mysqli_fetch_array($select_user_profile_query)){
            
                $id        = $row['id'];
                $username  = $row['username'];  
                $password  = $row['password'];
                $role      = $row['role'];
                      
        }

    }

?>


<?php 

if(isset($_POST['update_profile'])){
    
//   $username = $_POST['username'];
//   $password = $_POST['password'];
    
  $username = $_POST['username'];
  $password = $_POST['password'];
  $role = $_POST['role'];
    
        $query = "UPDATE users SET ";
        $query .= "username    = '{$username}', ";
        $query .= "password     = '{$password}', ";
        $query .= "role          = '{$role}' ";
     

        $edit_user_query = mysqli_query($connection, $query);
    
      
        

}




?>


<div id="wrapper">

    <!-- Navigation -->

    <?php include "includes/admin_navigation.php"; ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome to Admin
                        <small>Author</small>
                    </h1>

                    <form action="profile.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="title">Username</label>
                            <input type="text" value="<?php echo $username; ?>" class="form-control" name="username">
                        </div>

                        <div class="form-group">
                            <label for="post_status">password</label>
                            <input type="text" value="<?php echo $password; ?>" class="form-control" name="password">
                        </div>

                        <div class="form-group">
                            <label for="post_tags">role</label>
                            <input type="text" value="<?php echo $role; ?>" class="form-control" name="role">
                        </div>






                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="update_profile" value="Update Profile">
                        </div>

                    </form>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

    <?php include "includes/admin_footer.php"; ?>