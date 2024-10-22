<?php

include('koneksi.php');

//karena form menggunakan method post kita gunakan $_POST
$nim = $_POST['NIM'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['JK'];
$hobby = $_POST['hobby'];
$noHP = $_POST['noHP'];

$insert = mysqli_query($connect,"INSERT INTO mahasiswa SET NIM='$nim', nama='$nama', alamat='$alamat', JK='$jenis_kelamin', hobby='$hobby', noHP='$noHP' ");

if($insert)
     header('Location:list.php'); //Jika berhasil akan di arahkan ke halamanlist.php
else
    echo 'Input data gagal'; //jika gagal akan keluar pesan tersebut