<?php
include('koneksi.php'); // Mengkoneksikan dengan database
$id = $_POST['id'];
// Karena form menggunakan method post kita gunakan $_POST
$nim = $_POST['NIM'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['JK'];
$hobby = $_POST['hobby'];
$noHP = $_POST['noHP']; // Index didalamnya sesuai dengan input name yang ada diform

$update = mysqli_query($connect,"UPDATE mahasiswa SET NIM='$nim', nama='$nama',
alamat='$alamat', JK='$jenis_kelamin', hobby='$hobby', noHP='$noHP' WHERE id='$id' "); //menggunakan kondisi where untuk menyimpan dengan data spesifik
if($update)
 header('Location:list.php'); // Jika berhasil akan di arahkan ke halamanlist.php
else
 echo 'Input data gagal'; // Jika gagal akan keluar pesan tersebut
?>