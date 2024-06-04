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
    <style>
      body{
        font-size: larger;
      }
      nav{
        color: whitesmoke;
      }
      #crsl,#dress,#jewel{
        height: 400px;
        width: 300px;
      }
      #lg{
        margin-left: 400px;
      }
      .coros{
        display: flex;
        justify-content:space-between;
      }
      h3{
        text-align: center;
      }
    </style>
    <title>Kharido</title>
  </head>
  <body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Kharido</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Product
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Shoes</a></li>
            <li><a class="dropdown-item" href="#">Men's Wear</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Women's Wear</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <?php
          if(isset($_SESSION['username']))
          {
             echo '';
          }
          else{
            echo '<a class="nav-link" href="/E-commerce/login.php">Sign In</a>';
          }
          ?>
        </li>
        <li class="nav-item">
        <?php
          if(isset($_SESSION['username']))
          {
            echo '';
          }
          else{
            echo '<a class="nav-link" href="/E-commerce/sign_up.php">Sign Up</a>';
          }
          ?>
        </li>
        <?php
          if(isset($_SESSION['username']))
          {
            echo '<a class="nav-link" href="/E-commerce/cart.php">Cart</a>';
          }
          else{
            echo '<a class="nav-link" href="/E-commerce/login.php">Cart</a>';
          }
          ?>
        </li>
        <li class="nav-item" id="lg">
          <?php
          if(isset($_SESSION['username']))
          {
            echo '<a class="nav-link" href="/E-commerce/logout.php">'.$_SESSION['username'].'</a>';
          }
          else{
            echo '';
          }
          ?>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="coros">
<div id="crsl">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img2.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img3.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img4.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<div id="dress">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="clothes1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="clothes2.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="clothes3.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="clothes4.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
    <div id="jewel">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="jewel1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="jewel2.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="jewel3.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="jewel4.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
    </div>
</div>
<div id="about">
  <h3>
    <u><b>About Us</b></u>
  </h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minima doloribus eveniet dolorem tempora saepe aliquam consequuntur magni officia nihil. Accusamus ipsam repellendus perspiciatis tempora earum. Voluptatibus quae veniam veritatis.</p>
  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam dolores aperiam sit amet iste repellat, dolore nam minima recusandae sunt suscipit similique ducimus officiis nesciunt saepe velit nihil, tenetur voluptatem.
  Nisi esse natus dolorum magni quam sapiente voluptatem molestias, aspernatur soluta? Corporis recusandae laborum modi asperiores iste eum, quos aliquid expedita mollitia dolores iusto sed vel exercitationem optio, officia natus?
  A labore laudantium veritatis, aliquid perspiciatis repellat consectetur aliquam voluptatibus, alias inventore, accusamus voluptatum cum. Explicabo blanditiis quis vel eveniet iste corrupti nemo, facere, totam dolores maxime ducimus quaerat nam?</p>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <hr>
    <span>&copy;Vignan University</span>
    <hr>
  </body>
</html>