<?php 

include("connection.php");


$id = $_POST['id'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$update = mysqli_query($conn,"UPDATE karyawan SET nama='$nama', umur='$umur', alamat='$alamat', jenis_kelamin='$jenis_kelamin' WHERE id='$id' ");

if(!$update){
    echo "Gagal Update";
} else {
    echo "Berhasil Update";
    header("Location: index.php");
}