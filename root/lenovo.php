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
  <style>
body {
  font-family: 'open sans';
  overflow-x: hidden; }

img {
  max-width: 100%; }

.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }

.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }

.card {
  margin-top: 50px;
  }

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }






.checked, .price span {
  color: #ff9f1a; }


.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }


  </style>
<br><br>
  <body>
	
	<div class="container" style="background-color:white">
		<div class="card">
			
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="laptops/l 1.png" style="height:600px"/></div>
						  <div class="tab-pane" id="pic-2"><img src="laptops/l 2.png" style="height:600px" /></div>
						  <div class="tab-pane" id="pic-3"><img src="laptops/l 3.jpg" style="height:600px"/></div>
						  <div class="tab-pane" id="pic-4"><img src="laptops/l 4.jpg" style="height:600px"/></div>
						  <div class="tab-pane" id="pic-5"><img src="laptops/l 5.jpg" style="height:600px"/></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="laptops/l 1.png" style="height:150px"/></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="laptops/l 2.png" style="height:150px"/></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="laptops/l 3.jpg" style="height:150px"/></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="laptops/l 4.jpg" style="height:150px"/></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="laptops/l 5.jpg" style="height:150px"/></a></li>
						</ul>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title"><b>Lenovo Ideapad Yoga 710</b></h3>
						<!--div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							
						</div>-->
						
						<h4 class="price"><b>PRICE: <span>RS. 57,0000</b></span></h4>
						<p class="vote"><strong>99%</strong> of buyers enjoyed this product! <strong>(105 votes)</strong></p>
					
						<div class="specification">
						<ul type="solid"><b><h3>Features:</b></h3>
						<li>4 GB RAM | 32 GB ROM |</li>
						<li>5 inch Full HD Display</li>
						<li>12.3MP Rear Camera | 8MP Front Camera</li>
						<li>2770 mAh Battery</li>
						<li>Qualcomm Snapdragon 821 64-bit Processor</li></ol>
						<br>
						<div class="action">
							<button class="add-to-cart btn btn-default" type="button" ">ADD TO CART</button>
							<hr>
						</div>
					</div>
				</div>
			</div>
		</div>
	
  </body>
  
   <!--comment-->
  <style>
#contact textarea {
  width: 100%;
  border: 1px solid #ccc]]];

  margin: 0 0 5px;
  padding: 10px;
}
}</style>
  <br>
  <br>
 <!--contact form-->
	
	<div class="containers">  
  <form id="contact" action="lenovo.php">
    <textarea name="rphone" placeholder="Leave ur Comment Here.." tabindex="1" required></textarea>
    <button name="submit" class="btn-success btn-lg" type="submit"  id="contact-submit" >Comment</button>
  </form>
</div>

	<!--end of contact form-->
  <body>
<?php
  include "databaseConnect.php";
 $getreview=$_GET["rphone"];
  
//echo $getreview; 
	$sql ="INSERT INTO review3(Sno,Review) VALUES(NULL,'$getreview')";
	$result = $mysqli ->query($sql);
	echo "<table  class=table table-striped>";
		echo "<b><h2>Comments :</h2></b>";
		echo "<br>";
		$sql= "SELECT * FROM review3";
	$result = $mysqli ->query($sql);
					
					if ($result->num_rows > 0)
						{
							// output data of each row
							echo "<ol type=circle>";
							while($row = $result->fetch_assoc()) 
							{	
											echo "<h3><li>";
												echo $row["Review"];
												echo "</li></h3>";
												echo "<hr>";
								}
						}
				else {
						echo "0 results";
					}
					echo "</table>";

						
	$mysqli ->close();	
 ?>
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

