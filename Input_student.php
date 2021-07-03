<?php
include "koneksi.php";
session_start();
if (!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Student</title>
        <link rel="stylesheet" type="text/css" href="Input_student.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="container">
            <div class="input">
                <a href="View_student_admin.php"> < Back</a>
                <h5>New Student</h5>
                <form action="Input_student_process.php" name="time" method="post">
                    <div class="input-1">
                        <h2>Full Name</h2>
                        <input type="text" name="fullname" class="name">
                    </div>
                    <div class="input-1">
                        <h2>Gender</h2>
                        <select name="gender" class="cl">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="input-1">
                        <h2>Date of Birth</h2>
                        <input type="date" name="date" class="dob">
                    </div>
                    <div class="input-1">
                        <h2>Class</h2>
                        <select name="cl" class="cl">
                            <?php
                                $query = mysqli_query($connect, "SELECT * FROM class_detail");
                                $no=0;
                                while ($class = mysqli_fetch_array($query)){
                                $no++;
                            ?>
                            <option value="<?php echo $class['detail_id']; ?>"><?php echo $class['class_name']; ?></option>
                            <?php
                                }
                            ?>
                            </select>
                    </div>
                    <input type="submit" class="btn" value="Save">
                </form>
            </div>
        </div>
    </body>