<?php
session_start();
  include "koneksi.php";
  $email   = $_POST['email'];
  $mysqli  = "INSERT INTO email (email) VALUES ('$email')";
  $result  = mysqli_query($conn, $mysqli);
  if ($result) {
    echo"<script>alert('Terimakasih! kami segera kirimkan konfirmasi ke email anda');
    document.location.href = 'index.html';
    </script>";
  }
  mysqli_close($conn);
?>