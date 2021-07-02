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
        <link rel="stylesheet" type="text/css" href="Input_schedule.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="container">
            <div class="input">
                <a href="View_schedule_admin.php"> < Back</a>
                <h5>New Schedule</h5>
                <form action="Input_schedule_process.php" method="post">
                    <div class="input-1">
                        <h2>Code</h2>
                        <input type="text" name="code1" class="cod"><b>
                    <div class="input-1">
                        <h2>Day</h2>
                        <select name="day" class="day">
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                    </div>
                    <div class="input-1">
                        <h2>Time</h2>
                        <input type="time" name="start" class="time"><b> - </b> <input type="time" name="end" class="time">
                    </div>
                    <input type="submit" class="btn" value="Save">
                </form>
            </div>
        </div>
    </body>