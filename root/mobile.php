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

    <!--End Fixed Top Navbar-->
	<br>
	<br><br>
	
	<!--menu bar-->
<div class="container">
	  <header class="page-header">
          <ul class="nav nav-pills  pull-center">
            <li class="active"><a href="mobile.php">MOBILES</a></li>
            <li><a href="laptop.php">LAPTOPS</a></li>
			<li ><a href="gaming.php">GAMING CONSOLE</a></li>
            <li><a href="dslr.php">DSLR</a></li>
          </ul>
      </header>
</div> 
	  <!--end of menu bar-->

    <!--End Fixed Top Navbar-->
	
	<?php
			include"databaseConnect.php";
			 
	?>
    <form action="/searchData.php" method="post">
       <ol type="1" style="margin-top:30px">
    <h2>
	<li>
					<div class="row">
					<div class="col-sm-4 fbox">
								<img src="mobiles/iphone1.png"  alt="iphone" style="max-width:100%;"> 
					</div>
					<div class="col-sm-4 fbox">
								<a href="iphone.php"><p><h3>Iphone 7 </h3></p>
								</a>
					</div>


					<div class="col-sm-4 fbox">
								<input type="checkbox" value="iphone7" name="phone[]" id="color"> 
					</div>
					</div>
	</li>
	<hr>
							
	<li>
					<div class="row">
					<div class="col-sm-4 fbox">
								<img src="mobiles/s73.png"  alt="samsungs7" style="max-width:100%;"> 
					</div>
					<div class="col-sm-4 fbox">
								<a href="samsungs7.php"><p><h3>Samsung S7</h3></p>
								 </a>
					</div>
					<div class="col-sm-4 fbox">
								<input type="checkbox" value="s7" name="phone[]" id="color"> 
					</div>
					</div>
	</li>
	 <hr>   
						
	<li>
					<div class="row">
					<div class="col-sm-4 fbox">
								<img src="mobiles/oneplus 1.png"  alt="OnePlus 3T" style="max-width:100%;"> 
					</div>
					<div class="col-sm-4 fbox">
								<a href="oneplus3t.php"><p><h3>Oneplus 3T</h3></p>
								 </a>
					</div>
					<div class="col-sm-4 fbox">
								<input type="checkbox" value="oneplus" name="phone[]" id="color"> 
					</div>
					</div>				
	</li>
	<hr>
																		
	<li> 
					<div class="row">
					<div class="col-sm-4 fbox">
								<img src="mobiles/google1.png"  alt="google pixel" style="max-width:100%;"> 
					</div>
					<div class="col-sm-4 fbox">
								<a href="pixel.php"><p><h3>Google Pixel</h3></p>
								 </a>
					</div>
					<div class="col-sm-4 fbox">
								<input type="checkbox" value="pixel" name="phone[]" id="color"> 
					</div>
					</div>
	</li>
	<hr>
	
	<li> 
					<div class="row">
					<div class="col-sm-4 fbox">
								<img src="mobiles/lgg61.png"  alt="LG G6" style="max-width:100%;"> 
					</div>
					<div class="col-sm-4 fbox">
								<a href="lgg6.php"><p><h3>Lg G6</h3></p>
								 </a>
					</div>
					<div class="col-sm-4 fbox">
								<input type="checkbox" value="g6" name="phone[]" id="color"> 
					</div>
					</div>
	</li>
	<hr>
							
	<li>
					<div class="row">
					<div class="col-sm-4 fbox">
								<img src="mobiles/x 1.jpg"  alt="XIOMI MI 5" style="max-width:100%;"> 
					</div>
					<div class="col-sm-4 fbox">
								<a href="xiomi.php"><p><h3>Xiaomi Mi 5</h3></p>
								 </a>
					</div>
					<div class="col-sm-4 fbox">
								<input type="checkbox" value="xiaomi" name="phone[]" id="color"> 
					</div>
					</div>
	</li>
	<hr>   
							
	<li>			
					<div class="row">
					<div class="col-sm-4 fbox">
								<img src="mobiles/mot 1.jpg"  alt="motorola moto z" style="max-width:100%;"> 
					</div>
					<div class="col-sm-4 fbox">
								<a href="motorola.php"><p><h3>Motorola Moto Z</h3></p>
								 </a>
					</div>
					<div class="col-sm-4 fbox">
								<input type="checkbox" value="Moto" name="phone[]" id="color"> 
					</div></div>
	</li>
	<hr>
	</h2>
</ol>
        
<center> <input type="submit" value="COMPARE" class="btn btn-success btn-lg"> </center>
</form>
</body>

 <!--footer content-->
      <hr>
      <footer class="footer">
        <p>&copy:2017 COMPARISON WEBSITE:</p>
      </footer>

    </div> 


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>