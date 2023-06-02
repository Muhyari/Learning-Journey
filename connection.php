<?php 

$conn = mysqli_connect("localhost", "root", "", "latihan");

if(!$conn){
    exit("Gagal koneksi ke database ...");
}
