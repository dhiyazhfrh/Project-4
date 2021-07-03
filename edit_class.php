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
        <link rel="stylesheet" type="text/css" href="edit_class.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="container">
            <div class="input">
                <a href="View_class_admin.php"> < Back</a>
                <h5>Edit Class</h5>
                <?php
                
                    $id = isset($_GET['id'])? $_GET['id']:'';

                    $query = mysqli_query($connect, "SELECT * FROM class_detail WHERE detail_id = '$id'");
                    $data = mysqli_fetch_array($query);
                    $room_id = $data['room_id'];
                    $time_id = $data['time_id'];
                ?>
                
                <form action="update_class.php" method="POST">
                <table class="input-1">
                    <tr>
                        <td><h2>Class Name</h2></td>
                        <td>
                            <input type="text" name="class" class="c_name" value="<?php echo $data['class_name']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td><h2>Grade</h2></td>
                        <td>
                            <input type="text" name="grade" class="grade" value="<?php echo $data['grade']; ?>">
                        </td>
                    </tr>

                    <td><h2>Room</h2></td>
                        <td>
                        <select name="room" class="room">
                            <?php
                                $query1 = mysqli_query($connect, "SELECT * FROM room WHERE room_id = '$room_id'");
                                $sql1 = mysqli_fetch_array($query1);
                            ?>
                            <option value="<?php echo $sql1['room_name']; ?>" selected hidden><?php echo $sql1['room_name']; ?></option>
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
                        </td>
                    </tr>

                    <td><h2>Schedule</h2></td>
                        <td>
                        <select name="time" class="time">
                            <?php
                                $query2 = mysqli_query($connect, "SELECT * FROM tbl_time WHERE time_id = '$time_id'");
                                $sql2 = mysqli_fetch_array($query2);
                            ?>
                            <option value="<?php echo $sql2['code']; ?>" selected hidden><?php echo $sql2['code']; ?></option>
                            <?php
                            $query = mysqli_query($connect, "SELECT * FROM tbl_time");
                            $no=0;
                            while ($time = mysqli_fetch_array($query)){
                            $no++;
                            ?>
                            <option value="<?php echo $time['time_id'];?>"><?php echo $time['code'];?></option>
                            <?php
                                }
                            ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="submit" name="submit" value="Update" class="btn">
                        </td>
                    </tr>
                </table>
                </form>
            </div>
        </div>
    </body>