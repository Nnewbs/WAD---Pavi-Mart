<?php
// Start the session
$userid = "";
$username = "";
try{
	if(isset($_SESSION["userid"])){
		$userid = $_SESSION["userid"];
		$username = $_SESSION["username"];
	}
	else{
		$_SESSION["userid"] = "";
		$_SESSION["username"] = "";
	}
}
catch(Exception $e) {
  $_SESSION["userid"] = "";
  $_SESSION["username"] = "";
}

?>

	<h1>PaviMart.</h1>
	<div class="nav-link">
		<ul>
			<li><a href="home.php"><b>HOME</b></a></li>
			<li><a href="about-us.php"><b>ABOUT US</b></a></li>
			<li><a href="shop.php"><b>SHOP</b></a></li>
			<li><a href="contact.php"><b>CONTACT</b></a></li>
			<li><a href="user-cart.php"><i class="fas fa-cart-plus"></i></a></li>
			<?php
			if($userid != ""){
				echo "<li><a href='user-profile.php'><i class='fas fa-user-circle'></i></a>".$username."</li>";
			}
			else{
				echo "<li><a href='login.php'><i class='fas fa-user-circle'></i></a></li>";
			}
			?>
	</ul>
    </div>
	
	