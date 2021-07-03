<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Class</title>
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
                
                    $id = isset($_GET['time_id'])? $_GET['time_id']:'';

                    $query = mysqli_query($connect, "SELECT * FROM tbl_time WHERE time_id = '$id'");
                    $time = mysqli_fetch_array($query);

                ?>
                
                <form action="Input_student_process.php" method="POST">
                <table class="input-1">
                    <tr>
                        <td><h2>Full Name</h2></td>
                        <td>
                            <input type="text" name="name" class="name" value="<?php echo $time['code']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td><h2>Gender</h2></td>
                        <td>
                            <input type="text" name="gender" class="gender" value="<?php echo $time['code']; ?>">
                        </td>
                    </tr>

                    <td><h2>Date of Birth</h2></td>
                        <td>
                        <input type="date" name="dob" class="dob" value="<?php echo $time['code']; ?>">
                        </td>
                    </tr>

                    <td><h2>Class</h2></td>
                        <td>
                        <select name="cl" class="cl">
                            <?php
                            $query = mysqli_query($connect, "SELECT * FROM room");
                            $no=0;
                            while ($room = mysqli_fetch_array($query)){
                            $no++;
                            ?>
                            <option value="<?php echo $room['time_id'];?>"><?php echo $room['code'];?></option>
                            <?php
                                }
                            ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="submit" name="submit" value="Update" class="btn">
                        </td>
                    </tr>
                </table>
                </form>
            </div>
        </div>
    </body>