<?php

if(isset($_POST['create_event'])){
    
  $event_title        = $_POST['title'];
  $event_user         = $_POST['event_user'];
  $event_category_id  = $_POST['event_category'];
  $event_status       = $_POST['event_status'];
    
  $event_image        = $_FILES['event_image'] ['name'];
  $event_image_temp   = $_FILES['event_image'] ['tmp_name'];

  $event_content = $_POST['event_content'];
  $event_link = $_POST['event_link'];
    
 
  $event_date         = $_POST['date'];
    
move_uploaded_file($event_image_temp, "../image/$event_image" );
    
$query = "INSERT INTO events (event_category, news_title, event_user, event_date, event_image, event_status, event_content, event_link) ";
$query .= "VALUES({$event_category_id},'{$event_title}','{$event_user}','{$event_date}','{$event_image}','{$event_status}', '{$event_content}', '{$event_link}' ) ";

    $create_post_query = mysqli_query($connection, $query);

    $the_post_id = mysqli_insert_id($connection);
    
     echo "<p class='bg-success'>Post Created. <a href='../post.php?p_id={$the_post_id}'>View Post </a> or <a href='posts.php'>Edit More Post </a></p>";
    
}

?>
      
   <form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="title">Post Title</label>
        <input type="text" class="form-control" name="title">
    </div>

    <div class="form-group">
    <label for="">Post Content</label>
        <textarea class="form-control" name="event_content" id="" cols="30" rows="5"></textarea>
        
    </div>
    
    <div class="form-group">
        <label for="category">Category</label>
        <select name="event_category" id="">
            
            <?php  
            
            $query = "SELECT * FROM categories ";
            $select_events = mysqli_query($connection,$query);
 
            while($row = mysqli_fetch_assoc($select_events)){
            $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title']; 
                
                    echo "<option value='{$cat_id}'>{$cat_title}</option>";

            }
            
            ?>
                
        </select>

    </div>

    
    
    
    <div class="form-group">
        <label for="users">Users</label>
        <select name="event_user" id="">
            
            <?php  
            
            $user_query = "SELECT * FROM users";
            $select_users = mysqli_query($connection,$user_query);
            
            while($row = mysqli_fetch_assoc($select_users)){
            $user_id = $row['user_id'];
            $username = $row['username']; 
                
                    echo "<option value='{$username}'>{$username}</option>";

            }
            
            ?>
                
        </select>

    </div>

    <div class="form-group">
        <label for="link">Post Link</label>
        <input type="text" class="form-control" name="event_link">
    </div>
    
     
    <div class="form-group">
    <label for="">Event Status</label>
        <select name="event_status" id="">
            <option value="draft">Event Status</option>
            <option value="published">Publish</option>
            <option value="draft">Draft</option>     
        </select>
    </div>
    
    <div class="form-group">
         <label for="event_date">Date</label>
         <input type="date" class="form-control" name="date">
     </div>

    
    
    
    
    
    <div class="form-group">
        <label for="">Event Image</label>
        <input type="file"  name="event_image">
    </div>
    

 
    
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_event" value="Publish Post">
    </div>
 
</form>