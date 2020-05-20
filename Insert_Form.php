<?php
session_start();
if(!isset($_SESSION['username']))
{
    header('location:http://localhost/BRM/Login_Page.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Insert_Form</title>
    <link rel="stylesheet" type="text/css" href="Insert_Form_Style.css">
</head>
<body>
    <h1>Book Record Management</h1>
    <a href="Home.php"><img id="home" src="Home.png"/></a>
    <a href="Login_Page.php"><img id="logout" src="Logout.png"</a>
    <div class="log-box">
    <form action="Insertion.php" method="POST">
        <p>Insert Record</p>
        <table>
            <tr>
                <th>Title:</th>
                <td>
                    <input type="text" placeholder="Enter the Title" name="title" required/>
                </td>
            </tr>
            <tr>
                <th>Author:</th>
                <td>
                    <input type="text" placeholder="Enter the Author's name" name="author" required/>
                </td>
            </tr>
            <tr>
                <th>Price:</th>
                <td>                
                    <input type="number" placeholder="Enter the Price:" name="price" required/>
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input type="submit" value="Insert"/>
                </td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>