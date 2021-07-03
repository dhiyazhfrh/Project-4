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
        <title>Room</title>
        <link rel="stylesheet" type="text/css" href="View_room_user.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header>
            <img class="logo" src="img/logotxt.png">
            <nav>
                <ul class="nav__links">
                    <li><a href="View_user.php">Class</a><div class="rec"></div></li>
                    <li><a href="View_student_user.php">Student</a></li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </nav>
        </header>
        <div class="title">
            <img class="room" src="img/room.png">
            <h2>Room</h2>
        </div>
            <div class="container">
            <table class="content-table">
                <thead>
                <tr>
                    <th>Room</th>
                    <th>Capacity</th>
                </tr>
                </thead>
                <?php
                    $query = mysqli_query($connect , "SELECT * FROM room");
                    while ($room = mysqli_fetch_array($query)){
                ?>
                <tbody>
                    <tr>
                      <td><?php echo $room['room_name']; ?></td>
                      <td><?php echo $room['capacity'];?></td>
                    </tr>
                <tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </body>
</html>