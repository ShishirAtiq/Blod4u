<?php 
session_start();
//session_destroy();
if(!isset($_SESSION['logonSuccess'])){
    header("location: index.php");
}
$u_id=$_SESSION['UserId'];
$con=mysqli_connect('localhost','root','','blood4u');
$sql= "SELECT * FROM user_details WHERE user_id ='$u_id'";
$details=mysqli_fetch_assoc(mysqli_query($con,$sql));
$d_area=$details['donation_area'];
$b_g=$details['blood_g'];
$sqlr="SELECT * FROM request WHERE area ='$d_area' AND blood_g='$b_g' AND user_id!='$u_id'";
$details=mysqli_query($con,$sqlr);
$sql2= "SELECT * FROM user_details WHERE user_id ='$u_id'";
$details2=mysqli_fetch_assoc(mysqli_query($con,$sql2));
$lsat_d=$details2['last_donation'];
date_default_timezone_set('Asia/Dhaka');
$today_d=date('Y-m-d');
$tim1=strtotime($lsat_d);
$tim2=strtotime($today_d);
$can_donate=0;
//echo $today_d.'<br>';
if(($tim2-$tim1)>=7948800) $can_donate=1;
// $result=mysqli_num_rows(mysqli_query($con,$sql));
// echo $result." ".$u_id;
//echo $result." ".$u_id;
 include('header.php'); 
 ?>
   <div class="container" style="margin-top: 50px;">
 <div class="row">
     <div class="col-3 row justify-content-center align-items-center" style="height:500px;background: linear-gradient(to right, #E33D48, #FF627E);">
         <h1 style="text-align: center;color:white"> <img src="logo.png" alt="" style="height: 50px;width:200px"> BLOOD <br> FOR <br> YOU</h1> 	 </div>
     <div class="col-9">
        <?php if(!$can_donate){ ?>
            <h1 style="width: 100%; text-align: center; color: blue;">You are not eligible for donation</h1>
            <hr style="border: 1px solid #E33D48;margin-left: 50px;">
        <?php } ?>
     <table class="table"style="margin-left: 100px;">
        <header>
            <th>Blood Group</th>
            <th>Date</th>
            <th>Number of Bag</th>
        </header>
         <?php while($row=mysqli_fetch_assoc($details)){ 
            $d_n_d=strtotime($row['need_date']);
            if($d_n_d<$tim2|| $row['number_bag']<=$row['collected_bag'])continue;
            ?>
             <tr>
                 <td><?php echo $row['blood_g'];?></td>
                 <td><?php echo $row['need_date'];?></td>
                 <td><?php echo $row['number_bag']-$row['collected_bag'];?></td>
                <?php if($can_donate) { ?>
                 <td><a class="btn btn-primary mb-4"  href="Show_detials.php?id=<?php echo $row['id'] ?>">Accept</a></td><?php } ?>
             </tr>
         <?php } ?>
     </table>
  </div>
 </div>
 </div> 
 <?php include('fter.php'); ?> 