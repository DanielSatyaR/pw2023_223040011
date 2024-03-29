<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <title>Form Ubah Artikel</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-5 text-center">Form Ubah Artikel</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $dbedukasi["id"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $dbedukasi["gambar"]; ?>">
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar" required>
            </div>

            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" value="<?= $dbedukasi["judul"]; ?>" name="judul" required>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required><?= $dbedukasi["deskripsi"]; ?></textarea>
            </div>

            <button type="submit" name="publish" class="btn btn-primary">Update Artikel</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>