
<?php 

if(isset($_POST['submit'])){

    $fullname = $_POST['fullname'];
    $oraganization = $_POST['organization'];
    $contact = $_POST['contact'];
    $request = $_POST['request'];
    $event = $_POST['event'];
    $date = $_POST['date'];
    $venue = $_POST['venue'];
    $dateR = $_POST['dateR'];
    $dateC = $_POST['dateC'];
    $amount = $_POST['amount'];
    $status = $_POST['status'];

    $query = "INSERT INTO request (fullname, organization, contact, request, event, date, venue, date_recieved, date_claimed, amount, status) ";
    $query .= "VALUES('{$fullname}','{$oraganization}','{$contact}','{$request}','{$event}',now(),'{$venue}',now(),now(),'{$amount}','{$status}') ";

    $create_query = mysqli_query($connection, $query);

   echo "created";
}
?>
<body style="background:#ffff;">
<?php include "includes/admin_navigation.php"; ?>

<div id="page-wrapper">

    <div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
               Add Request
            </h1>

    <form class="row g-3" action="" method="post" enctype="multipart/form-data">
     
     <div class="form-group ">
         <label for="title">full name</label>
         <input type="text" class="form-control" name="fullname">
     </div>

     <div class="form-group">
         <label for="title">Oragnization</label>
         <input type="text" class="form-control" name="organization">
     </div>
     
        <div class="form-group">
         <label for="post_status">Contact No:</label>
         <input type="text" class="form-control" name="contact">
     </div>

     <div class="form-group">
     <label for="payment">Request</label><br>
         <select name="request" id="">
             <option value="">Select Options</option>
             <option value="financial">Financial</option>
             <option value="inkind">In kind</option>     
         </select>
     </div>

     <div class="form-group">
         <label for="post_status">Event/Purpose</label>
         <input type="text" class="form-control" name="event">
     </div>

     <div class="form-group">
         <label for="post_status">Date</label>
         <input type="date" class="form-control" name="date">
     </div>

     <div class="form-group">
         <label for="post_status">Venue</label>
         <input type="text" class="form-control" name="venue">
     </div>

     <div class="form-group">
         <label for="post_status">Date_Recieved</label>
         <input type="date" class="form-control" name="dateR">
     </div>

     <div class="form-group">
         <label for="post_status">Date_Claimed</label>
         <input type="date" class="form-control" name="dateC">
     </div>

     <div class="form-group">
         <label for="post_status">Amount</label>
         <input type="text" class="form-control" name="amount">
     </div>
     
     <div class="form-group">
         <label for="status">Status</label><br>
         <select name="status" id="">
             <option value="">Select Options</option>
             <option value="claimed">Claimed</option>
             <option value="cancel">Cancelled</option>     
             <option value="process">Process</option>    
         </select>
     </div>
        
     <div class="form-group">
         <input class="btn btn-primary" type="submit" name="submit" value="Create">
     </div>
  
 </form>



    
</div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
</div>
        <!-- /#page-wrapper -->
        </body>
<?php include "includes/admin_footer.php"; ?>