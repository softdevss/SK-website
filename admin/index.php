<?php include "includes/admin_header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<body style="background:#ffff;">

    <div id="">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php"; ?>
        

        <div id="">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Welcome to Admin            
                           <Strong style="text-transform:uppercase; color:grey;"> <?php echo $_SESSION['fullname']; ?> </Strong>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include "includes/admin_footer.php" ?>

