
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PAVI MART</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS/style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <script type="text/javascript" src="JS/script.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  
<style>
	.grid > article{
		width: 350px;
	}

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: Arial, sans-serif;
    text-align: center;
  }

  .home {
    position: relative;
    text-align: center;
    color: white;
  }

  .home img {
    width: 100%;
    max-height: 700px;
    object-fit: cover;
  }

  .home-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
  }

  .home-content h1 {
    font-size: 50px;
    margin-bottom: 20px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
  }

  .home-content p {
    font-size: 20px;
    margin-bottom: 30px;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
  }

  .home-content button {
    padding: 10px 20px;
    font-size: 18px;
    margin: 10px;
    border: 1px solid;
    border-radius: 5px;
    cursor: pointer;
    background-color: transparent;
    color: white;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    transition: background-color 0.3s;
  }

  .home-content button:hover {
    background-color: #000000;
  }
</style>
</head>
<body>

<!--Top Navigation Bar-->
<div id="navbar-frame">

</div>

<script>
$(function(){
  $("#navbar-frame").load("navbar.html");
});
</script>
<!--end of Navigation bar-->

<!-- Home Section -->
<div class="home">
  <img src="images/homepage.jpeg" alt="Homepage">
  <div class="home-content">
    <h1>PAVI MART</h1>
    <p>Your one-stop convenience store offering delicious oden, quick instant meals, 
      and all the essentials you need. From snacks to necessities, 
      we’re here to make your day easier and more satisfying</p>
    <button onclick="location.href='Shop.php'">VIEW MENU CARD</button>
    <button onclick="location.href='aboutUs.php'">OPENING HOURS</button>
  </div>
</div>
  
  <!-- Categories Section-->
  <div class="container-1">
      <br><br>
      <p class="middle"> Categories </p>
      <main class="grid">
        <article>
        <img height="500px"src="images/.jpg" alt="" width="100%">
          <div class="texts">
            <h3></h3>
            <button href="">Snack</button>
          </div>
        </article>
  
        <article>
        <img height="500px"src="images/.jpg" alt="" width="100%">
          <div class="texts">
            <h3></h3>
            <button href="product.php">Fresh Food</button>
          </div>
        </article>
  
        <article>
          <img height="500px"src="images/.jpg" alt="" width="100%">
          <div class="texts">
            <h3></h3>
            <button>Bake Goods</button>
          </div>
        </article>
      </main>
  </div>

  <!-- Promotion Section-->
  <div class="container-1">
    <br><br>
    <p class="middle"> Promotion </p>
    <main class="grid">
      <article>
      <img height="500px"src="images/.jpg" alt="" width="100%">
        <div class="texts">
          <h3></h3>
          <button href="">Oden Combo Set</button>
        </div>
      </article>

      <article>
      <img height="500px"src="images/.jpg" alt="" width="100%">
        <div class="texts">
          <h3></h3>
          <button href="product.php">Breakfast Pack</button>
        </div>
      </article>

      <article>
        <img height="500px"src="images/.jpg" alt="" width="100%">
        <div class="texts">
          <h3></h3>
          <button>Snack Bundle Deals</button>
        </div>
      </article>
    </main>
</div>

  <!-- Student's Favourite Section -->
  <div class="container-1">
    <br><br>
    <p class="middle"> Student's Favourite </p>
    <main class="grid">
      <article>
      <img height="500px"src="images/.jpg" alt="" width="100%">
        <div class="texts">
          <h3></h3>
          <button href="">Oden's Cup</button>
        </div>
      </article>

      <article>
      <img height="500px"src="images/.jpg" alt="" width="100%">
        <div class="texts">
          <h3></h3>
          <button href="product.php">Mee Maggi Curry 70g</button>
        </div>
      </article>

      <article>
        <img height="500px"src="images/.jpg" alt="" width="100%">
        <div class="texts">
          <h3></h3>
          <button>Mee Sedap Original Cup 70g</button>
        </div>
      </article>
    </main>
</div>

<!-- Script Section -->
<script>
    // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("navbar").style.padding = "30px 10px";
        document.getElementById("logo").style.fontSize = "25px";
      } else {
        document.getElementById("navbar").style.padding = "45px 10px";
        document.getElementById("logo").style.fontSize = "35px";
      }
    }
</script>
</body>
</html>