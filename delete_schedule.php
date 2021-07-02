<?php
 include "koneksi.php";
 $time_id = $_GET['id'];

 $query = mysqli_query($connect, "DELETE FROM tbl_time WHERE time_id = '$time_id'");
 if ($query){
     header('location:View_schedule_admin.php');
 }

?>