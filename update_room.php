<?php
    include "koneksi.php";

    $id = $_POST['id'];
    $room = $_POST['room'];
    $cap = $_POST['capacity'];

    $query = mysqli_query($connect, "UPDATE room
    SET room_name = '$room',
    capacity = '$cap'
    WHERE room_id = '$id'");
        if($query){
            header('location:View_room_admin.php');
        }

?>