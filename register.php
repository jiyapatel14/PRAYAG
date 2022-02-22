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
//     else{
//         $showError = "Passwords do not match";
//     }
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

    <title>Register</title>
  </head>
  <body>
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

    <div class="container my-4">
     <h1 class="text-center">Register</h1>
     <form action="login.php" method="post">
        <div class="form-group">
            <label for="ps_no">PS Number:</label>
            <input type="text" class="form-control" id="ps_no" name="ps_no" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
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
        <div class="form-group">
            <label for="mobileNo">Mobile Number:</label>
            <input type="text" class="form-control" id="mobileNo" name="mobileNo" aria-describedby="emailHelp">           
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <input type="text" class="form-control" id="gender" name="gender" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="text" class="form-control" id="dob" name="dob" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" name="address" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" class="form-control" id="city" name="city" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="state">Sate:</label>
            <input type="text" class="form-control" id="state" name="state" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="pincode">Pin code:</label>
            <input type="text" class="form-control" id="pincode" name="pincode" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="qualification">Qualification:</label>
            <input type="text" class="form-control" id="qualification" name="qualification" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="field">Field:</label>
            <input type="text" class="form-control" id="field" name="field" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="percentage">Percentage:</label>
            <input type="text" class="form-control" id="percentage" name="percentage" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="program">Program:</label>
            <input type="text" class="form-control" id="program" name="program" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="expectations">Expectations from the Program:</label>
            <input type="text" class="form-control" id="expectations" name="expectations" aria-describedby="emailHelp">
            
        </div>

      
         
        <button type="submit" class="btn btn-primary">Register</button>
     </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>