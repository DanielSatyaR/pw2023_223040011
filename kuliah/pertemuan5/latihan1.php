<?php
//ARRAY
// Membuat ARRAY
$hari = array('senin', 'selasa', 'rabu');
$bulan = ['januari', 'februari', 'maret'];
$myarray = ['Daniel', 18, false];
$binatang = ['🙈', '🦍', '🦀', '🐲', '🐻‍❄️'];


// Mencetak ARRAY
echo $hari[1]; // 1 elemen menggunakan indexnya
echo "<hr>";
var_dump($hari);
echo "<hr>";
print_r($bulan);
echo "<hr>";
var_dump($myarray);
echo "<hr>";

//manipulasi array
//menggunakan index
//menambah elemen di akhir menggunakan index
$hari[] = 'kamis';
$hari[] = "jumat";
print_r($hari);
echo "<hr>";
// menambah elemen di akhir menggunakan array push
array_push($bulan, 'april', 'mei', 'juni');
print_r($bulan);
echo "<hr>";
// menambah elemen di awal  menggunakan array unshift()
array_unshift($binatang, '🐎');
print_r($binatang);
echo "<hr>";
// menghapus elemen di akhir, menggunakan array_pop()
array_pop($hari);
print_r($hari);
echo "<hr>";

// menghapus elemn di awal, menggunakan array_shift)()
array_shift($hari);
print_r($hari);
