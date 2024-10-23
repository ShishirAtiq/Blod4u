<?php
$fst_n=$_POST['first_name'];
$lst_n=$_POST['last_name'];
$user_n=$_POST['user'];
$emil=$_POST['email'];
$pass=$_POST['Password'];
$addres=$_POST['address'];
$bloodG=$_POST['group'];
$num=$_POST['contruct'];
$area=$_POST['area'];
$last_d_date=$_POST['Last_date'];
$con=mysqli_connect('localhost','root','','blood4u');
$sql_in="INSERT INTO user VALUES(NULL,'$user_n','$emil','$pass')";
if(!mysqli_query($con,$sql_in)){
    $_SESSION['match_u_e']=1;
    header("location: registration.php");
}

$sql= "SELECT * FROM user WHERE Email='$emil'";
$result=mysqli_fetch_assoc(mysqli_query($con,$sql));
$user_id=(int)$result['id'];
$sql_in_datiles="INSERT INTO user_details VALUES(NULL,'$fst_n','$lst_n','$user_id','$addres','$bloodG','$num','$last_d_date','$area')";
if(mysqli_query($con,$sql_in_datiles)){
    $_SESSION['reg_suc']=1;
    header("location: index.php");
}
else{
    $_SESSION['reg_eror']=1;
    header("location: registration.php");
}