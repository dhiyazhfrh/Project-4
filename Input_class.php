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
        <link rel="stylesheet" type="text/css" href="Input_class.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="container">
            <div class="input">
                <a href="View_class_admin.php"> < Back</a>
                <h5>New Class</h5>
                <form action="#input" name="schedule" method="post">
                    <div class="input-1">
                        <h2>Class Name</h2>
                        <input type="text" name="class" class="class_name">
                    </div>
                    <div class="input-1">
                        <h2>Grade</h2>
                        <input type="text" name="grade" class="grade">
                    </div>
                    <div class="input-1">
                        <h2>Room</h2>
                        <select name="room_id" class="room">
                            <?php
                            $query = mysqli_query($connect, "SELECT * FROM room");
                            $no=0;
                            while ($room = mysqli_fetch_array($query)){
                            $no++;
                            ?>
                            <option value="<?php echo $room['room_id'];?>"><?php echo $room['room_name'];?></option>
                            <?php
                                }
                            ?>
                            </select>
                    </div>
                    <div class="input-1">
                        <h2>Schedule</h2>
                        <select name="time" class="time">
                                <?php
                                $query2 = mysqli_query($connect, "SELECT * FROM tbl_time");
                                $no = 0;
                                while ($time = mysqli_fetch_array($query2)){
                                $no++;
                                ?>
                            <option value="<?php echo $time['time_id'] ?>"><?php echo $time['code'] ?></option>
                            <?php
                                }
                            ?>
                            </select>
                    </div>
                    <input type="submit" class="btn" value="Save">
                </form>
            </div>
        </div>
    </body>
</html>