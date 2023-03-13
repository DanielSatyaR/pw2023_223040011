<?php
$binatang = ['🐎', '🦍', '🦀', '🐻', '🐲'];
$makanan = ['🍟', '🍿', '🧂', '🥞', '🍳'];

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebun binatang </title>
</head>

<body>
    <h2>Daftar binatang</h2>
    <ul>
        <?php for ($i = 0; $i < count($binatang); $i++) { ?>
            <li><?= $binatang[$i]; ?></li>
        <?php } ?>
    </ul>
    <h2>Daftar makanan</h2>
    <ul>
        <?php for ($i = 0; $i < 5; $i++) { ?>
            <li><?= $makanan[$i]; ?></li>
        <?php } ?>
    </ul>
    <hr>

    <h2>Daftar binatang</h2>
    <ol>
        <?php foreach ($binatang as $b) { ?>
            <li><?= $b; ?></li>
        <?php } ?>
    </ol>

    <h2>Daftar makanan</h2>
    <ol>
        <?php foreach ($makanan as $b) { ?>
            <li><?= $b; ?></li>
        <?php } ?>
    </ol>
</body>

</html>