<?php

if(isset($_GET['edit_request_id'])){
    
 $the_request_id = $_GET['edit_request_id'];

}    
    $query = "SELECT * FROM request WHERE id = $the_request_id ";
    $select_request_query = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($select_request_query)){

        $fullname = $row['fullname'];
        $organization    = $row['organization'];
        $contact  = $row['contact'];
        $request  = $row['request'];
        $event  = $row['event'];
        $date  = $row['date'];
        $venue  = $row['venue'];
        $dateR  = $row['date_recieved'];  
        $dateC  = $row['date_claimed'];
        $status  = $row['status'];
        $amount  = $row['amount'];                 
     
      
    }

if(isset($_POST['edit_request'])){
  
    $fullname        = $_POST['fullname'];
    $organization    = $_POST['organization'];
    $contact         = $_POST['contact'];
    $request         = $_POST['request'];
    $event           = $_POST['event'];
    $date            = $_POST['date'];
    $venue           = $_POST['venue'];
    $dateR           = $_POST['dateR'];  
    $dateC           = $_POST['dateC'];
    $status          = $_POST['status'];
    $amount          = $_POST['amount'];     

    
        $query = "UPDATE request SET ";
        $query .= "fullname          = '{$fullname}', ";
        $query .= "organization  = '{$organization}', ";
        $query .= "contact       = '{$contact}', ";
        $query .= "request       = '{$request}', ";
        $query .= "event         = '{$event}', ";
        $query .= "date          = '{$date}', ";
        $query .= "venue         = '{$venue}', ";
        $query .= "date_recieved = '{$dateR}', ";
        $query .= "date_claimed  = '{$dateC}', ";
        $query .= "status        = '{$status}', ";
        $query .= "amount        = '{$amount}' ";
    
        $query .= "WHERE id     = {$the_request_id} ";

        $edit_request_query = mysqli_query($connection, $query);

       echo "User Updated" . "<a href='request.php'>View Users</a>"; 

    }

?>
      
      <form class="row g-3" action="" method="post" enctype="multipart/form-data">
     
     <div class="form-group ">
         <label for="title">full name</label>
         <input type="text" value="<?php echo $fullname; ?>" class="form-control" name="fullname">
     </div>

     <div class="form-group">
         <label for="title">Oragnization</label>
         <input type="text" value="<?php echo $organization; ?>" class="form-control" name="organization">
     </div>
     
        <div class="form-group">
         <label for="post_status">Contact No:</label>
         <input type="text" value="<?php echo $contact; ?>" class="form-control" name="contact">
     </div>

     <div class="form-group">
    <label for="request">Request</label>
    <select name="request" id="">
       
        <option value='<?php echo $request; ?>'><?php echo $request;?></option>
        <?php
        if($request == 'financial' ) {
            
           echo "<option value='In kind'>In Kind</option>";
            
        }else{
            
            echo "<option value='Financial'>Financial</option>";
            
        }
        
        ?>
        
    </select>
    
</div>

     <div class="form-group">
         <label for="">Event/Purpose</label>
         <input type="text" value="<?php echo $event; ?>" class="form-control" name="event">
     </div>

     <div class="form-group">
         <label for="date">Date</label>
         <input type="date" value="<?php echo $date; ?>" class="form-control" name="date">
     </div>

     <div class="form-group">
         <label for="post_status">Venue</label>
         <input type="text" value="<?php echo $venue; ?>" class="form-control" name="venue">
     </div>

     <div class="form-group">
         <label for="post_status">Date_Recieved</label>
         <input type="date" value="<?php echo $dateR; ?>" class="form-control" name="dateR">
     </div>

     <div class="form-group">
         <label for="post_status">Date_Claimed</label>
         <input type="date" value="<?php echo $dateC; ?>" class="form-control" name="dateC">
     </div>

     <div class="form-group">
         <label for="post_status">Amount</label>
         <input type="text" value="<?php echo $amount; ?>" class="form-control" name="amount">
     </div>
     
     <div class="form-group">
         <label for="status">Status</label><br>
         <select name="status" id="">
             <option value="">Select Options</option>
             <option value="claimed">Claim</option>
             <option value="cancelled">Cancel</option>     
             <option value="process">Process</option>    
         </select>
     </div>
        
     <div class="form-group">
         <input class="btn btn-primary" type="submit" name="edit_request" value="Update">
     </div>
  
 </form>