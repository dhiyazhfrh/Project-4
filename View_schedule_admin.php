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
        <link rel="stylesheet" type="text/css" href="View_schedule_admin.css">
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
            <img class="time" src="img/time.png">
            <h2>Schedule</h2>
        </div>
        <a href="Input_schedule.php">
            <input type="button" class="btn" value="+ Add new">
        </a>
            <div class="container">
            <table class="content-table">
                <thead>
                <tr>
                    <th>Code</th>
                    <th>Day</th>
                    <th>Start Time</th>
                    <th>End Time </th>
                    <th>Action</th>
                </tr>
                </thead>
                <?php
                    $query = mysqli_query($connect, "SELECT * FROM tbl_time");
                    while ($schedule = mysqli_fetch_array($query)){ 
                ?>
                <tbody>
                <tr>
                    <td><?php echo $schedule['code'];?></td>
                    <td><?php echo $schedule['day_time'];?></td>
                    <td><?php echo $schedule['start_time'];?></td>
                    <td><?php echo $schedule['end_time'];?></td>
                    <td><div class="action">
                      <a href="Input_schedule.php"><img class="edit" src="img/edit.svg" href="#"></a>
                      <a href="delete_schedule.php?id=<?php echo $schedule['time_id']?>"><img class="delete" src="img/delete.svg"></a></div></td>
                </tr>
                <tbody>
                <?php
                    }
                ?>
            </table>
        </div>
    </body>
</html>