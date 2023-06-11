<?php
require('functions.php');
$name = 'Home';

//cari siswa berdasarkan keyword, ketika tombol diketikk
if (isset($_GET['search'])) {

    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM mahasiswa
                        WHERE 
                        nama LIKE '%$keyword%' OR
                        jurusan LIKE '%$keyword%' OR
                        email LIKE '%$keyword%'
                        ";

    $students = query($query);
} else {
    $students = query("SELECT * FROM mahasiswa");
}








// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/index.view.php');
