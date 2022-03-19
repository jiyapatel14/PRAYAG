<?php 
$servername = "localhost"; 
$username = "root"; 
$password = "";
$database = "prayag_register";  
   
// Create a connection 
$con = mysqli_connect($servername, $username, $password, $database);
if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}

?>