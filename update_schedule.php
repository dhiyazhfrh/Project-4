<?php
    include "koneksi.php";

    $id = $_POST['id'];
    $code = $_POST['code1'];
    $day = $_POST['day'];
    $start = $_POST['start'];
    $end = $_POST['end'];

    $query = mysqli_query($connect, "UPDATE tbl_time
    SET code = '$code',
        day_time = '$day',
        start_time = '$start',
        end_time = '$end'
        WHERE time_id = '$id'");

        if($query){
            header('location:View_schedule_admin.php');
        }

?>