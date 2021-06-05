<?php include "includes/admin_header.php"; ?>
   
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
                    <small> <?php echo $_SESSION['fullname']; ?> </small>
                </h1>
                
                <?php
                    
               if(isset($_GET['source'])){
                   
                $source = $_GET['source'];
                       
               }else{
                  
                   $source = '';                  
               }
               
               switch($source){
                 
                    case 'add_request':
                      include "add_request.php";
                    break;
                       
                    case 'edit_request':
                       include "edit_request.php";
                    break;
                       
                    case '344':
                       echo "Nice";
                    break;
                       
                    case '314':
                       echo "Nice";
                    break;
                       
                   default:   
                       include "view_all_request.php";
                    break;
                       
               }
               
               
                     ?>
           </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
</div>
        <!-- /#page-wrapper -->

<?php include "includes/admin_footer.php"; ?>