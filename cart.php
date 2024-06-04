<?php
include 'config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <form action="cart.php" method="POST">
        <button name='home' method='POST'>HOME</button>
        <button name='add' method='POST'>ADD</button>
        <button name='show' method='POST'>SHOW</button><br>
        <?php
        if(isset($_POST['home']))
        {
            header("Location: index.php", true, 301);  
            exit();
        }
        if(isset($_POST['add'])){
        if(isset($_SESSION['email']))
        {
            $mail=$_SESSION['email'];
            $name="dress";
        $price=135;
        $insert=mysqli_query($conn,"INSERT INTO `$mail` (`product_name`, `product_price`) VALUES ('$name', '$price')");
        echo '<script>
                alert("Product added !!");
                </script>';
        }
        else{
            echo '<script>
            alert("Login first!!");
            </script>';
            header("Location: login.php", true, 301);  
            exit();
        }
    }
        if(isset($_POST['show'])){
        if(isset($_SESSION['email']))
        {
            $mail=$_SESSION['email'];
            $show_query=mysqli_query($conn,"SELECT * FROM `$mail` WHERE 1");
            while($row=mysqli_fetch_assoc($show_query))
            {
                echo $row['product_name']."&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp". $row['product_price'];
                echo '<br>';
            }
        }
        else{
            echo '<script>
            alert("Login first!!");
            </script>';
            header("Location: login.php", true, 301);  
            exit();
        }
        }
        if(!isset($_SESSION['email']))
        {
            echo "Login first";
        }
        ?>
    </form>
</body>
</html>
