<?php
session_start();
$title=$_POST['title'];
$author=$_POST['author'];
$price=$_POST['price'];
$con=mysqli_connect('localhost','root','','BRM','3308');
mysqli_select_db($con,'BRM');
$q="insert into Book (Title,Author,Price) values('$title','$author',$price)";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert_Status</title>

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
    .btn
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
    .btn:hover
    {
        background-color:black;
        cursor:pointer;
        box-shadow: 5px 8px 3.8px rgba(0, 0, 0, 0.712);;
    }
    #Insert
    {
        position:absolute;
        top:72%;
        left:50%;
        width:220px;
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
    <h1>Book Management Record</h1>
    <?php
    if($status==1)
    {
        echo "<h2>Record Inserted Successfully!</h2>";
    }
    else
    {
        echo "<h2>Record can't be insert!<h2>";
    }
    ?>
<a href="Home.php"><img id="home" src="Home.png" /></a>
<a href="View.php"><button class="btn">View Records</button></a>
<a href="Insert_Form.php"><button id="Insert" class="btn">Insert More Records</button></a>
</body>
</html>