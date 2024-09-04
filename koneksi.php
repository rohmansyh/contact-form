<?php
// Konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_form";

$koneksi = mysqli_connect("localhost","root","","contact_form");

// cek koneksi
if (!$koneksi){
  die("Error koneksi: " . mysqli_connect_errno());
}
?>