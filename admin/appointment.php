<?php include "../includes/db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<?php include "includes/admin_header.php"; ?>

<body style="background:#ffffff;">

    <div id="">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php"; ?>

        <div id="">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"> Contact</h1>
                       <table class="table table-striped  table-hover table-primary">
                       <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>Fullname</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Date</th>
                                <th>Purpose</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php

                        $query = "SELECT * FROM appointment ORDER by id DESC";
                        $select_appointment = mysqli_query($connection,$query);

                        while($row = mysqli_fetch_assoc($select_appointment)){
                        $id = $row['id'];
                        $fullname = $row['name'];
                        $email = $row['email'];
                        $contact = $row['contact'];
                        $address = $row['address'];
                        $date = $row['date'];
                        $purpose = $row['purpose'];
                                
                        echo "<tr>";   
                            echo "<td>{$id}</td>";  
                            echo "<td>{$fullname}</td>";          
                            echo "<td>{$email}</td>";      
                            echo "<td>{$contact}</td>";  
                            echo "<td>{$address}</td>";
                            echo "<td>{$date}</td>";
                            echo "<td>{$purpose}</td>"; 
                            echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete?');\" href='appointment.php?delete={$id}'>Delete</a></td>";
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
                
                $query  = "DELETE FROM appointment WHERE id = {$the_comment_id} ";
                $delete_query = mysqli_query($connection,$query);
                
                header("Location: appointment.php");
                
            
                
            }
?>

