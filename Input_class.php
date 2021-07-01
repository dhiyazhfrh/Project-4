<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="Input_class.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="container">
            <div class="input">
                <a href="View_class_admin.php"> < Back</a>
                <h5>New Class</h5>
                <form action="#input" name="schedule" method="post">
                    <div class="input-1">
                        <h2>Class Name</h2>
                        <input type="text" class="class_name">
                    </div>
                    <div class="input-1">
                        <h2>Grade</h2>
                        <input type="text" class="grade">
                    </div>
                    <div class="input-1">
                        <h2>Room</h2>
                        <select name="room" class="room">
                            <option value="">-- Choose room --</option></select>
                    </div>
                    <div class="input-1">
                        <h2>Schedule</h2>
                        <select name="time" class="time">
                            <option value="">-- Choose time --</option></select>
                    </div>
                    <input type="submit" class="btn" value="Save">
                </form>
            </div>
        </div>
    </body>