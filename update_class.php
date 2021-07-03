<?php
    include "koneksi.php";

    $id = $_POST['id'];
    $class = $_POST['class'];
    $grade = $_POST['grade'];
    $room = $_POST['room'];
    $time = $_POST['time'];

    $query=mysqli_query($connect, "UPDATE class_detail 
    SET class_name = '$class',
    grade = '$grade',
    room_id = '$room',
    time_id = '$time'
    WHERE detail_id = '$id'");
    if($query){
        header('location:View_class_admin.php');
    }
?>