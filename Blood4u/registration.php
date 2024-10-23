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
		<div class="row" >

		  <div class="col-6 row justify-content-center align-items-center" style="color: #3377FF;">
		  	<h1>BLOOD FOR YOU</h1>
		  </div>
			
		  <div class="col-5" style="margin-top: 50px">
		  	<form action="conf.php" method="POST">
			  <?php if(isset($_SESSION['match_u_e']) ){?>
					<div class="alert alert-warning" role="alert">
						User name or Email already exist.
					</div>
				  <?php unset($_SESSION['match_u_e']);} //?>
				<?php if(isset($_SESSION['reg_eror']) ){?>
					<div class="alert alert-warning" role="alert">
						Registration Unsuccessfull.
					</div>
				<?php unset($_SESSION['reg_eror']);} //?>
				  <!-- first name input -->
				<div class="row justify-content-between align-items-center">
				  <div class="form-outline mb-4">
				  	<label class="form-label" for="form2Example1" style="color: #3377FF;"><h3>First Name</h3></label>
				    <input required style="width:10ppx" type="text" id="form2Example1" class="form-control" name="first_name" />
				  </div>

				  <!-- last name input -->
				  <div class="form-outline mb-4 >
				  	<label class="form-label" for="form2Example2" style="color: #3377FF;"><h3>Last Name</h3></label>
				    <input required style="width:10ppx"type="text" id="form2Example2" class="form-control" name="last_name" />
				  </div>
				  </div>
				<!-- user name input -->
				<div class="row justify-content-between align-items-center">
                <div class="form-outline mb-4">
				  	<label class="form-label" for="form2Example1" style="color: #3377FF;"><h3>User Name</h3></label>
				    <input required type="text" id="form2Example1" class="form-control" name="user" />
				  </div>

                  <!-- Email input -->
				  <div class="form-outline mb-4">
				  	<label class="form-label" for="form2Example1" style="color: #3377FF;"><h3>Email address</h3></label>
				    <input required type="email" id="form2Example1" class="form-control" name="email" />
				  </div>
				</div>
				<div class="row justify-content-between align-items-center">
				  <!-- Password input -->
				  <div class="form-outline mb-4">
				  	<label class="form-label" for="form2Example2" style="color: #3377FF;"><h3>Password</h3></label>
				    <input required type="password" id="form2Example2" class="form-control" name="Password" />
				  </div>
				  
                  <!-- adress input -->
				  <div class="form-outline mb-4">
				  	<label class="form-label" for="form2Example1" style="color: #3377FF;"><h3>Address</h3></label>
				    <input required type="text" id="form2Example1" class="form-control" name="address" />
				  </div>
				</div>
				<div class="row justify-content-between align-items-center">
				  <!-- bloodgroup input -->
				  <div class="form-outline mb-4">
				  	<label class="form-label" for="form2Example2" style="color: #3377FF;"><h3>Blood Group</h3></label>
				    <input required type="text" id="form2Example2" class="form-control" name="group" />
				  </div>

                  <!-- Contruct input -->
				  <div class="form-outline mb-4">
				  	<label class="form-label" for="form2Example1" style="color: #3377FF;"><h3>Contact Number</h3></label>
				    <input required type="text" id="form2Example1" class="form-control" name="contruct" />
				  </div>
				</div>
				<div class="row justify-content-between align-items-center">
				  <!-- donation area input -->
				  <div class="form-outline mb-4">
				  	<label class="form-label" for="form2Example2" style="color: #3377FF;"><h3>Donation Area</h3></label>
				    <input required type="text" id="form2Example2" class="form-control" name="area" />
				  </div>
				  <div class="form-outline mb-4">
				  	<label class="form-label" for="form2Example2" style="color: #3377FF;"><h3>Last Donation Date</h3></label>
				    <input required type="date" id="form2Example2" class="form-control" name="Last_date" />
				  </div>
				  </div>
				  <!-- Submit button -->
				  <div class="row justify-content-center align-items-center">
				  <button style="width: 200px"type="submit" class="btn btn-primary btn-block mb-4">Confirm</button>
				  </div>
				
				  <!-- Register buttons -->
				  <div class="text-center">
				    <p>allready have a acount? <a href="index.php">Login</a></p>
				  </div>
				</form>
		  </div>

		</div>

	<?php include('fter.php')?>

