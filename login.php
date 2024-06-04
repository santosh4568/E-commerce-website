<?php
session_start();
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

    <title>Login</title>
    <style>
        .container{
            height: 330px;
            width: 350px;
            background-color: burlywood;
            border: 5px double black;
        }
        #image{
            height: 20%;
            width: 70%;
            background-image: url("logo.jpeg");
            background-size: contain;
            background-repeat: no-repeat;
            background-color: burlywood;
            margin-left: 30%;  
        }
        #head{
            height: 100px;
            width: 800px;
            margin-left: 20%;
            margin-bottom: 50px;
            background-color: red;
            background-image: url("heading.jpeg");
            background-size: contain;
        }
        button{
            margin-left: 40%;
        }
    </style>
  </head>
  <body>
    <div id="head">

    </div>
    <div class="container">
        <div id="image">

        </div>
    <form method="POST" action="/E-commerce/login.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><b>User Name</b></label>
    <input type="text" class="form-control" id="user" aria-describedby="emailHelp" name="user" Required>
  <div class="mb-3">
    <label for="pass" class="form-label"><b>Password</b></label>
    <input type="password" class="form-control" id="pass" name="pass" Required>
  </div>
  <button type="submit" class="btn btn-primary" name="login" method="POST">Login</button><br>
  <p>Don't have an account?
  <a href="/E-commerce/sign_up.php"><b>Sign up</b></a>
  </p>
  <?php 
  if(isset($_POST['login']))
  {
    $usr=$_POST['user'];
    $password=$_POST['pass'];
    $query=mysqli_query($conn,"SELECT * FROM `login` WHERE `mail` LIKE '$usr'");
        if(mysqli_num_rows($query)>0){
            $row=mysqli_fetch_assoc($query);
            if($password==$row['password'])
            {
              $_SESSION['username']=$row['First_name'];
              $_SESSION['email']=$row['mail'];
              header("Location: index.php", true, 301);  
              exit();
            }
            else{
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Wrong Password!</strong> You have entered wrong password.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        }
        else{
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Not Registered !</strong> You should register first.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
  };
  ?>
</form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>