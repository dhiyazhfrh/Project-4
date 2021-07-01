<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="Input_schedule.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="container">
            <div class="input">
                <a href="View_schedule_admin.php"> < Back</a>
                <h5>New Schedule</h5>
                <form action="#input" name="time" method="post">
                    <div class="input-1">
                        <h2>Day</h2>
                        <input type="text" class="day">
                    </div>
                    <div class="input-1">
                        <h2>Time</h2>
                        <input type="time" class="time"><b> - </b> <input type="time" class="time">
                    </div>
                    <input type="submit" class="btn" value="Save">
                </form>
            </div>
        </div>
    </body>