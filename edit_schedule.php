<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Schedule</title>
        <link rel="stylesheet" type="text/css" href="edit_schedule.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="container">
            <div class="input">
                <a href="View_schedule_admin.php"> < Back</a>
                <h5>Edit Schedule</h5>
                <?php
                
                    $id = isset($_GET['time_id'])? $_GET['time_id']:'';

                    $query = mysqli_query($connect, "SELECT * FROM tbl_time WHERE time_id = '$id'");
                    $time = mysqli_fetch_array($query);

                ?>
                
                <form action="Input_schedule_process.php" method="POST">
                <table class="input-1">
                    <tr>
                        <td><h2>Code</h2></td>
                        <td>
                            <input type="text" name="code1" class="code" value="<?php echo $time['code']; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td><h2>Day</h2></td>
                        <td>
                        <select name="day" class="day" value ="<?php echo $time['day_time'];?>">
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                        </td>
                    </tr>

                    <tr>
                        <td><h2>Time</h2></td>
                        <td>
                        <input type="time" name="start" class="time" value="<?php echo $time['start_time'];?>"><b> - </b> <input type="time" name="end" class="time" value="<?php echo $time['end_time'];?>">
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