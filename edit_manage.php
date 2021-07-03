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
        <title>Manage</title>
        <link rel="stylesheet" type="text/css" href="edit_manage.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="container">
            <div class="input">
                <a href="View_manage_admin.php"> < Back</a>
                <h5>Edit User</h5>
                <?php
                
                    $id = isset($_GET['id'])? $_GET['id']:'';

                    $query = mysqli_query($connect, "SELECT * FROM user WHERE id = '$id'");
                    $data = mysqli_fetch_array($query);

                ?>
                
                <form action="update_manage.php" method="POST">
                <table class="input-1">
                    <tr>
                        <td><h2>Username</h2></td>
                        <td>
                            <input type="text" name="username" class="username" value="<?php echo $data['username']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td><h2>Password</h2></td>
                        <td>
                            <input type="text" name="pass" class="fullname" value="<?php echo $data['pass']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td><h2>Full Name</h2></td>
                        <td>
                            <input type="text" name="fullname" class="fullname" value="<?php echo $data['fullname']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td><h2>Email</h2></td>
                        <td>
                            <input type="email" name="email" class="email" value="<?php echo $data['email']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td><h2>Phone Number</h2></td>
                        <td>
                            <input type="tel" name="number" class="phone" value="<?php echo $data['phone']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td><h2>Position</h2></td>
                        <td>
                            <select name="level" class="post">
                                <option value="<?php echo $data['authority'];?>" selected hidden><?php echo $data['authority'];?></option>
                                <option value="admin">Admin</option>
                                <option value="staff">Staff</option>
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