<?php
 include "koneksi.php";

 $name = $_POST['room_name'];
 $cap = $_POST['room_cap'];

 if (empty($name)){
     echo "<script>alert('Room name cannot be empty !')<?script>";
     echo "<meta http-equiv='refresh' content='0 url=Input_room.php'>";
 }else if (empty($cap)){
    echo "<script>alert('Room capacity cannot be empty !')<?script>";
    echo "<meta http-equiv='refresh' content='0 url=Input_room.php'>";
 }else{
     $query = mysqli_query($connect, "INSERT INTO room (room_name, capacity) VALUES('$name','$cap')");
        echo "<script>alert('Success adding new room !')</script>";
        header('location:View_room_admin.php');
    
}
?>