<?php include 'db/connect.php' ?>
  <?php //session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Travel Agent</title>

  <!-- font links -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital@1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital@0;1&display=swap" rel="stylesheet">

  <style>
  * {
    box-sizing: border-box;
  }

  body {
    font-family: 'Noto Serif', serif;
    background-color: #f7f7f7;
  }

  /* Float four columns side by side */
  .column {
    float: left;
    width: 20%;
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
    /*background-image: url(images/bg4.jpg);*/
    background-size: 100% 100%;
  }

  .card:hover{
    border: 1px solid #777;
  }

  /*Profile Images*/
  .imgP{
    display: block;
    width: 100%; 
    height: 250px;
    opacity: 1;
  }

  .imgP:hover{
    opacity: 1;
  }

  .ta-bg1{
    background-image: url(images/bg3.jpg);
    background-size: cover;
    padding: 50px;
    color: white;
  }

  h3{
    font-size: 18pt;
    color: blue;
  }

  p{
    font-size: 14pt;
    font-family: 'Noto Serif', serif !important;
    text-shadow: 1px 1px black;
    
  }
  </style>
</head>

<?php include 'navbar.php'; ?>
<body>
  <div class="ta-bg1">
    <h1>Travel Agent</h1>
    <p>Travel agency is one of the most important organizations in the tourism private sector which plays a significant and crucial role in the entire process of developing and promoting tourism in the country or at a destination. It is a travel agency which packages and processes all the attractions, accesses, amenities and ancillary services of a country and present them to tourists.</p>
  </div>

 
  <div class="row">

     <!-- Enter DB data -->
     <?php
      $sql = "SELECT * FROM travel_agent";
      $result = $link->query($sql);
      while($row = $result->fetch_assoc())
      {
        $name = $row["name"];
        $regno =  $row["regno"];
        $tel =  $row["tel"];
        $address =  $row["address"];
        $image = $row["image"];
      ?>
    <div class="column">
      <div class="card">
        <img src="db/<?php echo $image ?>" class="imgP" alt="t1">
        <h3><?php echo $name ?></h3>
        <p>Reg. No:<?php echo $regno ?></p>
        <p>Tel:<?php echo $tel ?></p>
        <p>City:<?php echo $address ?></p>
      </div>
    </div>
    <?php } ?> 
    <!-- End DB Entry -->

  </div>
  
</body>
</html>

