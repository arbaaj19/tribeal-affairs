<?php
	include("header.php");	
?>
<html>
	<head>
		<title>Text Approval</title>
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
		<br><br><br><br><br><br><br><br><br><br><br><br><br>
			<div class="col-sm-1"></div>
			<div class="col-sm-10 data">
				<h1>Admin</h1>
				<br>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post" enctype="multipart/form-data">
					
					
					<?php
							include 'config.php';
							$sql="SELECT * FROM `text_table` WHERE status='0'";
							
							$result = $conn->query($sql);
							
							if ($result->num_rows > 0) 
							{
								while($row = $result->fetch_assoc()) 
								{
									echo "<div class='row'><hr>";
									echo "<div class='col-sm-2'>";
									echo "</div>";
									echo "<div class='col-sm-4'>";
									echo "<p>$row[text]</p>";
									echo "<p>$row[desc]</p>";
									$desc='';
									$desc='$row[desc]';
									echo "</div>";
						?>
									<div class="col-sm-2">
										<br>
										<input type="submit" name="approve" class="approve btn-primary btn-lg" value="Approve Image" style="clear:both;" />
										<br>
									</div>
									<div class="col-sm-2">
										<br>
										<input type="submit" style="clear:both;" name="decline" class="decline btn-primary btn-lg" value="Decline Image"/>
									</div>
						<?php
									
									echo "<div class='col-sm-2'>";
									echo "</div>";
									echo "</div>";
								}
							}
						?>
						<br><br>
						<input type="button" class="btn btn-primary btn-lg" value="Pending request for image approval" onclick="window.location.href='img_approv.php'" />
						<br><br>
					
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>
	</body>
</html>