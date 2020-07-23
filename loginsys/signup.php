<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    // $exists=false;

    $sqlexist = "select * from users where username='$username'";
    $result = mysqli_query($conn,$sqlexist);
    $nr = mysqli_num_rows($result);

    if($nr>0)
    {
        $showError = "Username already exists , Try another one!";
    }

   else{
    
    if(($password == $cpassword)){
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', '$hash', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    }

    else{
        $showError = "Passwords do not match";
    }
}
}

    
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="shortcut icon" href="img/two-2.png" type="image/x-icon">

    <title>SignUp</title>
</head>

<body style="background-color: rgb(18, 18, 51);">
    <?php require 'partials/_nav.php'; ?>
    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login  &rarr; <a href="login.php" style ="color:red";>Press Here for Login</a>
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

    <div class="container col-md-6 mt-5" style="background-color: rgba(230, 230, 250, 0.664); border-bottom-right-radius: 40px;border-top-left-radius: 40px; border-bottom: 10px solid rgb(155, 98, 216);">
        <h2 class="text-center py-4" style="font-family:'Pacifico', cursive; text-shadow: 1px 1px whitesmoke;">SignUp to Our Website..</h2>

        <form action="/loginsys/signup.php" method="post">
            <div class="form-group px-5">
                <label for="username"><b><i>Username</i></b> </label>
                <input type="text" maxlength="20"class="form-control" id="username" name="username" placeholder = "First letter should be capital" aria-describedby="emailHelp" style="box-shadow: 4px 4px  rgb(164, 64, 173);" required>

            </div>
            <div class="form-group px-5">
                <label for="password"><b><i>Password</i></b></label>
                <input type="password" maxlength="30" class="form-control" id="password" name="password" placeholder="It should be strong" style="box-shadow: 4px 4px  rgb(164, 64, 173);">
                <small id="emailHelp" class="form-text " style="color:rgb(255, 255, 255);">Please remember your password!</small>
            </div>
            <div class="form-group px-5">
                <label for="cpassword"><b><i>Confirm Password</i></b></label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" style="box-shadow: 4px 4px  rgb(164, 64, 173);">
                <small id="emailHelp" class="form-text " style="color:rgb(255, 255, 255);"style="color:rgb(255, 255, 255);">Make sure you will enter the same password as
                    above..</small>
            </div>

            <button type="submit" class="btn btn-primary mx-5 mb-5" style="background-color: rgb(164, 64, 173); border: 1px solid rgb(173, 102, 201);">SignUp</button>
            <small id="emailHelp" class="form-text  "style="display:inline;color:rgb(255, 255, 255)" ; >If exists &rarr;</small>
            <a href ="login.php" style="color:rgb(164, 64, 173);">Login</a>
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