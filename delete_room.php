<?php
include "koneksi.php";
$room_id = isset($_GET['id'])? $_GET['id']:'';

$query = mysqli_query($connect, "DELETE FROM room WHERE room_id = '$room_id'");
if ($query){
    header('location:View_room_admin.php');
}

?>