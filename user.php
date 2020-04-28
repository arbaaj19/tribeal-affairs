<?php
	include("header.php");	
?>
<html>
	<head>
		<title>User</title>
		<link rel="stylesheet" href="css.css"/>											<!--External CSS-->
		
		<meta name="viewport" content="width=device-width, initial-scale=1">			<!--Offline Bootstrap-->
		<link rel="stylesheet" href="css\bootstrap.min.css"/>
		<script src="js\jquery.min.js"></script>
		<script src="js\bootstrap.min.js"></script>
		<style>
			.btn{
				margin-left:auto;
				margin-right:auto;
				display:block;
				width:500px;
			}
			h1{
				text-align:center;
			}
		</style>
	</head>
	<body>
	<div class="container-fluid">
		<div class="row">
		<br><br><br><br><br><br><br><br><br><br><br><br><br>
			<div class="col-sm-1"></div>
			<div class="col-sm-10 data">
				<h1>User</h1>
				<br>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post" enctype="multipart/form-data">
					<br><br>
					<input type="button" class="btn btn-primary btn-lg" value="Upload Image" onclick="window.location.href='img_upload.php'" />
					<br><br>
					<input type="button" class="btn btn-primary btn-lg" value="Upload Text" onclick="window.location.href='text_upload.php'" />
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>
	</body>
</html>