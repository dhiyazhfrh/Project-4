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
        <link rel="stylesheet" type="text/css" href="View_class_admin.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header>
            <img class="logo" src="img/logotxt.png" href="Home_admin.php">
            <nav>
                <ul class="nav__links">
                    <li><a href="View_admin.php">Class</a><div class="rec"></div></li>
                    <li><a href="View_student_admin.php">Student</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Manage</a></li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </nav>
        </header>
        <div class="title">
            <img class="schedule" src="img/schedule.png">
            <h2>Class</h2>
        </div>
        <a href="Input_class.php">
            <input type="button" class="btn" value="+ Add new">
        </a>
            <div class="container">
            <table class="content-table">
                <thead>
                <tr>
                    <th>Class Name</th>
                    <th>Grade</th>
                    <th>Room</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>Pre A</td>
                      <td>Preschool</td>
                      <td>#</td>
                      <td>#</td>
                      <td><div class="action">
                          <img class="edit" src="img/edit.svg" href="#">
                          <img class="delete" src="img/delete.svg" href="#"></div></td>
                    </tr>
                <tbody>
            </table>
        </div>
    </body>
</html>