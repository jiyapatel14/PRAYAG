<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'connect.php';
    $ps_no = $_POST["ps_no"];
    $password = $_POST["password"];
    $fullName = $_POST["fullName"];
    $emailId = $_POST["emailId"];
    $mobileNo = $_POST["mobileNo"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $pincode = $_POST["pincode"];
    $qualification = $_POST["qualification"];
    $field = $_POST["field"];
    $percentage= $_POST["percentage"];
    $program = $_POST["program"];
    $expectations = $_POST["expectations"];

    $exists=false;
    if($exists==false){
        $sql = "INSERT INTO `users1` ( `ps_no`, `password`, `dt`,`fullName`, `emailId`, `mobileNo`, `gender`, `dob`, `address`, `city`, `state`, `pincode`, `qualification`, `field`, `percentage`, `program`, `expectations`) VALUES ('$ps_no', '$password', current_timestamp(),'$fullName', '$emailId', '$mobileNo', '$gender', '$dob', '$address', '$city', '$state', '$pincode', '$qualification', '$field', '$percentage', '$program', '$expectations')";
         $result = mysqli_query($conn, $sql);
         if ($result){
            $showAlert = true;
         }
    }
   }
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <title>Register</title>
    <style>     
        *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
   
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #008080,
        #CCCCFF
    );
    left: -390px;
    top: -210px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #CCCCFF,
        #008080        
    );
    right: -390px;
    bottom: -1350px;
}
form{
    height: 1900px;
    width: 1000px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 110%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h2{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    color: black;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
    color: black;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    margin-left: 330px;
    width: 30%;
    color: #000000;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.display{
    display: block;
}
    </style>
  </head>
  <body style="background-color:#F0FFFF;">
    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>
     <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div class="container my-4">
     <form action="register.php" method="post">
     <h2 class="text-center">Register</h2>
        <div class="form-group">
            <label for="ps_no">PS Number:</label>
            <input type="text" class="form-control" id="ps_no" name="ps_no" aria-describedby="emailHelp">    
        </div>
        <div class="form-group left">
            <label for="fullName">Name:</label>
            <input type="text" class="form-control" id="fullName" name="fullName" aria-describedby="emailHelp">
        </div> 
        <div class="form-group">
            <label for="emailId">Email Id:</label>
            <input type="text" class="form-control" id="emailId" name="emailId" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div style="display: flex; flex-direction: row;">
        <div class="form-group display">
            <label for="mobileNo">Mobile Number:</label>
            <input type="text" class="form-control" id="mobileNo" name="mobileNo" aria-describedby="emailHelp">           
        </div>
        <div class="form-group display">
            <label for="gender">Gender:</label>
            <input type="text" class="form-control" id="gender" name="gender" aria-describedby="emailHelp">           
        </div>
        <div class="form-group display">
            <label for="dob">Date of Birth:</label>
            <input type="text" class="form-control" id="dob" name="dob" aria-describedby="emailHelp">
        </div>   
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" name="address" aria-describedby="emailHelp">     
        </div>

        <div style="display: table;  border-collapse: separate;">
        <div class="form-group" style="display: table-cell" >
            <label for="city">City:</label>
            <input type="text" class="form-control" id="city" name="city" aria-describedby="emailHelp">           
        </div>
        <div class="form-group" style="display: table-cell">
            <label for="state">Sate:</label>
            <input type="text" class="form-control" id="state" name="state" aria-describedby="emailHelp">           
        </div>
        <div class="form-group" style="display: table-cell">
            <label for="pincode">Pin code:</label>
            <input type="text" class="form-control" id="pincode" name="pincode" aria-describedby="emailHelp">
        </div>   
        </div>

        <div class="form-group">
            <label for="qualification">Qualification:</label>
            <input type="text" class="form-control" id="qualification" name="qualification" aria-describedby="emailHelp">  
        </div>

        <div style="display: flex; flex-direction: row;">
        <div class="form-group display">
            <label for="field">Field:</label>
            <input type="text" class="form-control" id="field" name="field" aria-describedby="emailHelp">        
        </div>
        <div class="form-group display">
            <label for="percentage">Percentage:</label>
            <input type="text" class="form-control" id="percentage" name="percentage" aria-describedby="emailHelp">
        </div>  
        </div>

        <div class="form-group">
            <label for="program">Program:</label>
            <input type="text" class="form-control" id="program" name="program" aria-describedby="emailHelp">   
        </div>
        <div class="form-group">
            <label for="expectations">Expectations from the Program:</label>
            <input type="text" class="form-control" id="expectations" name="expectations" aria-describedby="emailHelp">
            
        </div>        
        <button type="submit" class="btn btn-info">Register</button>
     </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>