<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Room</title>
        <link rel="stylesheet" type="text/css" href="edit_room.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="container">
            <div class="input">
                <a href="View_room_admin.php"> < Back</a>
                <h5>Edit Room</h5>
                <?php
                
                    $id = isset($_GET['time_id'])? $_GET['time_id']:'';

                    $query = mysqli_query($connect, "SELECT * FROM tbl_time WHERE time_id = '$id'");
                    $time = mysqli_fetch_array($query);

                ?>
                
                <form action="Input_room_process.php" method="POST">
                <table class="input-1">
                    <tr>
                        <td><h2>Room</h2></td>
                        <td>
                            <input type="text" name="room" class="room" value="<?php echo $time['code']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td><h2>Capacity</h2></td>
                        <td>
                            <input type="number" name="capacity" class="cap" value="<?php echo $time['code']; ?>">
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