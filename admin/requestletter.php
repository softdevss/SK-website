<?php include "../includes/db.php"; ?>

<?php include "includes/admin_header.php"; ?>

<body style="background:#ffff;">

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Request Letter </h1>
                        <table class="table table-striped  table-hover table-primary">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>fullname</th>
                                    <th>oraganization</th>
                                    <th>contact</th>
                                    <th>request</th>
                                    <th>event</th>
                                    <th>date</th>
                                    <th>venue</th>
                                    <th>date_recieved</th>
                                    <th>date_claimed</th>
                                    <th>status</th>
                                    <th>amount</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                    <?php    
                        
                        $query = "SELECT * FROM request ORDER by id DESC";
                        $select_request = mysqli_query($connection,$query);
                        
                            while($row = mysqli_fetch_assoc($select_request)){
                            $id = $row['id'];
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
                                         
                        echo "<tr>";   
                            echo "<td>{$id}</td>";  
                            echo "<td>{$fullname}</td>";          
                            echo "<td>{$organization}</td>";  
                            echo "<td>{$contact}</td>";          
                            echo "<td>{$request}</td>";  
                            echo "<td>{$event}</td>";
                            echo "<td>{$date}</td>";          
                            echo "<td>{$venue}</td>";  
                            echo "<td>{$dateR}</td>";
                            echo "<td>{$dateC}</td>";          
                            echo "<td>{$status}</td>";  
                            echo "<td>{$amount}</td>";
                            echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete?');\" href='requestletter.php?delete={$id}'>Delete</a></td>";
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

    $query  = "DELETE FROM donate WHERE id = {$the_comment_id} ";
    $delete_query = mysqli_query($connection,$query);

    header("Location: donations.php");

    }

?>