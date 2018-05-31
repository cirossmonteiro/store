<!DOCTYPE html>
<html>
	<head>
  		<title>Freed Soul - Online Store</title>
  		<?php
			//echo file_get_contents("styles.html");
		?>
		<link rel="stylesheet" type="text/css" href="catarina.css">
		<link rel="stylesheet" type="text/css" href="allstyle.css">

		<style>
			/*body {font-family: Arial, Helvetica, sans-serif;}*/

			/* Full-width input fields */
			input[type=text], input[type=password]{
			    /*width: 100%;*/
			    padding: 12px 20px;
			    margin: 8px 0;
			    display: inline-block;
			    border: 1px solid #ccc;
			    box-sizing: border-box;
			}

			/* Set a style for all buttons */
			button {
			    background-color: #4CAF50;
			    color: white;
			    padding: 14px 20px;
			    margin: 8px 0;
			    border: none;
			    cursor: pointer;
			    /*width: 100%;*/
			}

			button:hover {
			    opacity: 0.8;
			}

			/* Extra styles for the cancel button */
			.cancelbtn {
			    width: auto;
			    padding: 10px 18px;
			    background-color: #f44336;
			}

			/* Center the image and position the close button */
			.imgcontainer {
			    text-align: center;
			    margin: 24px 0 12px 0;
			    position: relative;
			}

			img.avatar {
			    width: 40%;
			    border-radius: 50%;
			}

			.container {
			    padding: 16px;
			}

			span.psw {
			    float: right;
			    padding-top: 16px;
			}

			/* The Modal (background) */
			.modal {
			    display: none; /* Hidden by default */
			    position: fixed; /* Stay in place */
			    z-index: 1; /* Sit on top */
			    left: 0;
			    top: 0;
			    width: 100%; /* Full width */
			    height: 100%; /* Full height */
			    overflow: auto; /* Enable scroll if needed */
			    background-color: rgb(0,0,0); /* Fallback color */
			    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			    padding-top: 60px;
			}

			/* Modal Content/Box */
			.modal-content {
			    background-color: #fefefe;
			    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
			    border: 1px solid #888;
			    width: 80%; /* Could be more or less, depending on screen size */
			}

			/* The Close Button (x) */
			.close {
			    position: absolute;
			    right: 25px;
			    top: 0;
			    color: #000;
			    font-size: 35px;
			    font-weight: bold;
			}

			.close:hover,
			.close:focus {
			    color: red;
			    cursor: pointer;
			}

			/* Add Zoom Animation */
			.animate {
			    -webkit-animation: animatezoom 0.6s;
			    animation: animatezoom 0.6s
			}

			@-webkit-keyframes animatezoom {
			    from {-webkit-transform: scale(0)} 
			    to {-webkit-transform: scale(1)}
			}
			    
			@keyframes animatezoom {
			    from {transform: scale(0)} 
			    to {transform: scale(1)}
			}

			/* Change styles for span and cancel button on extra small screens */
			@media screen and (max-width: 300px) {
			    span.psw {
			       display: block;
			       float: none;
			    }
			    .cancelbtn {
			       width: 100%;
			    }
			}
		</style>
		
	</head>

	

	<!-- body background = "product_pics/prod209"-->
	<body>
		<script src = "allscripts.js"></script>
		<?php 
			//echo file_get_contents("scripts.html");
			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);
			error_reporting(E_ALL);
			echo file_get_contents("navigation_carrossel.html");
			echo "<br><br>";
			echo file_get_contents("cart.html");
            echo "<br><br>";
            echo file_get_contents("login.html");
            echo "<br><br>";
            echo file_get_contents("register.html");
            echo "<br><br>";
		?>





		<!--div class = "login">
	 		<div style="text-align:center">
	 			<form action = 'login.php' method = 'post'>
					E-mail: <input style='bgcolor:#78600B' type = 'text' name = 'email' id = 'email' onblur = 'check_email(this);'><br>
					Password: <input type = 'password' name = 'passw'><br>
					<input type = 'submit' id = 'inlogin' value = 'Login' onmouseenter = "check_email(this);">
					<a href = 'register.php'> Create account</a>
				</form><br>
				<span id = "login_message"></span>
	 		</div>
	 	</div>-->



	 	<!--<div style="display: inline-flex;">
			<img src = "logo-154x128.png" height = 100 width = 100>
		</div><br>-->

		<!--
		<button type = "button" id = "bnew_product" onclick = "window.location.replace('new_product.php');" style = "display:none;">Edit products</button><br>
		<button type = "button" id = "blogin" onclick = "login_open();">Login</button><br>
		<button type = "button" id = "blogout" onclick = "window.location.replace('logout.php');" style = "display:none;">Logout</button><br>
		<button type = "button" onclick = "print_cart();"> My Cart</button><br>
		<button type = "button" onmousedown = "empty_cart();">Empty cart</button><br>
		<button type = "button" onmousedown = "window.location.replace('check_out.php');">Check out</button><br>-->

		<section class="mbr-section mbr-section__container article" id="header3-3" data-rv-view="2" style="background-color: rgb(255, 255, 255); padding-top: 60px; padding-bottom: 20px;">
    		<div class="container">
			 	<?php
				 	ini_set('display_errors', 1);
					ini_set('display_startup_errors', 1);
					error_reporting(E_ALL);

					$root = substr($_SERVER["DOCUMENT_ROOT"],0,-4);
					require $root."access.php";

			 		$conn = mysqli_connect($servername, $username, $password, $dbname);
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					} 


					$cmd = "select * from products order by id desc;";
					$res = mysqli_query($conn,$cmd);

					$print = "<br><br><div class = \"prods\">";
					$product = file_get_contents("product_index.html");

					
					while ($row = $res->fetch_assoc())
						$print .= sprintf($product,$row['name'],$row['price'],$row['description'],$row['stock'],$row['id'],$row['id'],$row['id']);

					$print .= "</div>";
					echo $print;
					mysqli_close($conn);
			 	?>
			</div>
		</section><br><br><br><br>

	 	<?php
	 		echo file_get_contents("onde_estamos.html");
	 	?>


	 	<script src = "index.js"></script>
	 </body>
</html>