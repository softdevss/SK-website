
                        <table class="table table-striped table-bordered table-hover table-primary">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>username</th>
                                    <th>password</th>
                                    <th>role</th>
                                    <th>Remove</th>
                                    <th>Update</th>
                                 
                                </tr>
                            </thead>
                            <tbody>
                    <?php    
                        
                        $query = "SELECT * FROM users ORDER by id DESC";
                        $select_users = mysqli_query($connection,$query);
                        
                            while($row = mysqli_fetch_assoc($select_users)){
                            $id = $row['id'];
                            $username = $row['username'];
                            $password    = $row['password'];
                            $role  = $row['role'];
                                         
                                         
                        echo "<tr>";   
                            echo "<td>{$id}</td>";  
                            echo "<td>{$username}</td>";          
                            echo "<td>{$password}</td>";  
                            echo "<td>{$role}</td>";   
                            
                            echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete?');\" href='users.php?delete={$id}'>Delete</a></td>";
                            echo "<td><a href='users.php?source=edit_user&edit_user={$id}'>Edit</a></td>";
                        echo "</tr>"; 
                       
                    }     
                    ?>
                            </tbody>
                        </table>
                    <?php

                    if(isset($_GET['delete'])){
    
                    $the_comment_id = $_GET['delete'];
                    
                    $query  = "DELETE FROM users WHERE id = {$the_comment_id} ";
                    $delete_query = mysqli_query($connection,$query);
                    
                    header("Location: users.php");
                    
                
                    
                }
                    ?>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

        <?php include "includes/admin_footer.php" ?>