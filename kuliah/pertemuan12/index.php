<?php
require('functions.php');
$name = 'Home';


$students = Query("SELECT * FROM mahasiswa");




require('views/index.view.php');
