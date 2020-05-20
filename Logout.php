<?php
session_start();
session_destroy();
header('location:http://localhost/BRM/Login_Page.php');
?>