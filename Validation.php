<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$lh='localhost';
$un='root';
$pw='';
$db='BRM';
$port='3308';
$con=mysqli_connect($lh,$un,$pw,$db,$port);
mysqli_select_db($con,'BRMs');
$q="Select * from User where Username='$username' && Password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
    $_SESSION['username']=$username;
    header('location:http://localhost/BRM/Home.php');
}
else
{
    header('location:http://localhost/BRM/Login_Page.php');
    
}
mysqli_close($con);
?>