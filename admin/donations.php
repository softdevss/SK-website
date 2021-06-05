<?php include "../includes/db.php"; ?>

<?php include "includes/admin_header.php"; ?>

<body style="background:#fff;">

    <div id="">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php"; ?>

        <div id="">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"> Donations</h1>
                        <table class="table table-striped  table-hover table-primary">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Fullname</th>
                                    <th>Contact</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Donation</th>
                                    <th>Remove</th>
                                </tr>
                               
                            </thead>
                                
                            <tbody>
                    <?php    
                        
                        $query = "SELECT * FROM donate ORDER by id DESC";
                        $select_donate = mysqli_query($connection,$query);
                        
                            while($row = mysqli_fetch_assoc($select_donate)){
                            $id = $row['id'];
                            $name = $row['name'];
                            $contact    = $row['contact'];
                            $address  = $row['address'];
                            $email  = $row['email'];
                            $donation  = $row['donation'];               
                                         
                        echo "<tr>";   
                            echo "<td >{$id}</td>";  
                            echo "<td>{$name}</td>";          
                            echo "<td>{$contact}</td>";  
                            echo "<td>{$address}</td>";        
                            echo "<td>{$email}</td>";  
                            echo "<td>{$donation}</td>";
                            echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete?');\" href='donations.php?delete={$id}'>Delete</a></td>";
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
        </body>
        <?php include "includes/admin_footer.php" ?>

        <?php 
    if(isset($_GET['delete'])){

    $the_comment_id = $_GET['delete'];

    $query  = "DELETE FROM donate WHERE id = {$the_comment_id} ";
    $delete_query = mysqli_query($connection,$query);

    header("Location: donations.php");

    }

?>