<?php
    include "koneksi.php";
    session_start();
    if (!isset($_SESSION['username'])){
        header ("location:Login.php");
    }
?>

<html>
    <head>
        <title></title>
    </head>

    <body>
    <?php
        $username = $_SESSION['username'];
        $query = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username'");
        $p = mysqli_fetch_array($query);
        $level = $p['level'];
        if($level=='admin'){
            echo "<meta http-equiv='refresh' content='0 url=Home_admin.php'>";
        }else if($level=='staff'){
            echo "<meta http-equiv='refresh' content='0 url=Home.php'>";
        }
    ?>
    </body>

</html>
