
<?php
	include("header.php");
	
?>
<html>
	<head>
		<title>Gallery</title>
		<link rel="stylesheet" href="css.css"/>											<!--External CSS-->
		
		<meta name="viewport" content="width=device-width, initial-scale=1">			<!--Offline Bootstrap-->
		<link rel="stylesheet" href="css\bootstrap.min.css"/>
		<script src="js\jquery.min.js"></script>
		<script src="js\bootstrap.min.js"></script>
	</head>
	<body>
	<div class="container-fluid">
		<div class="row">
		<br><br><br><br><br><br><br><br><br><br><br><br><br>
			<div class="col-sm-1"></div>
			<div class="col-sm-10 gallery data">
				<a target="_blank" href="image\images (1).jpg">		<img src="image\images (1).jpg">	</a>
				<a target="_blank" href="image\images (2).jpg">		<img src="image\images (2).jpg">	</a>
				<a target="_blank" href="image\images (3).jpg">		<img src="image\images (3).jpg">	</a>
				<a target="_blank" href="image\images (4).jpg">		<img src="image\images (4).jpg">	</a>
				<a target="_blank" href="image\images (5).jpg">		<img src="image\images (5).jpg">	</a>
				<a target="_blank" href="image\images (6).jpg">		<img src="image\images (6).jpg">	</a>
				<a target="_blank" href="image\images (7).jpg">		<img src="image\images (7).jpg">	</a>
				<a target="_blank" href="image\images (8).jpg">		<img src="image\images (8).jpg">	</a>
				<a target="_blank" href="image\images (9).jpg">		<img src="image\images (9).jpg">	</a>
				<a target="_blank" href="image\images (10).jpg">		<img src="image\images (10).jpg">	</a>
				<a target="_blank" href="image\images (11).jpg">		<img src="image\images (11).jpg">	</a>
				<a target="_blank" href="image\images (12).jpg">		<img src="image\images (12).jpg">	</a>
				<a target="_blank" href="image\images (13).jpg">		<img src="image\images (13).jpg">	</a>
				<a target="_blank" href="image\images (14).jpg">		<img src="image\images (14).jpg">	</a>
				<a target="_blank" href="image\images (15).jpg">		<img src="image\images (15).jpg">	</a>
				<a target="_blank" href="image\images (16).jpg">		<img src="image\images (16).jpg">	</a>
				<a target="_blank" href="image\images (17).jpg">		<img src="image\images (17).jpg">	</a>
				<a target="_blank" href="image\images (5).jpg">		<img src="image\images (5).jpg">	</a>
				
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post" enctype="multipart/form-data">
				<br><br>
				<?php
					$result=$sql='';
					include 'config.php';
					$sql="SELECT * FROM `image_table` WHERE status='1'";
						
					$result = $conn->query($sql);

					if ($result->num_rows > 0)
					{
						while($row = $result->fetch_assoc()) 
						{
							echo "<img src='upload_image/$row[name].jpg' style='height:310px;width:300px;margin:25px;border:dotted;height:250px;clear:both;'>";
							//echo "<p>$row[desc]</p>";
						}
					}
				?>
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>
	</body>
</html>

