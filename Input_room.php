<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="Input_room.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="container">
            <div class="input">
                <a href="View_room_admin.php"> < Back</a>
                <h5>New Room</h5>
                <form action="#input" name="room" method="post">
                    <div class="input-1">
                        <h2>Room</h2>
                        <input type="text" class="room">
                    </div>
                    <div class="input-1">
                        <h2>Capacity</h2>
                        <input type="number" class="capacity">
                    </div>
                    <input type="submit" class="btn" value="Save">
                </form>
            </div>
        </div>
    </body>