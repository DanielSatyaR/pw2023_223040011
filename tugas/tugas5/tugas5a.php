<?php

$mahasiswa = [
    [
        "nrp" => " 223040011 ",
        "nama" => " DANIEL SATYA RAMADHAN",
        "email" => " daniel.223040011@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => "  "
    ],
    [
        "nrp" => " 223040008 ",
        "nama" => " FARID MAULANA SUHERMAN ",
        "email" => " farid.223040008@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => "  "
    ],
    [
        "nrp" => " 223040028 ",
        "nama" => " AKBAR NUR IMAN ",
        "email" => " akbar223040028@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => " "
    ],
    [
        "nrp" => " 223040095 ",
        "nama" => " RAFI IKHSANUL HAKIM ",
        "email" => " rafi.223040095@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => " "
    ],
    [
        "nrp" => " 223040004 ",
        "nama" => " MUHAMMAD ALFA RIZKY ",
        "email" => " alfa.223040004@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => "  "
    ],
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li> <img src="<?= $mhs["gambar"]; ?> "> </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>

    <?php endforeach; ?>

</body>

</html>