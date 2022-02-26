<?php 
$servername = "localhost"; 
$username = "root"; 
$password = "";   
$database = "prayagreg";
   
// Create a connection 
$conn = mysqli_connect($servername, $username, $password, $database);
if($con){
    echo"success";
}
else{
    die("Error".mysqli_connect_error());
}
         
?>