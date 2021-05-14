<?php
$servername = "localhost";
$username   = "root";
$password = "";
$databasename = "sk_san_isidro";


$connection = mysqli_connect($servername,$username ,$password,$databasename);

if(!$connection){
    
    die("QUERY FAILED");
    
}

echo "";


?>
