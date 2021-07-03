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
                    <li><a href="View_manage_admin.php">Manage</a></li>
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
                <?php
                    $query = mysqli_query($connect, "SELECT * FROM class_detail");
                    while ($data = mysqli_fetch_array($query)){
                        $class_id = $data['class_id'];
                        $name = $data['class_name'];
                        $lvl = $data['grade'];
                ?>
                <tbody>
                    <tr>
                      <td><?php echo $name; ?></td>
                      <td><?php echo $lvl; ?></td>
                    <?php
                        $sql2 = mysqli_query($connect, "SELECT * FROM class WHERE class_id = '$class_id'" );
                        $data2 = mysqli_fetch_array($sql2);
                        $room = $data2['room_id'];
                        $time = $data2['time_id'];
                    ?>
                    <?php
                        $sql3= mysqli_query($connect, "SELECT * FROM room WHERE room_id = '$room'");
                        $data3 = mysqli_fetch_array($sql3);
                    ?>
                      <td><?php echo $data3['room_name']; ?></td>
                    <?php
                        $sql4 = mysqli_query($connect, "SELECT * FROM tbl_time WHERE time_id = '$time' ");
                        $data4 = mysqli_fetch_array($sql4);
                    ?>
                      <td><?php echo $data4['code'];?></td>
                      <td><div class="action">
                          <img class="edit" src="img/edit.svg" href="#">
                          <a href="delete_class.php?id=<?php echo $data['detail_id'];?>"><img class="delete" src="img/delete.svg" ></a></div></td>
                    </tr>
                <tbody>
                <?php
                    }
                ?>

            </table>
        </div>
    </body>
</html>