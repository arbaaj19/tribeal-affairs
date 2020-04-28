<html>
	<head>
		<link rel="stylesheet" href="css\css1.css"/>											<!--External CSS-->
		
		<meta name="viewport" content="width=device-width, initial-scale=1">			<!--Offline Bootstrap-->
		<link rel="stylesheet" href="css\bootstrap.min.css"/>
		<script src="js\jquery.min.js"></script>
		<script src="js\bootstrap.min.js"></script>
	</head>
	<body>
	<div class="navbar navbar-fixed-top" role="navigation">
		<div class="row">																<!--Header-->
			<div class="col-sm-2">
				<a href="Page1.php"><img alt="Home" src="image\images.jpg" class="logo"/></a>
			</div>
			<div class="title col-sm-7">
				<h1 class="title ">Tribes in Maharashtra</h1>
			</div>
			<div class="login fix col-sm-3">
				<a href="loginpage.php">Login<br></a>
				<a href="signup.php">Connect with us</a>
				<form method="get" action="http://www.google.com/search">
				<input type="text" placeholder="Search"name="q" size="31" maxlength="255" value="" />
				<input type="submit" value="Search" />
				</form>
				
			</div>
		</div>
		<div class="row">																<!--Menu-->
			<h3>
			<div class="col-sm-2 fix menu"><a href="Gallery.php">Gallery</a></div>
			<div class="col-sm-2 fix menu"><a href="History.php">History</a></div>
			<div class="col-sm-2 fix menu"><a href="List.php">List of Tribes</a></div>
			<div class="col-sm-2 fix menu"><a href="Festivals.php">Cultural Festivals</a></div>
			<div class="col-sm-2 fix menu"><a href="Locationwise.php">Locationwise Tribes</a></div>
			<div class="col-sm-2 fix menu"><a href="Contact.php">Contact Us</a></div>
			</h3>
		</div>
	</div>
	</body>
</html>