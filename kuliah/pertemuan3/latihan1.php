<?php
// Pengulangan While
// 1. Inisialisasi / Nilai Awal
// 2. Kondisi Terminasi / Kapan pengulangannya berhenti
// 3. Increment / Decrement
$nilai_awal = 1; // Inisialisai

while ($nilai_awal <= 10) { // kondisi terminasi
    echo  "Hello World $nilai_awal  x<br>";

    $nilai_awal += 1;
}
echo "<hr>";
// for
for ($nilai_awal = 1; $nilai_awal <= 10; $nilai_awal++) {
    echo "Hello world $nilai_awal x<br>";
}
