<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="pavi-style.css">
    <link rel="stylesheet" href="header-footer-1.css">
    <title>Oden</title>
</head>
<body>
    <!--HEADER-->
     <nav class="header">
		<?php
		include("menu.php");
		?>
    </nav>

    <!--CONTENT AREA-->
    <div class="left">
        <img src="oden.jpg" alt="">   
    </div>

    <div class="right">
        <h3>Oden</h3>
        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

        <h4>RM8.00</h4>


        <div class="quantity">
		<?php $_SESSION['prod_id'] = "1";?>
            <button class="add-to-cart"><a href="shop-cart.php">Add to cart</a></button>
        </div>

        
     <div class="desc">
                <h4>Description</h4>
                <p id="desc-cfs"> Oden is a popular Japanese dish that has found a warm welcome in Malaysia. It's a type of nabemono, or one-pot dish, typically consisting of various ingredients like fish cakes, konnyaku, tofu, and vegetables simmered in a savory broth</p>
            </div>
        </div>
    </div>
    
   
   

<!--JAVASCRIPT  -->    
<script src="js/calculate.js"></script>
</body>
</html>