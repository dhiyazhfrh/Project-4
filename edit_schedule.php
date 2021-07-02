<?php
include "koneksi.php";
session_start();
if (!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<html>
    <head>
        <style>
            .cod{
    padding: 4px;
    opacity: 80%;
    width: 100%;
    height: 40px;
    background-color: #f4cba7;
    border-radius: 10px;
    color: white;
    font-size: 16px;
	font-family: 'Poppins', sans-serif;
}
        </style>
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
                        <?php
                            $id = isset($_GET['id'])? $_GET['id']:'';

                            $query = mysqli_query($connect, "SELECT * FROM tbl_time WHERE time_id = '$id'");
                            $time = mysqli_fetch_array($query);

                        ?>
                        <input type="text" name="code1" class="cod" value="<?php echo $time['code'];?>"><b>
                    <div class="input-1">
                        <h2>Day</h2>
                        <select name="day" class="day" value ="<?php echo $time['day_time'];?>">
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                    </div>
                    <div class="input-1">
                        <h2>Time</h2>
                        <input type="time" name="start" class="time" value="<?php echo $time['start_time'];?>"><b> - </b> <input type="time" name="end" class="time" value="<?php echo $time['end_time'];?>">
                    </div>
                    <input type="submit" class="btn" value="Save">
                </form>
            </div>
        </div>
    </body>