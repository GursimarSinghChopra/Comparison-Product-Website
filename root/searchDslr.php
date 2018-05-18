<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="shortcut icon" href="../../assets/ico/favicon.ico">
	
    <title>COMPARISON</title>

    <!-- Bootstrap core CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.theme.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

   
  </head>

  <body>
	

    <!--Fixed Top Navbar-->
<div class="navbar  navbar-inverse navbar-fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">COMPARISON</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
            </button>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">HOME</a></li>
            <!--<li><a href="about.php">ABOUT US</a></li>-->
			<li><a href="gallery.php">GALLERY</a></li>
              <li><a href="contact.php">CONTACT US</a></li>
            <!--<li><a href="signup.php">SIGN UP</a></li>
            <li><a href="login.php">LOGIN</a></li>-->
          </ul>
		  
        </div>
			<!--<div class="container">
				<div class="row">
      
						<div class="col-sm-3 "></div>
					<div class="col-sm-6 ">
					<div class="input-group">
						<input type="text" placeholder="Search.." maxlength="20" class="form-control">
							<div class="input-group-btn">
								<button class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
								<button class="btn"><i class="glyphicon glyphicon-shopping-cart"></i></button>
								<i class="glyphicon glyphicon-shopping-cart"></i>
							</div>
					</div>
					</div>
						<div class="col-sm-3 "></div>
				</div>
			</div>-->
		</div>
<br><br>
</div>
</body>


<body background="background/bg7.jpg">
<br><br>
<br><br>
<br>
<div class="container">



<?php
	
	include"databaseConnect.php";
	// Counting number of checked phones.
	$checked_count = count($_POST['dslr']);
	//echo "You have selected ".$checked_count." Phones: <br/>";
	// Loop to store and display values of individual checked checkbox.
	echo "<table border=2 class=table table-striped >";
	echo "<caption><center><h3>Show configuration</h3></center></caption>";
	echo "<tr><th>"."Sno"."</th><th>"."NAME"."</th><th>"."Body"."</th><th>"."MaxResolution"."</th><th>"."Effective Pixel"."</th><th>"."Shutter Speed"."</th><th>"."Battery"."</th><th>"."Weight"."</th><th>"."Focus Point"."</th><th>"."Screen"."</th><th>"."Sensor Size"."</th><th>"."Price"."</th></tr>";
	foreach($_POST['dslr'] as $selected) 
{
	//echo "<p>".$selected ."</p>";
	// search the database
					$sql = "SELECT * FROM dslr WHERE NAME LIKE '%" . $selected. "%'";
					$result = $mysqli ->query($sql);
						if ($result->num_rows > 0) {
						// output data of each row
						echo "<br>";
	}
	
	while($row = $result->fetch_assoc()) {
		
			echo "<tr><td>".$row["Sno"]."</td><td>". $row["Name"]."</td><td>".$row["Body"]."</td><td>". $row["MaxResolution"]."</td><td>".$row["effectivepixel"]."</td><td>".$row["ShutterSpeed"]."</td><td>".$row["battery"]."</td><td>".$row["weight"]."</td><td>". $row["focuspoint"] ."</td><td>". $row["screen"]."</td><td>". $row["sensorsize"]."</td><td>".$row["price"]."</td></tr>";
						}
					
					//$mysqli ->close();

}
echo "</table>";
?>

</div>
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
</body>
</html>