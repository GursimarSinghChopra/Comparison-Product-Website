<html>
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
            <li ><a href="index.php">HOME</a></li>
            <!--<li><a href="about.php">ABOUT US</a></li>-->
			<li><a href="gallery.php">GALLERY</a></li>
              <li class="active"><a href="contact.php">CONTACT US</a></li>
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
<br>
</div>
</body> 

    <!--End Fixed Top Navbar-->


<body background="background/bg4.jpg">
<?php
 include "databaseConnect.php";
 $getname=$_GET["name"];
   $getphoneno=$_GET["phoneno"];
   $getemail=$_GET["email"];
   $getcomment=$_GET["comment"];
//echo $getreview; 
	$sql ="INSERT INTO contact(Sno,name,phoneno,email,comment) VALUES(NULL,'$getname',$getphoneno,'$getemail','$getcomment')";
	$result = $mysqli ->query($sql);

	/*echo "<br><br><br>";
	
	echo "<table border=2  class=table table-striped>";
		echo "<tr><th>"."Sno"."</th><th>"."Name"."</th><th>"."Phone No"."</th><th>"."Email"."</th><th>"."Comment"."</th></tr>";
	
		$sql= "SELECT * FROM contact";
	$result = $mysqli ->query($sql);
					
					if ($result->num_rows > 0)
						{
							// output data of each row
							while($row = $result->fetch_assoc()) 
							{
												echo "<tr><td>".$row["Sno"]."</td><td>".$row["name"]."</td><td>".$row["phoneno"]."</td><td>".$row["email"]."</td><td>".$row["comment"]."</td></tr>";
								}
						}
				else {
						echo "0 results";
					}
					echo "</table>";
*/
					
	$mysqli ->close();	
 ?>
  <div class="containers">
  <table border="2px" align="center" style="margin-top:300px;background-color:#FFF"><tr>
  <th>
 <h1 style="margin-top:200px;margin-bottom:200px;margin-left:200px;margin-right:200px" >Thank You For Your Feedback</h1></th></tr></table>
 </body>
 </html>