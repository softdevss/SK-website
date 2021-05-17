
<!DOCTYPE html>
<html lang="en">
<?php include "includes/admin_header.php"; ?>

<body style="background:#ffffff;">

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"> Be A Volunteer</h1>
                       <table class="table table-striped  table-hover table-primary">
                       <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                       <th>Full Name</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Message</th>
                        <th>File Name</th>
                        <th>View</th>
                        <th>Download</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    
               <?php

// fetch files
$sql = "select filename from tbl_files";
$result = mysqli_query($connection, $sql);

            $query = "SELECT * FROM tbl_files ORDER by id DESC";
                        $result = mysqli_query($connection,$query);
                        $i =1;
                            while($row = mysqli_fetch_array($result)){ 
                            
                   
                            $id = $row['id'];
                            $fullname = $row['fullname'];
                            $address  = $row['address'];
                            $contact    = $row['contact'];
                            $message  = $row['message'];              
                              

                                 ?>
                          
                          
                           
                    <?php

                        echo "<tr>";  ?> 
                            <td><?php echo $i++; ?></td>
                            <?php
                            echo "<td>{$fullname}</td>"; 
                            echo "<td>{$address}</td>";          
                            echo "<td>{$contact}</td>";    
                            echo "<td>{$message}</td>"; ?>
                            <td><?php echo $row['filename']; ?> </td>
                            <?php ?>
                            
                            <td><button class><a href="uploads/<?php echo $row['filename']; ?>" target="_blank">View</td>
                            <?php ?>
                            <td><button class><a href="uploads/<?php echo $row['filename']; ?>" download>Download
                            </td> <?php
                             echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete?');\" href='volunteerview.php?delete={$id}'>Delete</a></td>";
                            echo "</tr>"; 
                            ?>
                        

                            <?php
                        

                       
                       
                    }   ?>  





                    </tbody>
            </table>
        </div>
    </div>
</div>
<?php include "includes/admin_footer.php" ?>


<?php
              if(isset($_GET['delete'])){
    
                $tbl_volunteer = $_GET['delete'];
                
                $query  = "DELETE FROM tbl_files WHERE id = {$tbl_volunteer} ";
                $delete_query = mysqli_query($connection,$query);
                
                header("Location: volunteerview.php");
                
            
                
            }
?>