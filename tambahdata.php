<?php
// Ambil data dari form
$nama = $_POST['Nama'];
$nim = $_POST['NIM'];
$kelas = $_POST['Kelas'];
$jeniskelamin = $_POST['Jenis Kelamin'];
$email = $_POST['Email'];
$pesan = $_POST['Pesan'];

// Validasi dan sanitasi input
if (empty($nama) || empty($nim) || empty($kelas) || empty($jeniskelamin) || empty($email) || empty($pesan)) {
    echo "Mohon isi semua field!";
    exit;
}

// Sanitasi input untuk menghindari SQL injection
$nama = mysqli_real_escape_string($conn, $nama);
$nim = mysqli_real_escape_string($conn, $nim);
$kelas = mysqli_real_escape_string($conn, $kelas);
$jeniskelamin = mysqli_real_escape_string($conn, $jeniskelamin);
$email = mysqli_real_escape_string($conn, $email);
$pesan = mysqli_real_escape_string($conn, $pesan);

// Simpan data ke database
$sql = "INSERT INTO contact (nama, nim, kelas, jenis kelamin, email, pesan) VALUES ('$nama', '$nim', '$kelas', '$jeniskelamin', '$email', '$pesan')";
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan!";
} else {
    echo "Gagal menyimpan data: " . $conn->error;
}

// Tutup koneksi
$conn->close();
?>