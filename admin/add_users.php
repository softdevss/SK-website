<?php
if(isset($_POST['create_user'])){
    
  $username = $_POST['username'];
  $password = $_POST['password'];
  $role = $_POST['role'];
       
  $password  = password_hash($password, PASSWORD_BCRYPT, array('cost' => 10));

    
//    move_uploaded_file($post_image_temp, "../images/$post_image" );
    
$query = "INSERT INTO users (username, password, role ) ";
$query .= "VALUES('{$username}','{$password}','{$role}' ) ";

    $create_user_query = mysqli_query($connection, $query);
  
  
    
    echo "User Created: " . " " . "<a href='users.php'>View Users</a> ";
    
}

?>



<form action="" method="post" enctype="multipart/form-data">
     
     <div class="form-group">
         <label for="title">Username</label>
         <input type="text" class="form-control" name="username">
     </div>
     
        <div class="form-group">
         <label for="post_status">Password</label>
         <input type="password" class="form-control" name="password">
     </div>
     
     <div class="form-group">
         
         <select name="role" id="">
             <option value="Subscriber">Select Options</option>
             <option value="admin">Admin</option>
             <option value="staff">Staff</option>
                 
         </select>
 
     </div>
        
     <div class="form-group">
         <input class="btn btn-primary" type="submit" name="create_user" value="Add user">
     </div>
  
 </form>
