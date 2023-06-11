<?php

require('../function.php');

//ambil data di URL
$id = $_GET['id'];

//query data berita berdasarkan id
$dbedukasi = query("SELECT * FROM db_edukasi WHERE id = $id")[0];


//apakah tombol submit sudah ditekan atau belum
if (isset($_POST['publish'])) {

    //cek apakah data berhasil diubah atau tidak
    if (editArticle($_POST) > 0) {
        echo "
        <script>
          alert('Data berhasil diubah!');
          document.location.href = '../article.php';
        </script>
      ";
    } else {
        echo "
        <script>
          alert('Data gagal diubah!');
        </script>
      ";
    }
}

require('../views/update.view.php');
