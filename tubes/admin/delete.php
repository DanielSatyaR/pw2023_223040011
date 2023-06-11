<?php
require('../function.php');

$id = $_GET['id'];

if (deleteArticle($id) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = '../article.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = '../article.php';
        </script>
    ";
}
