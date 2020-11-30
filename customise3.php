<?php
session_start();
require 'db.php';



?>


<!DOCtype html>
<html lang="en">
	<head>
		<title>Login Template</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<link rel="stylesheet" href="./login.css">
	</head>
	<body>
		<div class="sidenav">
			<div class="login-main-text">
			
				<form action = "final3.php" method="post" enctype = "multipart/form-data">
				<br>
				<input type="file" name="imagefile"/> 
				<h2><input type="text"required autocomplete="off" name='companyname' placeholder = "Company Name" /> <br><br> <input type="text"required autocomplete="off" name='title' placeholder = 'Title'></h2>
				<p><input type="text"required autocomplete="off" name='description' placeholder = 'description'</p>
		
			</div>
		</div>
		<div class="main">
			<div class="col-md-6 col-sm-12">
				<div class="login-form">
					
						<div class="form-group">
							<label><input type="text"required autocomplete="off" name='variable1' placeholder = 'variable e.g.Name '></label>
							<input type="text" class="form-control" placeholder="User Name">
						</div>
						<div class="form-group">
							<label><input type="text"required autocomplete="off" name='variable2' placeholder = 'variable1 e.g.Password'></label>
							<input type="password" class="form-control" placeholder="Password">
						</div>
						</div>
						<button type="submit" class="btn btn-black">Login</button>
					
					
				</div>
				<br>
					<input type = "submit" name ="submit" value = "Confirm" />
				</form>
				
			</div>

		</div>
		
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</body>
</html>

			