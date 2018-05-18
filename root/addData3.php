<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>

<body>
<?php
 include "databaseConnect.php";
 $getreview=$_GET["rphone"];
  
//echo $getreview; 
	$sql ="INSERT INTO review3(Sno,Review) VALUES(NULL,'$getreview')";
	$result = $mysqli ->query($sql);

	echo "<table border=2  class=table table-striped>";
		echo "<tr><th>"."Sno"."</th><th>"."Review"."</th></tr>";
	
		$sql= "SELECT * FROM review3";
	$result = $mysqli ->query($sql);
					
					if ($result->num_rows > 0)
						{
							// output data of each row
							while($row = $result->fetch_assoc()) 
							{
												echo "<tr><td>".$row["Sno"]."</td><td>".$row["Review"]."</td></tr>";
								}
						}
				else {
						echo "0 results";
					}
					echo "</table>";

						
	$mysqli ->close();	
 ?>
 </body>
 </html>