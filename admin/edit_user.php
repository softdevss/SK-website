<?php

if(isset($_GET['edit_user'])){
    
 $the_user_id = $_GET['edit_user'];
    
    $query = "SELECT * FROM users WHERE id = $the_user_id ";
    $select_users_query = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($select_users_query)){

        $user_id          = $row['id'];
        $fullname          = $row['fullname'];
        $username         = $row['username'];  
        $password         = $row['password'];
        $role             = $row['role'];    
    
     }   
  
 ?>  
<?php

if(isset($_POST['edit_user'])){
  
  $fullname   = $_POST['fullname'];
  $username  = $_POST['username'];
  $password  = $_POST['password'];
  $role      = $_POST['role'];

if(!empty($password)){
    
    $query_password = "SELECT password FROM users WHERE id = $the_user_id ";
    $get_user_query = mysqli_query($connection, $query_password);
     
      
    
    $row = mysqli_fetch_array($get_user_query);
    
    
    $db_user_password = $row['password'];
    

    if($db_user_password != $password){
        
    $hashed_password =  password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
        
    }
    
      $query = "UPDATE users SET ";
        $query .= "fullname    = '{$fullname}', ";
        $query .= "username    = '{$username}', ";
        $query .= "password     = '{$hashed_password}', ";
        $query .= "role         = '{$role}' ";
       
        $query .= "WHERE id     = {$the_user_id} ";

        $edit_user_query = mysqli_query($connection, $query);
    
        
    
       echo "User Updated" . "<a href='users.php'>View Users</a>";


            } 
        }
    
}else{

header("Location: index.php");

}

?>
      
   <form action="" method="post" enctype="multipart/form-data">

   <div class="form-group">
        <label for="title">Fullname</label>
        <input type="text" value="<?php echo $fullname; ?>" class="form-control" name="fullname">
    </div>
     
    <div class="form-group">
        <label for="title">username</label>
        <input type="text" value="<?php echo $username; ?>" class="form-control" name="username">
    </div>
    
       <div class="form-group">
        <label for="post_status">password</label>
        <input autocomplete="off" type="password" value="<?php echo $password; ?>" class="form-control" name="password">
    </div>
    
    
    <div class="form-group">
    <label for="post_content">user role</label><br>
        <select name="role"  id="">
           <option value="<?php echo $role;?>"><?php echo $role; ?></option>
           <?php 
            
            if($role == 'admin'){
                
              echo  "<option value='Staff'>staff</option>";
                
                
            }else{
                
                echo "<option value='Admin'>admin</option>";
                
            }

            
            ?>
            
         </select>

    </div>
 
     
    <div class="form-group">
        
     
    </div>
        
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="edit_user" value="Edit user">
    </div>
 
</form>