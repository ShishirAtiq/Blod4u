<?php
session_start();
//session_destroy();
if(!isset($_SESSION['logonSuccess'])){
    header("location: index.php");
}
$u_id=$_SESSION['UserId'];
include('header.php') ;
?>

<div class="container" style="margin-top: 50px;">
	<div class="row"  >
		  <div class="col-3 row justify-content-center align-items-center" style="height:500px;background: linear-gradient(to right, #E33D48, #FF627E);">
                <h1 style="text-align: center;color: white;"> <img src="logo.png" alt="" style="height: 50px;width:200px"> BLOOD <br> FOR <br> YOU</h1>
		  </div>
            <div class="col-3"></div>
          <div class="col-5" >
		  	<form action="confirm_req.php" method="POST">
				  <!-- first name input -->
                  <?php if(isset($_SESSION['reqErorr']) ){?>
					<div class="alert alert-warning" role="alert">
						Request Unsuccessful
					</div>
				  <?php } unset($_SESSION['reqErorr']) ?>
				<div class="row justify-content-between align-items-center">
				  <div class="form-outline mb-4">
				  	<label class="form-label" for="form2Example1" style="color: #3377FF;"><h3>Blood Group</h3></label>
				    <input required style="width:10ppx" type="text" id="form2Example1" class="form-control" name="b_group" />
				  </div>

				  <!-- last name input -->
				  <div class="form-outline mb-4 >
				  	<label class="form-label" for="form2Example2" style="color: #3377FF;"><h3>Date</h3></label>
				    <input required style="width:10ppx"type="date" id="form2Example2" class="form-control" name="dat" />
				  </div>
				  </div>
				<!-- user name input -->
				<div class="row justify-content-between align-items-center">
                <div class="form-outline mb-4">
				  	<label class="form-label" for="form2Example1" style="color: #3377FF;"><h3>Area</h3></label>
				    <input required type="text" id="form2Example1" class="form-control" name="area" />
				  </div>

                  <!-- Email input -->
				  <div class="form-outline mb-4">
				  	<label class="form-label" for="form2Example1" style="color: #3377FF;"><h3>Number of bag</h3></label>
				    <input required type="int" id="form2Example1" class="form-control" name="n_of_b" />
				  </div>
				</div>
				
				  <!-- Submit button -->
				  <div class="row justify-content-center align-items-center">
				  <button style="width: 200px"type="submit" class="btn btn-primary btn-block mb-4">Request</button>
				  </div>
				</form>
		  </div>
    </div>
 </div>
<?php include('fter.php') ?>