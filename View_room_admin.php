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
        <link rel="stylesheet" type="text/css" href="View_room_admin.css">
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
                    <li><a href="View_manage_admin.php">Manage</a></li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </nav>
        </header>
        <div class="title">
            <img class="room" src="img/room.png">
            <h2>Room</h2>
        </div>
        <a href="Input_room.php">
            <input type="button" class="btn" value="+ Add new">
        </a>
            <div class="container">
            <table class="content-table">
                <thead>
                <tr>
                    <th>Room</th>
                    <th>Capacity</th>
                    <th>Action</th>
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
                      <td><div class="action">
                            <a href="Input_room.php"><img class="edit" src="img/edit.svg"></a>
                            <a href="delete_room.php?id=<?php echo $room['room_id']?>"><img class="delete" src="img/delete.svg"></a></td></div>
                    </tr>
                <tbody>
                <?php
                }
                ?>    
            </table>
        </div>
    </body>
</html>