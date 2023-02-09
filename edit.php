<!DOCTYPE >
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	
</head>
<body>

	<?php

		include 'db/connect.php';
		session_start();
		if(isset($_GET['status'])){
			echo '<h1>'.$_GET['status'].'</h1>';
		}

	
		if(isset($_SESSION['ta_id'])){
			$sql ="SELECT * From travel_agent WHERE ta_id=".$_SESSION['ta_id'];

			$result=mysqli_query($link,$sql);

			foreach ($result as $val) {

				if ($val['image']!=null){
					$img="<img src='db/travel_agent/".$val['image']."' width='45px'>";
				}
	?>

	<!-- new -->
	<form method="POST" action="db/edit.php" enctype="multipart/form-data">
			<input type="hidden" value="true" name="register_ta" id="register_ta"> <!-- change -->
			<input type="hidden" value="<?php echo $val['ta_id']; ?>" name="ta_id" id="ta_id"> <!-- change -->
			<div>
				<label>Name</label>
				<div>
					<input type="text" id="name" name="name" value="<?php echo $val['name']; ?>" required>
				</div>
			</div>
			
			<div>
				<label>Registered Number</label>
				<div>
					<input type="text" id="regno" name="regno" value="<?php echo $val['regno']; ?>" required>
				</div>
			</div>

			<div>
				<label>Contact Number</label>
				<div>
					<input type="text" id="tel" name="tel" value="<?php echo $val['tel']; ?>" required>
				</div>
			</div>

			<div>
				<label>Address</label>
				<div>
					<input type="textarea" id="address" name="address" value="<?php echo $val['address']; ?>" required>
				</div>
			</div>
			
			<div>
				<label>Email</label>
				<div>
					<input type="email" id="email" name="email" value="<?php echo $val['email']; ?>" required>
				</div>
			</div>

			<div>
				<label>Photo</label>
				<div>
					<?php echo $img; ?>
					<input type="file" id="image" name="image" accept="image/*" required>
				</div>
			</div>

			<div>
				<label>Password</label>
				<div>
					<input type="password" id="password" name="password" value="<?php echo $val['password']; ?>" required>
				</div>
			</div>
			
			<div>
				<center>
					<button type="submit" >
						Update
					</button>
				</center>
			</div>
		</form>

		<form method="POST" action="db/delete.php">
		<input type="hidden" value="true" name="delete" id="delete">
		<input type="hidden" value="<?php echo $val['ta_id']; ?>" name="ta_id" id="ta_id">
		<div>
			<button type="submit" >
				Delete
			</button>
		</div>
	</form>

	<?php }
	} ?>
</body>
</html>
<?php include 'db/config.php'; ?>