<?php
$login = false;
$showError = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    // $sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "Select * from users where username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        while($row=mysqli_fetch_assoc($result))
        {
            if(password_verify($password,$row['password']))
            {
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                sleep(2);
                header("location: welcome.php");
            }
            else{
                $showError = "Invalid Credentials";
            }

        }

    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>
<!doctype html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="shortcut icon" href="img/two-2.png" type="image/x-icon">

    <title>login</title>
</head>

<body style="background-color: rgb(18, 18, 51);">
    <?php require 'partials/_nav.php'; ?>
    <?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> you have been logged in successfully..
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> '. $showError.' You can sign up if your account doesnot exist  <a href ="signup.php" style="color:red;">&rarr; Sign up&larr;</a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div> ';
        }
    
?>

    <div class="container col-md-5 mt-5" style="background-color: rgba(230, 230, 250, 0.664); border-bottom-right-radius: 40px;border-top-left-radius: 40px; border-bottom: 10px solid rgb(155, 98, 216);">
        <h2 class="text-center py-4" style="font-family:'Pacifico', cursive; text-shadow: 1px 1px whitesmoke;">Login to Our Website..</h2>

        <form action="/loginsys/login.php" method="post">
            <div class="form-group px-5">
                <label for="username"><b><i>Username</i></b> </label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" required style="box-shadow: 4px 4px  rgb(164, 64, 173);">

            </div>
            <div class="form-group px-5">
                <label for="password"><b><i>Password</i></b></label>
                <input type="password" class="form-control"  id="password" name="password" style="box-shadow: 4px 4px  rgb(164, 64, 173);">
            </div>
            

            <button type="submit" class="btn btn-primary mx-5" style="background-color: rgb(164, 64, 173); border: 1px solid rgb(173, 102, 201);">Login</button>

            <p id="emailHelp" class="form-text  pb-5 mt-4 px-5" style="color:rgb(255, 255, 255);">For new users &rarr; <a href = "signup.php" style="color: purple;"><strong>Signup here</strong></a></p>
        </form>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

</html>