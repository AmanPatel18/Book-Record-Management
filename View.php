<?php
session_start();
if(!isset($_SESSION['username']))
{
    header('location:http://localhost/BRM/Login_Page.php');
}
$con=mysqli_connect('localhost','root','','BRM','3308');
mysqli_select_db($con,'BRM');
$q="select * from Book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>View_Books</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="View_Style.css"/>
</head>
<body>
    <h1>Book Record Management</h1>
    <a href="Home.php"><img id="home" src="Home.png"/></a>
    <a href="Login_Page.php"><img id="logout" src="Logout.png"</a>
    <table id="view_table">
        <tr>
        <th>Book ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Price</th>
        </tr>
        <tr>
        <?php
        for($i=1;$i<=$num;$i++)
        {
           $row=mysqli_fetch_array($result);
        ?>
        <tr>
        <td><?php echo $row['BookId']?></td>
        <td><?php echo $row['Title']?></td>
        <td><?php echo $row['Author']?></td>
        <td><?php echo $row['Price']?></td>
        </tr>
        <?php
        }
        ?>
        </tr>
    </table>
</body>
</html>
