<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'connect.php';
    $ps_no = $_POST["ps_no"];
    $password = $_POST["password"];
    // $exists=false;
    // if($exists==false){
    //     $sql = "INSERT INTO `users1` ( `ps_no`, `password`, `dt`) VALUES ('$ps_no', '$password', current_timestamp())";
    //     $result = mysqli_query($con, $sql);
    //     if ($result){
    //         $showAlert = true;
    //      }
    // }
    $sql = "Select * from users1 where ps_no='$ps_no' AND password='$password'";
    // echo $sql;
    // exit();
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        while($row=mysqli_fetch_assoc($result)){
            // if (password_verify($password, $row['password'])){ 
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['ps_no'] = $ps_no;
                header("location: dashboard.php");
            // } 
            // else{
            //     $showError = "Invalid Credentials";
            // }
        }
        
    } 
    else{
        $showError = "Invalid Credentials";
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <title>Login</title>
    <style media="screen">
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
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #CCCCFF,
        #008080
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
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
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
    </style>
  </head>
  <body style="background-color:#F0FFFF;">
    <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div class="container my-4">
     <form action="login.php" method="post">
     <h2 class="text-center">Login</h2>
        <div class="form-group">
            <label for="ps_no">PS Number:</label>
            <input type="text" class="form-control" id="ps_no" name="ps_no" placeholder="PS number" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
        </div>
        <!-- <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword">
            <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
        </div> -->
         
        <button type="submit" class="btn btn-info">Login</button>
     </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>