<?php 
session_start();
//session_destroy();
if(!isset($_SESSION['logonSuccess'])){
    header("location: index.php");
}
$rq_id=$_GET['id'];
$con=mysqli_connect('localhost','root','','blood4u');
$sql= "SELECT * FROM accepte_d WHERE req_id='$rq_id' ORDER BY Ac_id DESC";
$details=mysqli_query($con,$sql);
include('header.php');
?>
<div class="container" style="margin-top: 50px;">
 <div class="row">
     <div class="col-3 row justify-content-center align-items-center" style="height:500px;background: linear-gradient(to right, #E33D48, #FF627E);">
         <h1 style="text-align: center;color:white"> <img src="logo.png" alt="" style="height: 50px;width:200px"> BLOOD <br> FOR <br> YOU</h1>   </div>
     <div class="col-7">
    <h1 style="width: 100%; text-align: center; color: blue;">Doner Details</h1>
    <hr style="border: 1px solid #E33D48;margin-left: 50px;">
     <table class="table"style="margin-left: 100px;">
        <header>
            <th>Name</th>
            <th>Number</th>
            <th>Date</th>
        </header>
         <?php while($row=mysqli_fetch_assoc($details)){
         		$u_id=$row['Ac_u_id'];
         		$sql3= "SELECT * FROM user_details WHERE user_id='$u_id'";
            	$det=mysqli_fetch_assoc(mysqli_query($con,$sql3));
         	?>
            <tr>
                <td><?php echo$det['first_name']." ".$det['last_name'];?></td>
                <td><?php echo $det['contact_no'];?></td>
                <td><?php echo $row['do_date'];?></td>
            </tr>
         <?php } ?>
     </table>
  </div>
 </div>
 </div> 
<?php include('fter.php'); ?> 