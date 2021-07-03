<?php
    include "koneksi.php";

    $id = $_POST['id'];
    $name = $_POST['username'];
    $pass = $_POST['pass'];
    $full = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $level = $_POST['level'];

    $query = mysqli_query($connect, "UPDATE user SET
    username = '$name',
    fullname = '$full',
    email = '$email',
    phone = '$phone',
    pass = '$pass',
    authority = '$level'
    WHERE id = '$id'
    ");
    if ($query){
        header('location:View_manage_admin.php');
    }
?>