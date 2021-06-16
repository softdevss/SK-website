<?php 

            if(isset($_GET['edit_event_id'])){
                
             $the_event_id = $_GET['edit_event_id'];
                
            } 
            $query = "SELECT * FROM events WHERE id = $the_event_id ";
            $select_post_id = mysqli_query($connection,$query);

            while($row = mysqli_fetch_assoc($select_post_id)){
                $event_id           = $row['id'];
                $event_user          = $row['event_user'];  
                $event_link         = $row['event_link'];  
                $event_title         = $row['news_title'];
                $event_content         = $row['event_content'];         
                $event_category     = $row['event_category'];     
                $event_status        = $row['event_status'];     
                $event_image         = $row['event_image'];   
                 
                $event_date          = $row['event_date'];
                
                }

            if(isset($_POST['edit_event'])){
                
                $event_user          = $_POST['event_user'];  
                $event_title         = $_POST['event_title'];  
                $event_content       = $_POST['event_content']; 
                $event_category      = $_POST['event_category'];     
                $event_status        = $_POST['event_status'];  
                
                 $event_link         = $_POST['event_link'];
               
                $event_date          = $_POST['event_date']; 

                $event_image        = $_FILES['event_image'] ['name'];
                $event_image_temp   = $_FILES['event_image'] ['tmp_name'];

               
                
                
                move_uploaded_file($event_image_temp,"../image/$event_image");

                $query = "UPDATE events SET ";
                $query .= "news_title       = '{$event_title}', ";
                $query .= "event_content     = '{$event_content}', ";
                $query .= "event_category   = '{$event_category}', ";
                $query .= "event_date        = '{$event_date}', ";
                $query .= "event_user        = '{$event_user}', ";
                $query .= "event_status      = '{$event_status}', ";
              
                $query .= "event_image       = '{$event_image}', ";
                $query .= "event_link       = '{$event_link}' ";
                $query .= "WHERE id    = {$the_event_id} ";
                
                $update_post = mysqli_query($connection, $query);
                
            
                
                echo "<p class='bg-success'>Post Updated. <a href='../event.php?p_id={$event_id}'>View Event </a> or <a href='events.php'>Edit More Event </a></p>";
                
 
            }
?>
  
  
   
  <form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="title">Post Title</label>
        <input type="text" value="<?php echo $event_title; ?>" class="form-control" name="event_title">
    </div>

    <div class="form-group">
        <label for="post_content">Post Content</label>
        <textarea class="form-control" name="event_content" id="" cols="30" rows="10"><?php echo $event_content; ?></textarea>
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
        <label for="title">Post Link</label>
        <input type="text" value="<?php echo $event_link; ?>" class="form-control" name="event_link">
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
         <input type="date" class="form-control" name="event_date">
     </div>

    
    
    
    
    
     <div class="form-group">
          <img width="100" src="../image/<?php echo $post_image?>" alt="">
          <input type="file" name="event_image">
    </div>
    

 
    
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="edit_event" value="Publish Post">
    </div>
 
</form>