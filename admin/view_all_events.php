

    <body style="background:#ffff;">



<!-- Navigation -->
<?php include "includes/admin_navigation.php"; ?>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12 ">
                <h1 class="page-header">Events </h1>
                <table class="table table-striped  table-hover table-primary">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Event category</th>
                            <th>Event Title</th>
                            <th>Event Content</th>
                            <th>Event User</th>
                            <th>Event date</th>
                            <th>Event Image</th>
                            <th>Event Links</th>
                            <th>Event Status</th>
                            <th>Remove</th>
                            <th>Update </th>
                           
                        </tr>
                    </thead>
                    <tbody>
            <?php    
                
                $query = "SELECT * FROM events ORDER by id DESC";
                $select_request = mysqli_query($connection,$query);
                
                    while($row = mysqli_fetch_assoc($select_request)){
                    $id             = $row['id'];
                    $event_title    = $row['news_title'];
                    $event_content  = $row['event_content'];
                    $event_user     = $row['event_user'];
                    $event_date     = $row['event_date'];
                    $event_image    = $row['event_image'];
                    $event_status   = $row['event_status'];
                    $event_link     = $row['event_link'];
                    $event_category = $row['event_category'];
                   
                               
                                    
                echo "<tr>";   
                    echo "<td>{$id}</td>";  
                    echo "<td>{$event_category}</td>";
                    echo "<td>{$event_title}</td>";
                    echo "<td>{$event_content}</td>";            
                    echo "<td>{$event_user}</td>";  
                    echo "<td>{$event_date}</td>"; 
                              
                    echo "<td><img width='50' src='../image/$event_image' alt='image'></td>";
                    echo "<td>{$event_link}</td>";  
                    echo "<td>{$event_status}</td>";          

                    echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete?');\" href='events.php?delete={$id}'>Delete</a></td>";
                    echo "<td><a href='events.php?source=edit_event&edit_event_id={$id}'>Edit</a></td>";
                echo "</tr>"; 
                
            }     
            ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

<?php include "includes/admin_footer.php" ?>

<?php 
if(isset($_GET['delete'])){

$the_comment_id = $_GET['delete'];

$query  = "DELETE FROM events WHERE id = {$the_comment_id} ";
$delete_query = mysqli_query($connection,$query);

header("Location: events.php");

}

?>