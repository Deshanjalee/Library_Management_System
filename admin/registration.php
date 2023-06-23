<?php
	include "connection.php";
	include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>

	<title>Admin Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style type="text/css">
	section
	{
		margin-top: -20px;
	}	
</style>
</head> 
<body>
<!--	
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand active">ONLINE LIBRARY MANAGEMENT SYSTEM</a>
					</div>  
					<ul class="nav navbar-nav">
						<li><a href="index.html">HOME</a></li>
						<li><a href="book.html">BOOKS</a></li>
						<li><a href="">FEEDBACK</a></li>
					</ul>

						
					<ul class="nav navbar-nav navbar-right" >
						<li><a href="student_login.html"><span class="glyphicon glyphicon-log-in"> LOGIN</span> </a><li>
						<li><a href="student_login.html"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a><li>
						<li><a href="registration.html"><span class="glyphicon glyphicon-user"> SIGN UP</span> </a></li>
					</ul>

				</div>
			</nav>
-->

<section>
	<div class="reg_img">
		 
			<div class="box2">
				
					<h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;"> &nbsp &nbsp &nbsp Library Management System</h1>
					<h1 style="text-align: center;font-size: 25px;">User Registration Form</h1>
				<form name="Registration" action="" method="post">
					
					<div class="login">
						<input class="form-control" type="text" name="first" placeholder="First Name" required=""> <br>
						<input class="form-control"type="text" name="last" placeholder="Last Name" required=""> <br>
						<input class="form-control"type="text" name="username"placeholder="Username" required=""> <br>
						<input class="form-control"type="password" name="password" placeholder="Password" required=""> <br>
						<input class="form-control"type="text" name="email" placeholder="Email" required=""><br>
						<input class="form-control"type="text" name="contact" placeholder="Phone No" required=""><br>

						<input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 70px;height: 30px"> </div>
				</form>	 
				
			</div> 
		</div>
</section>

	<?php

	 if(isset($_POST['submit']))
	 {

	 	$count=0;
	 	$sql="SELECT username from `admin`";
	 	$res=mysqli_query($db,$sql);

	 	while($row=mysqli_fetch_assoc($res))
	 	{
	 		if($row['username']==$_POST['username'])
	 		{
	 			$count=$count+1;
	 		}
	 	}
	if($count==0)
	 	{mysqli_query($db,"INSERT INTO `admin` VALUES('$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]', '$_POST[email]', '$_POST[contact]','25.png','yes');");

	?>
	  <script type="text/javascript">
	  	alert("Registration successful");
	  </script>
	<?php 
	}	
	   else
	   {
	   	?>
	  <script type="text/javascript">
	  	alert("The username already exist.");
	  </script>
	<?php 

	   }

	   }

	?> 
</body>
