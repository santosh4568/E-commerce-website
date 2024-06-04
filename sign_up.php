<?php 
include 'config.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .container{
            height: 500px;
            width: 500px;
            border: 4px double black;
            margin-top: 5%;
            margin-left: 35%;
        }
        h1{
            text-align: center;
        }
        #register{
            margin-left: 35%;
        }
    </style>
    <title>Sign Up</title>
  </head>
  <body>
    <h1><u><b>REGISTER HERE</b></u></h1>
    <form action="/E-commerce/sign_up.php" method="POST">
    <div class="container">
    <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label"><b>First Name</b></label>
  <input type="text" class="form-control" name="first" placeholder="Enter your first name" Required>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label"><b>Last Name</b></label>
  <input type="text" class="form-control" name="last" placeholder="Enter your Last Name" Required>
</div>
<div class="mb-3">
<label for="formGroupExampleInput" class="form-label"><b>Email</b></label>
  <input type="email" class="form-control" name="mail" placeholder="Enter your email/user name" Required>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label"><b>Password</b></label>
  <input type="password" class="form-control" name="pass" placeholder="Enter your password" Required>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label"><b>Confirm Password</b></label>
  <input type="password" class="form-control" name="con_pass" placeholder="Enter your password" Required>
</div>
<button name="submit" Method="POST" id="register"><b>Register</b></button>
<button id="reset"><b>Reset</b></button><br>
<p>Already have an account?
<a href="/E-commerce/login.php"><b>Login</b></a>
</p>
    </div>
    <?php 
    if(isset($_POST['submit']))
    {
        $frst=$_POST['first'];
        $lst=$_POST['last'];
        $mail=$_POST['mail'];
        $pass=$_POST['pass'];
        $pass_con=$_POST['con_pass'];
        if($pass==$pass_con)
        {
            $mail_query=mysqli_query($conn,"SELECT * FROM `login` WHERE `mail` LIKE '$mail'");
            if(mysqli_num_rows($mail_query)>0){
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Duplication !</strong> Given user name/Email is already registered.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
            else{
              $qr=mysqli_query($conn,"CREATE TABLE `website`.`$mail` (`product_name` VARCHAR(50) NOT NULL , `product_price` INT NOT NULL ) ENGINE = InnoDB");
                $insert_query=mysqli_query($conn,"INSERT INTO `login` (`First_name`, `Last_name`, `mail`, `password`) VALUES ('$frst', '$lst', '$mail', '$pass')");
                if($insert_query)
                {
                  header("Location: login.php", true, 301);  
                  exit();
                }
            }
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Wrong Password!</strong> You have entered wrong password.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    }
    ?>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
        document.getElementById("reset").reset();
    </script>
  </body>
</html>