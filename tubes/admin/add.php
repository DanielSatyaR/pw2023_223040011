<?php
require('../function.php');

$query = "SELECT * FROM db_edukasi";

if (isset($_POST['publish'])) {
    if (addArticle($_POST) > 0) {
        echo "
        <script>
          alert('Data berhasil ditambahkan!');
          document.location.href = '../article.php';
        </script>
      ";
    } else {
        echo "
        <script>
          alert('Data gagal ditambahkan!');
        </script>
      ";
    }
}

require('../views/add.view.php');
