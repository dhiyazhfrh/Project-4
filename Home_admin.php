<?php
include "koneksi.php";
session_start();
if (!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="Home_admin.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header>
            <img class="logo" src="img/logotxt.png">
            <nav>
                <ul class="nav__links">
                    <li><a href="View_admin.php">Class</a></li>
                    <li><a href="View_student_admin.php">Student</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Manage</a></li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </nav>
        </header>
        <div class="container">
            <img class="photo" src="img/photo.jpg">
            <div class="text">
                <h2>“ It takes a big heart to help shape little minds. Teaching is a greatest 
                act of optimism.”</h2>    
                <h2>-Colleen Wilcox</h2>
            </div>
        </div>
    </body>
</html>