<?php
session_start();
$size=sizeof($_POST);
$records=$size/4;
for($i=1;$i<=$records;$i++)
{
    $index1="bookid".$i;
    $bookid[$i]=$_POST[$index1];
    $index2="title".$i;
    $title[$i]=$_POST[$index2];
    $index3="author".$i;
    $author[$i]=$_POST[$index3];
    $index4="price".$i;
    $price[$i]=$_POST[$index4];
}
$con=mysqli_connect('localhost','root','','BRM','3308');
mysqli_select_db($con,'BRM');
for($i=1;$i<=$records;$i++)
{
    $q="update book set Title='$title[$i]',Author='$author[$i]',Price='$price[$i]' where bookid=$bookid[$i]";
    mysqli_query($con,$q);
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updation</title> 
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
       width: 150px;
       border-radius: 30px;
       outline: none;
       color:white;  
    }
    #btn:hover
    {
        background-color:black;
        cursor:pointer;
        box-shadow: 5px 8px 3.8px rgba(0, 0, 0, 0.712);;
    }
    #home
    {
        width: 60px;
        height: 60px;
        position:absolute;
        top: 45%;
        left: 47.5%;
    }
    #home:hover
    {
        width:65px;
        height:65px;
    }

    </style>
</head>
<body>
    <h1>Book Record Management</h1>
    <h2>Records Updated Successfully!</h2>
    <a href="Home.php"><img id="home" src="Home.png" /></a>
    <a href="View.php"><button id="btn">View Records</button></a>
</body>
</html>