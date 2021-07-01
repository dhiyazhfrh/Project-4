<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="Profile_admin.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header>
            <img class="logo" src="img/logotxt.png" href="Home_admin.php">
            <nav>
                <ul class="nav__links">
                    <li><a href="View_admin.php">Class</a></li>
                    <li><a href="View_student_admin.php">Student</a></li>
                    <li><a href="Profile_admin.php">Profile</a><div class="rec"></div></li>
                    <li><a href="#">Manage</a></li>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </nav>
        </header>
        <div class="title">
            <img class="profile" src="img/profile.svg">
            <h2>Profile</h2>
        </div>
        <div class="container">
            <div class="input">
                <form action="#input" name="schedule" method="post">
                    <div class="input-1">
                        <h2>Full Name</h2>
                        <input type="text" class="full_name">
                    </div>
                    <div class="input-1">
                        <h2>Email</h2>
                        <input type="email" class="mail">
                    </div>
                    <div class="input-1">
                        <h2>Date of Birth</h2>
                        <input type="date" class="dob">
                    </div>
                    <div class="input-1">
                        <h2>Position</h2>
                        <input type="text" class="post">
                    </div>
                    <input type="submit" class="btn" value="Save">
                </form>
            </div>
        </div>
    </body>
</html>