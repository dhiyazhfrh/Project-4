<?php
    include "koneksi.php";
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username)){
        echo "<script>alert('Username belum diisi')</script>";
        echo "<meta http-equiv='refresh' content='0 url=Login.php>";
    }else if (empty($password)){
        echo "<script>alert('Password belum diisi')</script>";
        echo "<meta http-equiv='refresh' content='0 url=Login.php'>";
    }else{
        session_start();
        $login = mysqli_query($connect, "SELECT * FROM user WHERE username ='$username' and pass='$password'");
        if (mysqli_num_rows($login)> 0){
            $_SESSION['username'] = $username;
            header("location:index.php");
        }else{
            echo "<script>alert('Username atau Password salah !')</script>";
            echo "<meta http-equiv='refresh' content='0 url=Login.php'>";
        }
    }

?>