<?php
include '../includes/db.php';


//check if form is submitted
if (isset($_POST['submit']))
{   

    
        
        $fullname  = $_POST['fullname'];
        $address   = $_POST['address'];
        $contact   = $_POST['contact'];
        $date       = $_POST['date'];
        $doctor       = $_POST['doctor'];   
        $message   = $_POST['message'];                                     

        $fullname   =  mysqli_real_escape_string($connection, $fullname);
        $address      =  mysqli_real_escape_string($connection, $address);
        $contact    =  mysqli_real_escape_string($connection, $contact);
        $date    =  mysqli_real_escape_string($connection, $date);
        $doctor    =  mysqli_real_escape_string($connection, $doctor);
        $message    =  mysqli_real_escape_string($connection, $message);

        
        $filename = $_FILES['file2']['name'];

    //upload file
    if($filename != ''){
        
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif'];
    
       
        //check if file type is valid
        if (in_array($ext, $allowed))
        {
           

            // get last record id
            $sql = 'select max(id) as id from tbl_helpdesk ';
            $result = mysqli_query($connection, $sql);
                  
            if(($result) > 0) {

                $row = mysqli_fetch_array($result);
                $filename = ($row['id']+1) . '-' . $filename;
            }else
                $filename = '1' . '-' . $filename;

            //set target directory
            $path = 'helpuploads/';
                
            $created = @date('Y-m-d H:i:s');
            move_uploaded_file($_FILES['file2']['tmp_name'],($path . $filename));
            
            // insert file details into database
            $sql = "INSERT INTO tbl_helpdesk(fullname, address, contact, date, doctor, message, filename, created ) ";
            $sql .= "VALUES('{$fullname}','{$address}','{$contact}', '{$date}', '{$doctor}', '{$message}', '{$filename}', '{$created}' ) ";
           $result_query = mysqli_query($connection, $sql);

           if(!$result_query){
               die('QUERY FAILED' . mysqli_error($connection));
           }

            header("Location: ../helpdesk.php?sd=success");
        }else{
            header("Location: ../helpdesk.php?sd=error");
        }
    }else
        header("Location: ../helpdesk.php");
}
?>