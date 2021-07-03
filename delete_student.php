<?php
    include "koneksi.php";
    $id = $_GET['id'];

    $query = mysqli_query($connect, "DELETE FROM student WHERE student_id = '$id'");
    if($query){
        header('location:View_student_admin.php');
    }
?>