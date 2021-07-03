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
        <title>Manage</title>
        <link rel="stylesheet" type="text/css" href="Input_manage.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="container">
            <div class="input">
                <a href="View_manage_admin.php"> < Back</a>
                <h5>New User</h5>
                <form action="#input" name="schedule" method="post">
                    <div class="input-1">
                        <h2>Username</h2>
                        <input type="text" class="username">
                    </div>
                    <div class="input-1">
                        <h2>Full Name</h2>
                        <input type="text" class="full_name">
                    </div>
                    <div class="input-1">
                        <h2>Email</h2>
                        <input type="email" class="mail">
                    </div>
                    <div class="input-1">
                        <h2>Phone Number</h2>
                        <input type="number" class="phone">
                    </div>
                    <div class="input-1">
                        <h2>Position</h2>
                        <input type="text" class="post">
                    </div>
                    <input type="submit" class="btn" value="Save">
                </form>
            </div>
        </div>
    </body>
</html>