<?php 

include("connection.php");

$nama = $_POST["nama"];
$umur = $_POST["umur"];
$alamat = $_POST["alamat"];
$jenis_kelamin = $_POST["jenis_kelamin"];

$insert = mysqli_query($conn, "INSERT INTO tbl_animeku SET fullname='$fullname', umur='$umur', alamat='$alamat', jenis_kelamin='$jenis_kelamin' ");

if (!$insert) {
    echo "Gagal Menambahkan Data";
} else {
    echo "Berhasil Menambahkan Data";
    header("Location: index.php");
}