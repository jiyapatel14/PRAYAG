<?php 
$servername = "localhost"; 
$username = "root"; 
$password = "";   
$database = "prayagreg";
   
// Create a connection 
$conn = new mysqli_connect($servername, $username, $password, $database);
if($conn){
    echo"success";
}
else{
    die("Error".mysqli_connect_error());
}
         
?>