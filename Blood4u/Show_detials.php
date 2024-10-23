<?php 
session_start();
//session_destroy();
if(!isset($_SESSION['logonSuccess'])){
    header("location: index.php");
}
$rq_id=$_GET['id'];
$con=mysqli_connect('localhost','root','','blood4u');
$sql= "SELECT * FROM request WHERE id ='$rq_id'";
$details2=mysqli_fetch_assoc(mysqli_query($con,$sql));
$u_id=$details2['user_id'];
$sql2= "SELECT * FROM user_details WHERE user_id='$u_id'";
$details=mysqli_fetch_assoc(mysqli_query($con,$sql2));
$my_id=$_SESSION['UserId'];
date_default_timezone_set('Asia/Dhaka');
$t_day=date('Y-m-d');
$up_sql="UPDATE user_details SET last_donation='$t_day' WHERE user_id='$my_id'";
mysqli_query($con,$up_sql);
$col_b=$details2['collected_bag']+1;
$up_re_sql="UPDATE request SET collected_bag='$col_b' WHERE id='$rq_id'";
mysqli_query($con,$up_re_sql);
$sql_in="INSERT INTO accepte_d VALUES(NULL,'$rq_id','$my_id','$t_day')";
mysqli_query($con,$sql_in);
//$result=mysqli_num_rows(mysqli_query($con,$sql));
//echo $result." ".$u_id;
include('header.php') ;
?>
<div class="container" style="margin-top: 50px;">
	<div class="row"  >

		  <div class="col-3 row justify-content-center align-items-center" style="height:500px;background: linear-gradient(to right, #E33D48, #FF627E);">
                <h1 style="text-align: center;"> <img src="logo.png" alt="" style="height: 50px;width:200px"> BLOOD <br> FOR <br> YOU</h1>
		  </div>
        <div class="col-md-5" style="padding-left:50px;">
            <table class="table ">
                <tr>
                    <td>Name: </td>
                    <td><?php echo " ".$details['first_name']." ".$details['last_name']?></td>
                </tr>
                <tr>
                    <td>Number:</td>
                    <td><?php echo $details['contact_no'] ?></td>
                </tr>
            </table>
        </div>
    </div>
 </div>
<?php include('fter.php') ;?>