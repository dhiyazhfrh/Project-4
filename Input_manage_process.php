<?php
    include "koneksi.php";

    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $post = $_POST['level'];

    $query = mysqli_query($connect, "INSERT INTO user(username, fullname, email, phone, pass, authority) VALUES ('$username', '$name', '$email', '$phone','$pass','$post')");
    if($query){
        header('location:View_manage_admin.php');
    }
?>