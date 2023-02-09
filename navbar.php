<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
		.navbar{
			overflow: hidden;
			background-color: #292b2c;
		}

		.navbar a{
			float: left;
			font-size: 16px;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		/*dropdown - 1*/
		.dropdown{
			float: left;
			overflow: hidden;
		}

		.dropdown .dropbtn {
		  font-size: 16px;  
		  border: none;
		  outline: none;
		  color: white;
		  padding: 14px 16px;
		  background-color: inherit;
		  font-family: inherit;
		  margin: 0;
		}

		.navbar a:hover, .dropdown:hover{
			background-color: green;
			transition-duration: 0.4s;
		}

		.dropdown-content {
		  display: none;
		  position: absolute;
		  background-color: #333;
		  max-width: 200px;
		  /*box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);*/
		  
		}

		.dropdown-content a {
		  float: none;
		  color: white;
		  padding: 12px 16px;
		  text-decoration: none;
		  display: block;
		  text-align: left;
		}

		.dropdown-content a:hover {
		  background-color: #010203;
		}

		.dropdown:hover .dropdown-content {
		  display: block;
		}
		/*dropdown - 1 end*/

		/*dropdown - 2*/
		.dropdown2{
			float: right !important;
			overflow: hidden;
			margin-right: 100px ;
		}

		.dropdown2 .dropbtn {
		  font-size: 16px;  
		  border: none;
		  outline: none;
		  color: white;
		  padding: 14px 16px;
		  background-color: inherit;
		  font-family: inherit;
		  margin: 0;
		}

		.dropdown2:hover{
			background-color: #0275d8 !important;
			transition-duration: 0.4s;
		}

		.dropdown2-content {
		  float: left;
		  display: none;
		  position: absolute;
		  background-color: #333;
		  min-width: 100px;
		  /*box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);*/
		  
		}

		.dropdown2-content a {
		  float: none;
		  color: white;
		  padding: 12px 16px;
		  text-decoration: none;
		  display: block;
		  text-align: left;
		}

		.dropdown2-content a:hover {
		  background-color: #0275d8;
		}

		.dropdown2:hover .dropdown2-content {
		  display: block;
		}
		/*dropdown - 2 end*/

		.logo{
			float: left; 
			width: 4%; 
			height: auto; 
			padding: 5px;
		}


	</style>
</head>
<body>
	<!-- navigation bar -->
	<div class="navbar">
		<img src="images/prof.png" alt="logo" class="logo">
		<a href="home.php">Home</a>
		<div class="dropdown">
			<button class="dropbtn">Plan Your Trip <i class="fa fa-caret-down"></i></button>
			<div class="dropdown-content">
				<a href="">Hotel & other Accommodation</a>
				<a href="">Where To Travel</a>
				<a href="">Tour Guide</a>
				<a href="">Tour Driver</a>
				<a href="travel_agent.php">Travel Agent</a>	
			</div>
		</div>
		<a href="">About Us</a>
		<a href="">Contact Us</a>

		<div class="dropdown2">
			<button class="dropbtn">Login<i class="fa fa-caret-down"></i></button>
			<div class="dropdown2-content">
			<!-- Check Login and Logout of Traveler -->
			<?php if (isset($_SESSION["t_id"])) {  ?>
				<!-- check login -->
				<?php if (isset($_SESSION["t_id"])) { ?>	
				<a href="?logout=1.php">Logout As a Traveler</a>
				<?php } else { ?>
				<a href="forms/login-t.php">As a Traveler</a>
			<?php } ?>
			<!-- Check Login and Logout of Traveler End-->
			
			<!-- Check Login and Logout of Travel Agent -->
			<?php } if (isset($_SESSION["ta_id"])) {  ?>
				<!-- check login -->
				<?php if (isset($_SESSION["ta_id"])) { ?>
					<a href="?logout=1.php">Logout As a Travel Agent</a>
				<?php } else if (isset($_SESSION["ta_id"])){ ?>
					<a href="forms/login-ta.php">Login As a Travel Agent</a>
			<?php } } ?>
			<!-- Check Login and Logout of Travel Agent end -->

				<a href="forms/login-tg.php">As a Tour Guide</a>
				<a href="forms/login-td.php">As a Tour Driver</a>
				<a href="forms/login-hm.php">As a Hotel Manager</a>
			</div>
		</div>

	</div>
	<!-- navigation bar -->
</body>

<!-- Logout -->
<?php
if(isset($_REQUEST["logout"]))
{
  session_destroy();
  echo "<script>alert('You are logged out!'); window.location.href='travel_agent.php.' ;</script>";
}
?>
</html>