<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/2f7ccccb75.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="Login_Style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h1>Book Record Management</h1>
    <div class="log-box">
        <img class="usrimg"src="user.png"/>
        <h2>Login to your Account</h2>
    <form action="Validation.php" method="POST">  
        <i class="fas fa-user"></i> 
        User Name<br/>
        <input type="text" placeholder="Enter Username" name="username" required/>
        <i class="fas fa-key"></i> Password<br/>
        <input type="password" placeholder="Enter Password" name="password" required/>
        <label>Don't have an account? </label>
        <br/>
        <a href="Create_Account.php">Create Now</a>
        <input type="submit" value="Sign In"/>
    </form>
    </div>
</body>
</html>