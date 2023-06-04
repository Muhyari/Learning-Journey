<?php

class Siswa {
    public $nama; 

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function fullname() {
        return "Nama Siswa : " . $this->nama; 
    }

}

$siswaBaru = new Siswa("zenn");
echo $siswaBaru->fullname();



