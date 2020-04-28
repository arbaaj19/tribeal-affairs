<?php
	include("header.php");	
?>
<html>
	<head>
		<title>Video Approval</title>
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
			.approve:hover{
				background:green;
			}
			.decline:hover{
				background:red;
			}
			h1{
				text-align:center;
			}
		</style>
	</head>
	<body>
	<div class="container-fluid">
		<div class="row">
		<br><br><br><br><br><br><br><br><br><br><br>
			<div class="col-sm-1"></div>
			<div class="col-sm-10 data">
				<h1>Admin</h1>
				<br>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post" enctype="multipart/form-data">
					<br><br>
					<input type="button" class="approve btn-primary btn-lg" value="Approve" />
					<input type="button" class="decline btn-primary btn-lg" value="Decline" />
					<br><br>
					<input type="button" class="btn btn-primary btn-lg" value="Pending request for image approval" onclick="window.location.href='img_approv.php'" />
					<br><br>
					<input type="button" class="btn btn-primary btn-lg" value="Pending request for text approval" onclick="window.location.href='text_approv.php'" />
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>
	</body>
</html>