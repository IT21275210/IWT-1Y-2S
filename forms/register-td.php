<!DOCTYPE >
<html>
<head>
	<meta charset="UTF-8">
	<title>Register | Tour Driver</title>
	<link rel="stylesheet" type="text/css" href="../styles/forms_reg.css">
	
</head>
<body>

	<?php
	
		if(isset($_GET['status'])){
			echo '<h1>'.$_GET['status'].'</h1>';
		}
	
	?>
	<div class="div-r">
		<h2>Tour Driver Register</h2>
		<form method="POST" action="db/register.php" enctype="multipart/form-data">
			<input type="hidden" value="true" name="register_user" id="register_user">
			<div>
				<label>Name</label>
				<div>
					<input type="text" id="name" name="name" required>
				</div>
			</div>
			
			<div>
				<label>Age</label>
				<div>
					<input type="text" id="age" name="age" required>
				</div>
			</div>
			
			<div>
				<label>Vehicle Type</label>
				<div>
					<select id="type" name="type" required>
						<option value="">Select Type</option>
						<option value="Type 1">Normal</option>
						<option value="Type 1">Luxury</option>
						<option value="Type 1">Offroad</option>
					</select>
				</div>
			</div>

			<div>
				<label>Email</label>
				<div>
					<input type="email" id="email" name="email" required>
				</div>
			</div>
			
			
			<div>
				<label>Photo</label>
				<div>
					<input type="file" id="image" name="image" accept="image/*" required>
				</div>
			</div>

			<div>
				<label>Password</label>
				<div>
					<input type="password" id="password" name="password" required>
				</div>
			</div>
			
			<div>
				<center>
					<button type="submit" >
						Register
					</button>
				</center>
				<p>Already Registered? <a href="login.php">Login</a></p>
			</div>
		</form>
	</div>
</body>
</html>
<?php include 'db/config.php'; ?>