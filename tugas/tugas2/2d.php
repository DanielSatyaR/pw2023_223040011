<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2D</title>
    <style>
        .wrapper {
            height: 500px;
            width: 500px;
        }

        .grey {
            background-color: grey;
            width: 100px;
            height: 100px;
            display: inline-block;
            margin-top: -5px
        }

        .putih {
            background-color: while;
            width: 100px;
            height: 100px;
            display: inline-block;
            margin-top: -5px;
            border: 1.2px solid;
            box-sizing: border-box;
        }
    </style>
</head>

<body>

    <?php

    echo '<div class= "wrapper">';
    for ($angka = 0; $angka < 25; $angka++) {
        if ($angka % 2 == 0) {
            echo '<div class="grey"></div>';
        } else {
            echo '<div class="putih"></div>';
        }
    }

    ?>

</body>

</html>