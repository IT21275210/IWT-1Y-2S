<?php include 'db/connect.php' ?>
<? //session_start(); ?>

<!-- Get DB Data -->
<?php
	$sql="SELECT * FROM travel_agent ";
	$result=$link->query($sql);
	while ($row=$result->fetch_assoc()) 
	{
		$name = $row["name"]; 
        $regno =  $row["regno"];
        $tel =  $row["tel"];
        $address =  $row["address"];
		$email =  $row["email"];
        $image = $row["image"];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style>
		/*Profile Images*/
		.imgP{
		  display: inline-block;
		  width: 10%; 
		  height: auto;
		  opacity: 1;
		}

		.div1{
			background-image: url(images/bg5.jpg); 
			background-size: 100% 100%; 
			padding: 50px;
		}

		.btn{
			float: right;
			padding: 10px;
			background-color: #f0ad4e;
			border-radius: 16px;
		}

		.btn a{
			text-decoration: none;
			color: black;
		}

		.btn:hover{
			background-color: #CFD8DC;
			border: 1px solid #777;
			transition-duration: 0.2s;
		}

		hr{
			border: 2px solid grey;
		}

		* {
			box-sizing: border-box;
		}

		/* Float four columns side by side */
		.column {
		  float: left;
		  width: 25%;
		  padding: 0 10px;
		}

		/* Remove extra left and right margins, due to padding */
		.row {margin: 0 0;}

		/* Clear floats after the columns */
		.row:after {
		  content: "";
		  display: table;
		  clear: both;
		}

		/* Style the counter cards */
		.card {
		  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);
		  margin: 15px 0 15px 5px;
		  padding: 16px;
		  text-align: center;
		  border-radius: 5px;
		  background-color: #f1f1f1f1;
		  /*background-image: url(bg4.jpg);*/
		  background-size: 100% 100%;
		}

		.card:hover{
		  border: 1px solid #777;
		}

	</style>
</head>

<?php include 'navbar.php'; ?>

<body>
	<div class="div1">
		<span><img src="db/<?php echo $image ?>" class="imgP" alt="profpic"></span>
		<h2>
			Name: <?php echo $name; ?> <br>
			Contact No:  <?php echo $tel; ?> <br>
			Email:  <?php echo $email; ?> <br>
			Address:  <?php echo $address; ?> <br>
		</h2>
		<button class="btn"><a href="">Add Tour Package</a></button>

		<!-- update profile -->
		<button class="btn"><a href="edit.php">Update Profile</a></button>

		<!-- delete profile -->
		<form method="POST" action="db/delete.php">
			<input type="hidden" value="true" name="delete" id="delete">
			<input type="hidden" value="<?php echo $row['ta_id']; ?>" name="ta_id" id="ta_id">
			<button class="btn"><a href="">Delete Profile</a></button>
		</form>
	</div>

	<!-- horizontal line -->
	<hr>

	<!-- tour Packages -->
	<div class="row">
	  <div class="column">
	    <div class="card">
	    	<img src="images/prof.png" class="imgP" alt="t1">
	      <h3>Card 1</h3>
	      <p>Some text</p>
	      <p>Some text</p>
	    </div>
	  </div>

	<div class="row">
	  <div class="column">
	    <div class="card">
	    	<img src="images/prof.png" class="imgP" alt="t1">
	      <h3>Card 2</h3>
	      <p>Some text</p>
	      <p>Some text</p>
	    </div>
	  </div>
	  
	  <div class="column">
	    <div class="card">
	    	<img src="images/prof.png" class="imgP" alt="t1">
	      <h3>Card 3</h3>
	      <p>Some text</p>
	      <p>Some text</p>
	    </div>
	  </div>
	  
	  <div class="column">
	    <div class="card">
	    	<img src="images/prof.png" class="imgP" alt="t1">
	      <h3>Card 4</h3>
	      <p>Some text</p>
	      <p>Some text</p>
    	</div>
  	  </div>  


</body>
</html>
<?php include 'db/config.php'; ?>