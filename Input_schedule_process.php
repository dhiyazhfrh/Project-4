<?php
 include "koneksi.php";

 $code = $_POST['code1'];
 $day = $_POST['day'];
 $time1 = $_POST['start'];
 $time2 = $_POST['end'];

 if (empty($code)){
        echo "<script>alert('code cannot be empty')</script>";
        header('location:input_schedule.php');
 }else if(empty($time1)){
    echo "<script>alert('start time cannot be empty')</script>";
    header('location:input_schedule.php');
 }else if(empty($time2)){
    echo "<script>alert('end time cannot be empty')</script>";
    header('location:input_schedule.php');
 }else{
    $query = mysqli_query($connect, "INSERT INTO tbl_time (code, day_time, start_time, end_time) VALUES('$code', '$day', '$time1', '$time2')");
    header('location:View_schedule_admin.php');
 }
 