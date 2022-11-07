
<?php
if (!isset($_COOKIE['status'])) {
  header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

 <style>

     .index{
             
            font-size:100px;
            font-weight:bold;
            color:red;

     }
   

 </style>




</head>
<body>
<div class="container">
        <header>
            <div>
               
                    <span class="index">Online Food Cart</span>
                </a>

                <nav class="d-inline-flex mt-md-0 ms-md-auto">
                    <a class href="home.php">Home</a>
                    <a class href="viewcart.php">View Cart</a>
                </nav>
            </div>
        </header>
     
               <div class="card-body">
                    <h1 >Burger</h1>
                    <ul >
                        <li><img src="burger.jpeg" alt="Burger" style="width:50%;height:25%;"></li>
                        <li>Price: 1000</li>
                    </ul>
                    <form action="addcart.php" method="post">
                        <input type="hidden" name="name" value="Burger">
                        <input type="hidden" name="price" value="1000">
                       
                    </form>
                </div>
                </div>
            </div>

            <div class="col">
                <div >
                <div >
                    <h4 class="my-0 fw-normal">Pizza Items</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title">Pizza</h1>
                    <ul >
                        <li><img src="pizza.jpg" alt="Pizza" style="width:50%;height:250px;"></li>
                        <li>Price: 3000</li>
                    </ul>
                    <form action="addcart.php" method="post">
                        <input type="hidden" name="name" value="Pizza">
                        <input type="hidden" name="price" value="3000">
                        
          </form>
            
            
</body>
</html>