<?php 
session_start();
//session_destroy();
if(!isset($_SESSION['logonSuccess'])){
    header("location: index.php");
}
$u_id=$_SESSION['UserId'];
$con=mysqli_connect('localhost','root','','blood4u');
$sql= "SELECT * FROM user WHERE id='$u_id'";
$sql2= "SELECT * FROM user_details WHERE user_id ='$u_id'";
$details1=mysqli_fetch_assoc(mysqli_query($con,$sql));
$details2=mysqli_fetch_assoc(mysqli_query($con,$sql2));
$las_don=strtotime($details2['last_donation']);
$nxt_date=date('Y-m-d',$las_don+7948800);
//$result=mysqli_num_rows(mysqli_query($con,$sql));
//echo $result." ".$u_id;
include('header.php') ;
?>

    <div class="container" style="margin-top: 50px;">
	<div class="row"  >

		  <div class="col-3 row justify-content-center align-items-center" style="height:500px;background: linear-gradient(to right, #E33D48, #FF627E);">
                <h1 style="text-align: center;color: white;"> <img src="logo.png" alt="" style="height: 50px;width:200px"> BLOOD <br> FOR <br> YOU</h1>
		  </div>

		  <div class="col-9" style="padding-left:50px;">
          <?php if(isset($_SESSION['reqSuccess']) ){?>
            <div class="alert alert-success" role="alert">
                request successful
            </div>
          <?php } unset($_SESSION['reqSuccess']) ?>
		  	<h1>Profile</h1>
            <hr style="border: 1px solid #E33D48;">
            <label><b>Name: </b><?php echo $details2['first_name']." ".$details2['last_name']?></label><br>
            <label><b>Address: </b><?php echo $details2['address']?></label><br>
            <label><b>Blood Group: </b><?php echo $details2['blood_g']?></label><br>
            <label><b>Contact Number: </b><?php echo $details2['contact_no']?></label><br>
            <label><b>Donation Area: </b><?php echo $details2['donation_area']?></label><br>
            <label><b>Last Donation: </b><?php echo $details2['last_donation']?></label><br>
            <label><b>Next Eligible Date: </b><?php echo $nxt_date ?></label><br>
		  </div>

	</div>
    </div>
<?php include('fter.php') ?>