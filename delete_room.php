<?php
include "koneksi.php";
$room_id = isset($_GET['id'])? $_GET['id']:'';

$query = mysqli_query($connect, "DELETE FROM room WHERE id = '$room_id'");
if ($query){
    header('location:View_room_admin.php');
    echo "<script>alert('Room Deleted')</script>";
}

?>