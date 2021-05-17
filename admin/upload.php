<?php
include '../includes/db.php';


//check if form is submitted
if (isset($_POST['submit']))
{   
        
        $fullname  = $_POST['fullname'];
        $address   = $_POST['address'];
        $contact   = $_POST['contact'];  
        $message   = $_POST['message'];                                     

        $fullname   =  mysqli_real_escape_string($connection, $fullname);
        $address      =  mysqli_real_escape_string($connection, $address);
        $contact    =  mysqli_real_escape_string($connection, $contact);
        $message    =  mysqli_real_escape_string($connection, $message);


    $filename = $_FILES['file1']['name'];

    //upload file
    if($filename != '')
    {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif'];
    
        //check if file type is valid
        if (in_array($ext, $allowed))
        {

            // get last record id
            $sql = 'SELECT MAX(id) AS id FROM tbl_files';
            $result = mysqli_query($connection, $sql);
            if(($result) > 0)
            {
                $row = mysqli_fetch_array($result);
                $filename = ($row['id']+1) . '-' . $filename;
            }
            else
                $filename = '1' . '-' . $filename;

            //set target directory
            $path = 'uploads/';
                
            $created = @date('Y-m-d H:i:s');
            move_uploaded_file($_FILES['file1']['tmp_name'],($path . $filename));
            
            // insert file details into database
            $sql = "INSERT INTO tbl_files(fullname, address, contact, message, filename, created ) "; 
            $sql .= "VALUES('{$fullname}','{$address}','{$contact}','{$message}','{$filename}', '{$created}' ) ";
            mysqli_query($connection, $sql);
            header("Location: ../volunteer.php?st=success");
        }
        else
        {
            header("Location: ../volunteer.php?st=error");
        }
    }
    else
        header("Location: ../volunteer.php");
}
?>