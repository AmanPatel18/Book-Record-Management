<?php
session_start();
if(!isset($_SESSION['username']))
{
    header('location:http://localhost/BRM/Login_Page.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="Home_Style.css" />
</head>
<body>
    <h1>Book Record Management</h1>
    <a id="logout_link" href="Login_Page.php"><img id="logout" src="Logout.png"/></a>
    <h3><?php echo "Welcome ".$_SESSION['username'];?></h3>
    <div class="log-box">
        <h1>Main Menu</h1>
         <a href="Insert_Form.php" id="i1" class="mcontent">1.Insert Records</a>
         <br/><a href="Delete_Form.php" id="i2" class="mcontent">2.Delete Records</a>
         <br/><a href="Update_Form.php" id="i3" class="mcontent">3.Udate Records</a>
         <br/><a href="View.php" id="i4" class="mcontent">4.View Records</a>
    </div>
    
</body>
</html>