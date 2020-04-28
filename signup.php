<?php
	include("header.php");
?>

<html>
	<head>
		<title>SignUp</title>
		<link rel="stylesheet" href="css.css"/>											<!--External CSS-->
		
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">			<!--Offline Bootstrap-->
		<link rel="stylesheet" href="css\bootstrap.min.css"/>
		<script src="js\jquery.min.js"></script>
		<script src="js\bootstrap.min.js"></script>
		<link href="./css/style.css" rel="stylesheet">
		<script type='text/javascript'>
			function refreshCaptcha()
			{
				var img = document.images['captchaimg'];
				img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
			}
		</script>
	</head>
	<body>
	<div class="container-fluid">
		<div class="row">
		<br><br><br><br><br><br><br><br><br><br><br><br><br>
			<div class="col-sm-1"></div>
			<div class="col-sm-10 data">
				<h2>SignUp<br></h2>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">
					<div class="form-group">
						<input type="text" name="name" placeholder="Name" class="form-control" required />
					</div>
					<div class="form-group">
						<input type="email" name="email" placeholder="Email" class="form-control" required />
					</div>
					<div class="form-group">
						<input type="password" name="pass" placeholder="Password" class="form-control" required />
					</div>
					<div class="form-group">
						<input type="radio" name="gender" value="Male"/><img width="50px" height="50px" src="image\male.jpg" />
						<input type="radio" name="gender" value="Female"/> <img width="50px" height="50px" src="image\female.png" /><br>
					</div>
					<div class="form-group">
						<input type="number" name="mobno" placeholder="Mobile no" class="form-control" required /><br>
					</div>
					<div>
						<table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="table">
							<?php if(isset($msg)){?>
							<tr>
								<td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
							</tr>
							<?php } ?>
							<tr>
								<td align="right" valign="top"> Validation code:</td>
								<td><img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'><br>
									<label for='message'>Enter the code above here :</label>
									<br>
									<input id="captcha_code" name="captcha_code" type="text">
									<br>
									Can't read the image? Click <a href='javascript: refreshCaptcha();'>here</a> to refresh.
								</td>
							</tr>
						</table>
					</div>
						<br><input name="Submit" onclick="return validate();" value="Submit" type="submit" class="btn btn-primary btn-lg" />
					</div>
				</form>	
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>
	</body>
</html>

<?php
	include("phpsignup.php");
?>
