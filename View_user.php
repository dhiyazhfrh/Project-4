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
        <title>Class</title>
        <link rel="stylesheet" type="text/css" href="View_user.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header>
            <img class="logo" src="img/logotxt2.png">
            <nav>
                <ul class="nav__links">
                    <li><a href="View_user.php">Class</a><div class="rec"></div></li>
                    <li><a href="View_student_user.php">Student</a></li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="cards">
                <a href="View_class_user.php">
                    <div class="card-single">
                        <div>
                            <img class="schedule" src="img/schedule.png">
                            <h2>Class</h2>
                        </div>
                    </div>
                </a>  
                <a href="View_room_user.php">  
                    <div class="card-single2">
                        <div>
                            <img class="room" src="img/room.png">
                            <h2>Room</h2>
                        </div>
                    </div>
                </a>
                <a href="View_schedule_user.php">
                    <div class="card-single3">
                        <div>
                            <img class="time" src="img/time.png">
                            <h2>Schedule</h2> 
                        </div>
                    </div>
                </a>    
            </div>
        </main>
    </body>
</html>