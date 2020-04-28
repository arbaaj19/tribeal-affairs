
<?php
	include("header.php");
	
?>
<html>
	<head>
		<title>Page 1</title>
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
			<div class="col-sm-10 data">
				<h2>Forgot Password</h2>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">

				<div class="form-group">
				<input type="email" name="e1" placeholder="Email" class="form-control" required/>
				</div>

				<input type="submit" class="btn btn-primary btn-block btn-lg" />
				</form>
				<a href="loginpage.php">Login Page</a>
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>
	</body>
</html>



<?php	
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$email="";
		$email=test_input($_POST["e1"]);
		if(!empty($email))
		{
			include("config.php");
			$sql = "SELECT * FROM `employee` WHERE empemail='$email'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) 
			{															// output data of each row
				while($row = $result->fetch_assoc()) 
				{   
					echo"<script>location.href='employeeupdatepsw.php?id=$row[empid]'</script>";
					exit;
				}
			}
			else 
			{
				echo '<script type="text/javascript">alert("Email doest Exist ")</script>';
			}
			$conn->close();
		}
	}

function test_input($data) 
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>