 <?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Blood4U</title>
  </head>
  <body style="background: lightgray">

		<div class="row"  >

		  <div class="col-5 row justify-content-center align-items-center" style="color: #3377FF;">
		  	<h1>BLOOD FOR YOU</h1>
		  </div>

		  <div class="col-7 row justify-content-center align-items-center " style="margin-top: 50px;height: 500px; background:#00BCFF; color:white; " >
		  	
		  <form action="confirmLogin.php" method="POST">
				  <!-- Email input -->
				  <?php if(isset($_SESSION['loginErorr']) ){?>
					<div class="alert alert-warning" role="alert">
						Wrong Email or Password
					</div>
				  <?php } unset($_SESSION['loginErorr']) ?>
				  <?php if(isset($_SESSION['reg_suc']) ){?>
					<div class="alert alert-success" role="alert">
						Registration successfull
					</div>
				  <?php } unset($_SESSION['reg_suc']) ?>
				  <div class="form-outline mb-4">
				  	<label class="form-label" for="form2Example1" ><h3>Email address</h3></label>
				    <input type="email" id="form2Example1" class="form-control" name="User" />
				  </div>

				  <!-- Password input -->
				  <div class="form-outline mb-4">
				  	<label class="form-label" for="form2Example2" ><h3>Password</h3></label>
				    <input type="password" id="form2Example2" class="form-control" name="Password" />
				  </div>

				  <!-- 2 column grid layout for inline styling -->
				  

				  <!-- Submit button -->
				  <button type="submit" class="btn btn-primary btn-block mb-4">Log in</button>

				  <!-- Register buttons -->
				  <div class="text-center">
				    <p>Not a member? <a href="registration.php" style="color: #0900FF">Register</a></p>
				  </div>
				</form>
		  </div>

		</div>


	<?php include('fter.php')?>

