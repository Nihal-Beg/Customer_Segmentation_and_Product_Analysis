

<div class="col-md-12">
     
	 <h1>Admin Data</h1><br>

<html>
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
	<title>Show Registration Details</title>
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

	
</head>
<body>
	
	<?php
	
		$con=mysqli_connect("localhost","root","","dbgift");
		$sql="SELECT * FROM `tblbuyer`";
		$result=mysqli_query($con,$sql);
		echo "<table class=\"table table-striped \"><tr><th>ID</th><th>FIRSTNAME</th><th>LASTNAME</th><th>MOBILE.NO</th><th>EMAIL</th><th>CITY</th><th>PINCODE</th><th>ADDRESS</th><th>BIRTH</th><th>GENDER</th><th>DESCRIPTION</th><th><STATUS></th><th>CDATE</th></tr>";
		
		while($line=mysqli_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>";
				echo $line['id'];
				echo "</td>";
				echo "<td>";
				echo $line['firstname'];
				echo "</td>";
				echo "<td>";
				echo $line['lastname'];
				echo "</td>";
				echo "<td>";
				echo $line['mobileno'];
				echo "</td>";
				echo "<td>";
				echo $line['email'];
				echo "</td>";
				echo "<td>";
				echo $line['city'];
				echo "</td>";
				echo "<td>";
				echo $line['pincode'];
				echo "</td>";
				echo "<td>";
				echo $line['address'];
				echo "</td>";
				echo "<td>";
				echo $line['birth'];
				echo "</td>";
				echo "<td>";
				echo $line['gender'];
				echo "</td>";
				echo "<td>";
				echo $line['description'];
				echo "</td>";
				echo "<td>";
				echo $line['status'];
				echo "</td>";
				echo "<td>";
				echo $line['cdate'];
				echo "</td>";
				echo "</tr>";
			}

				echo "</table>";
		
		?>
	
	
</body>
</html>
</div>

