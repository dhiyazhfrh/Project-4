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
        <link rel="stylesheet" type="text/css" href="View_student_user.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header>
            <img class="logo" src="img/logotxt.png" href="Home_user.php">
            <nav>
                <ul class="nav__links">
                    <li><a href="View_user.php">Class</a></li>
                    <li><a href="View_student_user.php">Student</a><div class="rec"></div></li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </nav>
        </header>
        <div class="title">
            <img class="student" src="img/student.svg">
            <h2>Student</h2>
        </div>
            <div class="container">
            <table class="content-table">
                <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Class</th>
                </tr>
                </thead>
                <?php
                    $query = mysqli_query($connect, "SELECT * FROM student");
                    while ($data = mysqli_fetch_array($query)){
                        $name = $data['fullname'];
                        $gender = $data['gender'];
                        $dob = $data['dob'];
                        $class = $data['detail_id'];
                ?>
                <tbody>
                    <tr>
                      <td><?php echo $name; ?></td>
                      <td><?php echo $gender; ?></td>
                      <td><?php echo $dob; ?></td>
                        <?php
                            $query2 = mysqli_query($connect, "SELECT * FROM class_detail WHERE detail_id = '$class'");
                            $sql = mysqli_fetch_array($query2);
                            
                        ?>
                      <td><?php echo $sql['class_name'];?></td>
                    </tr>
                <tbody>
                <?php
                    }
                ?>
            </table>
        </div>
    </body>
</html>