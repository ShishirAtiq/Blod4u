<?php 
session_start();
//session_destroy();
if(!isset($_SESSION['logonSuccess'])){
    header("location: index.php");
}
$my_id=$_SESSION['UserId'];
$con=mysqli_connect('localhost','root','','blood4u');
$sql= "SELECT * FROM request WHERE user_id='$my_id' ORDER BY id DESC";
$details=mysqli_query($con,$sql);
include('header.php');
?>
<div class="container" style="margin-top: 50px;">
 <div class="row">
     <div class="col-3 row justify-content-center align-items-center" style="height:500px;background: linear-gradient(to right, #E33D48, #FF627E);">
         <h1 style="text-align: center;color:white"> <img src="logo.png" alt="" style="height: 50px;width:200px"> BLOOD <br> FOR <br> YOU</h1>   </div>
     <div class="col-7">
    <h1 style="width: 100%; text-align: center; color: blue;">Request Details</h1>
    <hr style="border: 1px solid #E33D48;margin-left: 50px;">
     <table class="table"style="margin-left: 100px;">
        <header>
            <th>Date</th>
            <th>Blood Group</th>
            <th>Area</th>
            <th>Need</th>
            <th>Collected</th>
        </header>
         <?php while($row=mysqli_fetch_assoc($details)){?>
            <tr>
                <td><?php echo$row['need_date'];?></td>
                <td><?php echo $row['blood_g'];?></td>
                <td><?php echo $row['area'];?></td>
                <td><?php echo $row['number_bag'];?></td>
                <td><?php echo $row['collected_bag'];?></td>
                <td><a class="btn btn-primary mb-4"  href="d_receive_det.php?id=<?php echo $row['id'] ?>">VIEW</a></td>
            </tr>
         <?php } ?>
     </table>
  </div>
 </div>
 </div> 
<?php include('fter.php'); ?> 