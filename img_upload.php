<?php
	include("header.php");	
?>
<html>
	<head>
		<title>User Image Upload</title>
		<link rel="stylesheet" href="css.css"/>											<!--External CSS-->
		
		<meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1">			<!--Offline Bootstrap-->
		<link rel="stylesheet" href="css\bootstrap.min.css"/>
		<script src="js\jquery.min.js"></script>
		<script src="js\bootstrap.min.js"></script>
		<script type='text/javascript'>
			function preview_image(event) 
			{
				var reader = new FileReader();
				reader.onload = function()
				{
					var output = document.getElementById('output_image');
					output.src = reader.result;
				}
				reader.readAsDataURL(event.target.files[0]);
			}
		</script>
		<style>
			#output_image
			{
			 max-width:300px;
			}
			.btn{
				margin-left:auto;
				margin-right:auto;
				display:block;
				width:500px;
			}
		</style>
	</head>
	<body>
	<div class="container-fluid">
		
		<div class="row">
		<br><br><br><br><br><br><br><br><br><br><br><br><br>
			<div class="col-sm-1"></div>
			<div class="col-sm-10 data">
			
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
					<input type="text" name="n1" placeholder="Name" class='form-control' required/>
					<br>
					<br>
					<input type="file" accept="image/*" name="myimage"  onchange="preview_image(event)" class="form-control" required/>
					<br>
					<br>
					<input type="text" name="d1" placeholder="Description" class='form-control' required/>
					<br>
					<img id="output_image"/>
					<input type="submit" value="Upload Image" name="submit" class="btn-primary btn-lg" />
					
					<br><br>
					<input type="button" class="btn btn-primary btn-lg" value="User Home Page" onclick="window.location.href='user.php'" />
					<br><br>
					
				</form>
				
				
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>
	</body>
</html>			


<?php
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		if(isset($_REQUEST['submit']))
		{
			include 'config.php';
			$Name=$_REQUEST['n1'];
			$Image=$_FILES['myimage']['tmp_name'];
			$Description=$_REQUEST['d1'];
			
			$sql="INSERT INTO `image_table`(`image`, `name`, `desc`, `status`) VALUES ('$Image','$Name','$Description','0')";
			
			if(mysqli_query($conn,$sql))
			{
				if(move_uploaded_file($_FILES['myimage']['tmp_name'],"upload_image/$Name.jpg"))
				{				
					echo '<script type="text/javascript">alert("Image Uploded")</script>';
				}
			}
			else
			{
				echo "Error:".$sql."<br>".mysqli_error($conn);
			}
			mysqli_close($conn);
		}
	}
?>