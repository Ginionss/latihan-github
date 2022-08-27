<?php
include "koneksi.php";
$nis = $_POST["nis"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];

$sql = "INSERT INTO siswa (nis,nama,alamat) VALUE ('$nis', '$nama','$alamat')";
$hasil = mysqli_query($koneksi, $sql);
//header("index.php");
