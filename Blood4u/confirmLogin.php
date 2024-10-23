<?php 
session_start();
$emil=$_POST['User'];
$pass=$_POST['Password'];
$con=mysqli_connect('localhost','root','','blood4u');
$sql= "SELECT * FROM user WHERE Email='$emil' AND Password='$pass'";
//$sqlq=mysqli_query($con,$sql)
$result=mysqli_num_rows(mysqli_query($con,$sql));

//echo $result;
if($result==1){
    $sql2= "SELECT * FROM user WHERE Email='$emil'";
    $get_id=mysqli_fetch_assoc(mysqli_query($con,$sql2));
    $u_id=$get_id['id'];
    //echo $u_id;
    $_SESSION['UserId']=$u_id;
    $_SESSION['logonSuccess']=1;
    header("location: profile.php");
}
else{
    $_SESSION['loginErorr']=1;
    header("location: index.php");
}
?>