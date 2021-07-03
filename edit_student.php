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
        <link rel="stylesheet" type="text/css" href="edit_student.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="container">
            <div class="input">
                <a href="View_student_admin.php"> < Back</a>
                <h5>Edit Student</h5>
                <?php
                
                    $id = $_GET['id'];

                    $query = mysqli_query($connect, "SELECT * FROM student WHERE student_id = '$id'");
                    $data = mysqli_fetch_array($query);

                ?>
                
                <form action="update_student.php" method="POST">
                <table class="input-1">
                    <tr>
                        <td><h2>Full Name</h2></td>
                        <td>
                            <input type="text" name="fullname" class="name" value="<?php echo $data['fullname']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td><h2>Gender</h2></td>
                        <td>
                            <select name="gender" class="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </td>
                    </tr>

                    <td><h2>Date of Birth</h2></td>
                        <td>
                        <input type="date" name="date" class="dob" value="<?php echo $data['dob']; ?>">
                        </td>
                    </tr>

                    <td><h2>Class</h2></td>
                        <td>
                        <select name="cl" class="cl">
                            <?php
                            $query = mysqli_query($connect, "SELECT * FROM class_detail");
                            $no=0;
                            while ($room = mysqli_fetch_array($query)){
                            $no++;
                            ?>
                            <option value="<?php echo $room['detail_id'];?>"><?php echo $room['class_name'];?></option>
                            <?php
                                }
                            ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="id" value="<?php echo $data['student_id']; ?>">
                            <input type="submit" name="submit" value="Update" class="btn">
                        </td>
                    </tr>
                </table>
                </form>
            </div>
        </div>
    </body>