<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <style>
  .main
  {margin-left:250px;
  float:left; 
  padding-right:25px;}
  
  @media screen and (max-width:580px) {
    .main{
	margin-left:1px;
  float:left; 
  padding-right:1px;
 
 	}
	

	}
	</style>
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">	

	 		<div class="navbar-header">	
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div id="logo col-sm-4 col-xs-12 pull-right">
						<div class="main">
						<a href="index.php"> <img src="img/logo.png" class="img-responsive" alt="SKNSCOE"/></a> </div>
				
				</div><!-- end of #logo -->
				</div>
			<div class="collapse navbar-collapse" style="margin-left:150px;">
				<ul class="nav navbar-nav navbar-left">
					<li class="active"><a title="Home" href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
					<li class=""><a title="About" href="about.php">About</a></li>
					
					<li class="dropdown"><a title="Departments" href="#" data-toggle="dropdown" class="dropdown-toggle" name="dept">Departments <span class="caret"></span></a>
					<ul role="menu" class=" dropdown-menu">
						<li><a title="MECHANICAL ENGINEERING" href="mec.php">MECHANICAL ENGINEERING</a></li>
						<li><a title="CIVIL ENGINEERING" href="civil.php">CIVIL ENGINEERING</a></li>
						<li><a title="ELECTRICAL ENGINEERING" href="elect.php">ELECTRICAL ENGINEERING</a></li>
						<li><a title="ELECTRONICS AND TELECOMMUNICATION ENGINEERING" href="entc.php">ELECTRONICS AND TELECOMMUNICATION ENGINEERING</a></li>
						<li><a title="INFORMATION TECHNOLOGY ENGINEERING" href="cse.php">COMPUTER SCIENCE AND ENGINEERING</a></li>
						<li><a title="FIRST YEAR ENGINEERING" href="fe.php">FIRST YEAR ENGINEERING</a></li>
						
					</ul>
					</li>
					<li><a title="RESEARCH &amp; DEVELOPMENT" href="staff.php">Staff</a></li>	
					
					<li><a title="Placements" href="libbooks.php">Library Collection</a></li>
					<li><a title="Gallery" href="services.php">Services</a></li>
					<li><a title="Gallery" href="rules.php">Rules and Regulations</a></li>
					
					<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      
<li><a href="login2.php"><span class="glyphicon glyphicon-log-in"></span>  Admin Login</a></li>
<li><a href="index_demo.php"><span class="glyphicon glyphicon-log-in"></span> Back</a></li>	
<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Next</a></li>	
	  </ul>
	</div>
</div>

<br/><br/> <br/><br/><br/> <br/>
<br/> <br/><br/>


<div class="container">
<div class="alert alert-success">

    <strong>Welcome </strong>
	<?php if(isset($_SESSION["uname"])){
		echo $_SESSION["uname"];}
		else{
			echo '<script type="text/javascript">alert("Login First")</script>';
			 echo"<script>location.href='login2.php'</script>";
			} ?>
			
			<div class="pull-right">
            <a href="http://localhost/mywebsite/logout.php" class="btn btn-primary btn-flat">Logout</a>
          </div>
        
   </div>
   <form action="logout.php" onsubmit="return confirm('Do You want to logout?');">
    <div id="no-more-tables">
	<table class="table col-lg-4 table-striped table-condensed cf" cellspacing="100px">
	<thead class="cf">

 <tr>
			<td width="250"> <h5>Add student<h5> <a href="http://localhost/mywebsite/add_stud.php"> <img src="img/addstud.png" class="img-resposive" alt="addstudent" width="180" height="180"/> </a> </td>

			<td width="250"> <h5>Delete student<h5> <a href="delete_stud.php"> <img src="img/deletestud.png" class="img-resposive" alt="deletestudent" width="180" height="180"/> </a> </td>
  
			<td width="250"> <h5>Update student<h5> <a href="http://localhost/mywebsite/admin/update_stud.php"> <img src="img/male.jpg" class="img-resposive" alt="addstudent" width="180" height="180"/> </a> </td>
	
			<td width="250"> <h5>Search student<h5> <a href="http://localhost/mywebsite/admin/search_stud.php"> <img src="img/addstud.png" class="img-resposive" alt="addstudent" width="180" height="180"/> </a> </td>
	
</tr>
<tr>
			<td width="250"> <h5>Add Book </h5> <a href="http://localhost/mywebsite/admin/add_book.php"> <img src="img/book2.jpg" class="img-resposive" alt="addbook" width="180" height="167"/> </a> </td>

			<td width="250"> <h5>Delete Book</h5> <a href="http://localhost/mywebsite/admin/delete_book.php"> <br/> <img src="img/deletebook.jpg" class="img-resposive" alt="deletestudent" width="180" height="167"/> </a> </td>
  
			<td width="250"> <h5>Update Book</h5> <a href="http://localhost/mywebsite/admin/update_book.php"> <img src="img/renew.jpg" class="img-resposive" alt="addstudent" width="180" height="180"/> </a> </td>
	
			<td width="250"> <h5>Search Book<h5> <a href="http://localhost/mywebsite/admin/search_book.php"><br/> <img src="img/searchbook.png" class="img-resposive" alt="addstudent" width="180" height="165"/> </a> </td>
	
</tr>
<tr>
			<td width="250"> <h5>Issue Book </h5> <a href="http://localhost/mywebsite/admin/issue_book.php"> <br/><img src="img/return.png" class="img-resposive" alt="addstudent" width="180" height="167"/> </a> </td>

			<td width="250"> <h5>Return Book</h5> <a href="http://localhost/mywebsite/admin/return_stud.php"> <br/> <img src="img/borrow.png" class="img-resposive" alt="deletestudent" width="180" height="167"/> </a> </td>
  
</tr>


 </table>
</div>
</body>
</html>