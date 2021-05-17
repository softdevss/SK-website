
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
                        <h1 class="page-header"> Online Help Desk</h1>
                       <table class="table table-striped  table-hover table-primary">
                       <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                       <th>Full Name</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Date of Birth</th>
                         <th>Doctor</th>
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
$sql = "select filename from tbl_helpdesk ";
$result = mysqli_query($connection, $sql);

            $query = "SELECT * FROM tbl_helpdesk ORDER by id DESC";
                        $result = mysqli_query($connection,$query);
                        $i =1;
                            while($row = mysqli_fetch_array($result)){ 
                            
                   
                            $id = $row['id'];
                            $fullname = $row['fullname'];
                            $address  = $row['address'];
                            $contact    = $row['contact'];
                            $date       = $row['date'];
                            $doctor    = $row['doctor'];
                            $message  = $row['message'];              
                              

                                 ?>
                          
                          
                           
                    <?php

                        echo "<tr>";  ?> 
                            <td><?php echo $i++; ?></td>
                            <?php
                             
                            echo "<td>{$fullname}</td>"; 
                            echo "<td>{$address}</td>";          
                            echo "<td>{$contact}</td>"; 
                            echo "<td>{$date}</td>";   
                            echo "<td>{$doctor}</td>"; 
                            echo "<td>{$message}</td>"; ?>
                            <td><?php echo $row['filename']; ?> </td>
                            <?php ?>
                            
                            <td><button class><a href="helpuploads/<?php echo $row['filename']; ?>" target="_blank">View</td>
                            <?php ?>
                            <td><button class><a href="helpuploads/<?php echo $row['filename']; ?>" download>Download
                            </td> <?php
                            echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete?');\" href='helpdeskview.php?delete={$id}'>Delete</a></td>";
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
    
                $helpdesk_id = $_GET['delete'];
                
                $query  = "DELETE FROM tbl_helpdesk WHERE id = {$helpdesk_id} ";
                $delete_query = mysqli_query($connection,$query);
                
                header("Location: helpdeskview.php");
                
            
        
            }
?>
