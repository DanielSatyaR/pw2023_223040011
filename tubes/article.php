<?php require 'function.php';
$db_edukasi = query("SELECT * FROM db_edukasi"); ?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styleF.css">
</body>

</html>


<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>EduLive</a></div>
            <div class="menu">
                <ul>
                    <li><a href="dashboard.php">dashboard</a></li>
                    <li><a href="#courses">Article List</a></li>
                    <li><a href="register.php" class="tbl-biru">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- content -->
    <div class="section">
        <div class="container">
            <h3 class="col-md-2">Dashboaard</h3>
            <a href="./admin/add.php" class="btn btn-primary">Tambah Artikel</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Judul</th>
                        <th scope="col">File</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($db_edukasi as $dbedukasi) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>
                                <img src="img/upload/<?= $dbedukasi['gambar']; ?>" width="90">
                            </td>
                            <td><?= $dbedukasi['judul']; ?></td>
                            <td><?= $dbedukasi['gambar']; ?></td>
                            <td><?= $dbedukasi['deskripsi']; ?></td>
                            <td>
                                <a href="admin/update.php?id=<?= $dbedukasi['id']; ?>" class="btn btn-warning">ubah</a> |
                                <a href="admin/delete.php?id=<?= $dbedukasi['id']; ?>" onclick="return confirm('yakin?');" class="btn btn-danger">Hapus</a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>


        </div>
    </div>