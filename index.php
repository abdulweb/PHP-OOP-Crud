<?php
	//Linking or including the connection file
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<meta name="description" content="CRUD PHP OOP">
	<meta name="keywords" content="HTML,CSS,PHP, CRUD in PHP OOP">
  	<meta name="author" content="Abdulraheem Abdulrasheed">
  	<meta name="author" content="abdulweb">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<style type="text/css">
	.grid{
		margin-top: 20px;
		border: 1px solid #cca;
		border-radius: 10px;
		padding: 30px;
	}
</style>
<body>
	<div>
		<nav class="navbar navbar-default" style="background: #cca; color: #fafafa">
			<div class="container">
				<div class="navbar-header">
				<a class="navbar-brand" href="#">CRUD in PHP OOP</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php"></span>Register</a></li>
				<li><a href="login.php"> Login</a></li>
				</ul>
			</div>
	</nav>
	</div>

	<div class="row">
		<!-- <div class="col-md-1"></div> -->
		<div class="col-md-4 col-md-offset-4 container" >
			
			<div class="grid">
				<form class="form-horizontal" action="index.php" method="post">
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Full Name:</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Email:</label>
				    <div class="col-sm-10">
				      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="pwd">Password:</label>
				    <div class="col-sm-10"> 
				      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
				    </div>
				  </div>
				  <div class="form-group"> 
				    <div class="col-sm-offset-2 col-sm-10">
				      <div class="checkbox">
				        <label><input type="checkbox"> Remember me</label>
				      </div>
				    </div>
				  </div>
				  <div class="form-group"> 
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default" name="registerBtn">Submit</button>
				    </div>
				  </div>
				</form>
			</div>
	</div>
	</div>
</body>
</html>