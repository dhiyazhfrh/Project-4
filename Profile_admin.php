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
        <a href="Edit_profile_admin.php">
            <input type="button" class="btn" value="Edit">
        </a>
        <div class="container">
            <table class="content1">
                <tbody>
                    <tr>
                        <td>
                            Full Name
                            <br>Email
                            <br>Date of Birth
                            <br>Phone Number
                            <br>Position</td>
                        <td>
                            Full Name
                            <br>Email
                            <br>Date of Birth
                            <br>Phone Number
                            <br>Position</td>
                        </div>
                    </tr>
                <tbody>
            </table>
        </div>
    </body>
</html>