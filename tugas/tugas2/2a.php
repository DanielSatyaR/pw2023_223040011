 <?php
    $depan = "Daniel";
    $belakang = "Ramadhan";
    for ($angka = 1; $angka <= 100; $angka++) {
        if ($angka % 5 == 0 && $angka % 3 == 0) {
            echo $depan . $belakang . '<br>';
        } elseif ($angka % 5 == 0) {
            echo $belakang . '<br>';
        } elseif ($angka % 3 == 0) {
            echo $depan . '<br>';
        } else {
            echo $angka . '<br>';
        }
    }
    echo "$angka <br>"
    ?>