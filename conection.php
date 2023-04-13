<?php
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'user_level';

  $conn = mysqli_connect($host, $user, '', $db);
  
  if($conn){
    // echo 'Koneksi berhasil';
  }
  mysqli_select_db($conn, $db);
?>
