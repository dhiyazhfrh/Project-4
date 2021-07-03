<?php
    include "koneksi.php";

    $class = $_POST['class'];
    $grade = $_POST['grade'];
    $room = $_POST['room_id'];
    $time = $_POST['time_id'];

    $query =mysqli_query($connect, "INSERT INTO class (class_id, room_id, time_id) VALUES ('', '$room', '$time') ");
    if ($query){
        $id = mysqli_insert_id($connect);
        $query2 = mysqli_query($connect, "INSERT INTO class_detail (detail_id, class_name, grade, class_id, room_id, time_id) VALUES('', '$class', '$grade', '$id', '$room', '$time')");
        if($query2){
            header('location:View_class_admin.php');
        }
    }