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
        <link rel="stylesheet" type="text/css" href="View_schedule_user.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header>
            <img class="logo" src="img/logotxt.png" href="Home_admin.php">
            <nav>
                <ul class="nav__links">
                    <li><a href="View_user.php">Class</a><div class="rec"></div></li>
                    <li><a href="View_student_user.php">Student</a></li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </nav>
        </header>
        <div class="title">
            <img class="time" src="img/time.png">
            <h2>Schedule</h2>
        </div>
            <div class="container">
            <table class="content-table">
                <thead>
                <tr>
                    <th>Day</th>
                    <th>Time</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>Tuesday</td>
                      <td>10.00 - 12.00</td>
                    </tr>
                <tbody>
            </table>
        </div>
    </body>
</html>