<?php
    include "koneksi.php";
    $id = $_GET['id'];

    $query = mysqli_query($connect, "DELETE FROM user WHERE id = '$id'");
    if($query){
        header('location:View_manage_admin.php');
    }

?>