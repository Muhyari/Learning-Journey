<?php 

include("connection.php");

$id = $_GET["id"];

$delete = mysqli_query($conn, "DELETE FROM karyawan WHERE id='$id'");

if(!$delete){
    echo "Gagal menghapus data";
} else {
    header("Location: index.php");
}