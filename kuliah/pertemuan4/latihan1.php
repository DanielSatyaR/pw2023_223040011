<?php



function cek_ganjil_genap($angka1)
{
    if ($angka1 % 2 == 1) {
        return "$angka1 adalah bilangan Ganjil";
    } else {
        return "$angka1 adalah bilangan Genap";
    }
}
echo cek_ganjil_genap(10);
echo "<br>";
echo cek_ganjil_genap(5);
echo "<br>";
echo cek_ganjil_genap(100);
