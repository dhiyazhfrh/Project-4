<?php
    include "koneksi.php";
    $id = $_POST['id'];
    $name = $_POST['fullname'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $class = $_POST['cl'];

    $query = mysqli_query($connect, 
        "UPDATE student
        SET fullname = '$name', gender = '$gender', dob = '$date', detail_id = '$class'
        WHERE student_id = '$id'"
        );

        if($query){
            header('location:View_student_admin.php');
        }
?>