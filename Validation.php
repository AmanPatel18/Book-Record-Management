<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root','','BRM','3308');
mysqli_select_db($con,'BRM');
$q="Select * from User where Username='$username'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
    while($row=mysqli_fetch_assoc($result))
    {
        if(password_verify($password,$row['Password']))
        {
            $_SESSION['username']=$username;
            header('location:http://localhost/BRM/Home.php');
        }
        else
        {
            header('location:http://localhost/BRM/Login_Page.php');
        }
    }
}
else
{
    header('location:http://localhost/BRM/Login_Page.php');
}
mysqli_close($con);
?>