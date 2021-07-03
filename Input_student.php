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
        <title>Student</title>
        <link rel="stylesheet" type="text/css" href="Input_student.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="container">
            <div class="input">
                <a href="View_student_admin.php"> < Back</a>
                <h5>New Student</h5>
                <form action="#input" name="time" method="post">
                    <div class="input-1">
                        <h2>Full Name</h2>
                        <input type="text" class="name">
                    </div>
                    <div class="input-1">
                        <h2>Gender</h2>
                        <input type="text" class="gender">
                    </div>
                    <div class="input-1">
                        <h2>Date of Birth</h2>
                        <input type="date" class="dob">
                    </div>
                    <div class="input-1">
                        <h2>Class</h2>
                        <select name="cl" class="cl">
                            <option value="">-- Choose class --</option></select>
                    </div>
                    <input type="submit" class="btn" value="Save">
                </form>
            </div>
        </div>
    </body>