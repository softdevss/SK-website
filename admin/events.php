<?php include "includes/admin_header.php"; ?>
   
    <div id="" style="background:#fff;">

        <!-- Navigation -->
       
<?php include "includes/admin_navigation.php"; ?>

<div id="" style="background:#fff;">

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
                 
                    case 'add_event':
                      include "add_event.php";
                    break;
                       
                    case 'edit_event':
                       include "edit_event.php";
                    break;
                       
                    case '344':
                       echo "Nice";
                    break;
                       
                    case '314':
                       echo "Nice";
                    break;
                       
                   default:   
                       include "view_all_events.php";
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