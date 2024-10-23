<?php
session_start();
//session_destroy();
if(!isset($_SESSION['logonSuccess'])){
    header("location: index.php");
}
$u_id=(int)$_SESSION['UserId'];
$blood_g=$_POST['b_group'];
$n_date=$_POST['dat'];
$n_bag=(int)$_POST['n_of_b'];
$area=$_POST['area'];
$col_bag=0;
$con=mysqli_connect('localhost','root','','blood4u');
$sql_in="INSERT INTO request VALUES(NULL,'$blood_g','$area','$n_bag','$n_date','0','$u_id')";
//echo $u_id." ".$blood_g." ".$n_date." ".$n_bag." ".$area;
if(mysqli_query($con,$sql_in)){
    $_SESSION['reqSuccess']=1;
    header("location: profile.php");
}
else{
    $_SESSION['reqErorr']=1;
    header("location: request.php");
}