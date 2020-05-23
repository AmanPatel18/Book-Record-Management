<?php
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root','','BRM','3308');
mysqli_select_db($con,'BRM');
$hash=password_hash($password,PASSWORD_DEFAULT);
$q="insert into User values('$username','$hash')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Account Status</title>
    <style type="text/css">
    body
    {
    background:url("background.jpg");
    }
    h1
    {
        margin: 5;
        padding: 0 0 20px;
        text-align: center;
        font-size: 40px;
        font-family: cursive;
    }
    h2
    {
        text-align: center;
        font-size: 40px;
        font-family: cambria;
        animation-name:status;
        animation-duration: 3s;
        animation-delay: 1s;
    }
    @keyframes status
    {
        from
        {
            font-size: 40px;
        }
        to
        {
            font-size: 60px;
        }
    }
    #btn
    {
       position: absolute;
       top:62%;
       left:50%;
       transform:translate(-50%,-50%);
       border: 2px solid black;
       background-color:rgba(0, 0, 0, 0.712);
       font-size: 20px;
       height: 50px;
       width: 250px;
       outline: none;
       color:white;  
    }
    #btn:hover
    {
        background-color:black;
        cursor:pointer;
        box-shadow: 5px 8px 3.8px rgba(0, 0, 0, 0.712);;
    }
    </style>
</head>
<body>
    <h1>Book Management Record</h1>
    <?php
    if($status==1)
    {
        echo "<h2>Account Created Successfully!</h2>";
    }
    else
    {
        echo "<h2>Account can't be Created!<h2>";
    }
    ?>
<a href="Login_Page.php"><button id="btn">Back to Login Page?</button></a>
</body>
</html>