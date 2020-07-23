
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="shortcut icon" href="img/two-2.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Logging out</title>
  </head>

  
  <body>
    
  <?php
session_start();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{
    
        
        sleep(3);
        session_unset();
        session_destroy();
        header("location: login.php");
        
}

     else
     {
    echo '<div class="alert alert-dark alert-dismissible fade show" role="alert" >
  <strong>Sorry!</strong> But you have to logged in first  <a href ="login.php" style="color:red;">&larr;Go back</a> 
  <a href ="login.php"><button type="button" class="close" style = "outline:none">
    <span aria-hidden="true">&times;</span>
  </button></a> <br>
  <img src = "https://images.hdqwalls.com/download/404-error-cyberpuk-girl-9x-1280x720.jpg" style = "border-radius:40px; width:96vw; height:auto;margin-top:10px">
</div>';



     }
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>