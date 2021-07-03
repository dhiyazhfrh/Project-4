<?php
    include "koneksi.php";

    $name = $_POST['fullname'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $class = $_POST['cl'];

    $query = mysqli_query($connect, "INSERT INTO student(fullname, gender, dob, detail_id) VALUES('$name', '$gender', '$date', '$class')");
    if($query){
        header('location:View_student_admin.php');
    }


?>