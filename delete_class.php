<?php
    include "koneksi.php";
    $id = $_GET['id'];

    $query = mysqli_query($connect, "DELETE FROM class_detail WHERE detail_id = '$id'");
    if($query){
        header('location:View_class_admin.php');
    }
?>