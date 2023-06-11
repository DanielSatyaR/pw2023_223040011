<?php
define('BASE_URL', '/pw2023_223040011/tubes');

function koneksi()
{
    // koneksi ke DB
    $conn = mysqli_connect('localhost', 'root', '', 'edukasi_db') or die('KONEKSI GAGAL');
    return $conn;
}

$conn = koneksi();

function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));


    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//function untuk menambahkan data didalam database
function addArticle($data)
{
    global $conn;

    $judul = htmlspecialchars($data['judul']);
    $deskripsi = htmlspecialchars($data['deskripsi']);

    $gambar = uploadImage();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO db_edukasi (judul, gambar, deskripsi)
              VALUES ('$judul', '$gambar', '$deskripsi')";

    return mysqli_query($conn, $query);
}

function uploadImage()
{
    $imageName = $_FILES['gambar']['name'];
    $imageSize = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>alert('Insert an image!');</script>";
        return false;
    }

    //maksimal image 10mb
    if ($imageSize > 10000000 || $error === 1) {
        echo "<script>alert('Image is too big');</script>";
        return false;
    }

    //cek apakah yang diupload adalah gambar
    if ($error !== 0) {
        echo "<script>alert('Failed to upload an image!');</script>";
        return false;
    }

    //cek ekstensi file
    $validExtention = ['jpg', 'jpeg', 'png'];
    $imageExtention = explode('.', $imageName);
    $imageExtention = strtolower(end($imageExtention));
    if (!in_array($imageExtention, $validExtention)) {
        echo "<script>alert('Not an image!');</script>";
        return false;
    }


    //generate nama baru
    $newImageName = uniqid();
    $newImageName .= '.';
    $newImageName .= $imageExtention;

    //lolos pengecekan, gambar siap diupload
    move_uploaded_file($tmpName, '../img/upload/' . $newImageName);
    return $newImageName;
}

//function edit article

function editArticle($data)
{
    global $conn;

    $id = $data['id'];
    $judul = htmlspecialchars($data['judul']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $gambarLama = htmlspecialchars($data['gambarLama']);

    $gambar = uploadImage();
    if (!$gambar) {
        return false;
    }

    if ($gambar == 'default.jpg') {
        $gambar = $gambarLama;
    }

    $query = "UPDATE db_edukasi SET
                judul = '$judul',
                gambar = '$gambar',
                deskripsi = '$deskripsi'
                WHERE id = $id
                ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function deleteArticle($id)
{
    global $conn;

    //untuk menghapus gambar di folder img/upload
    $dbedukasi = query("SELECT * FROM db_edukasi WHERE id = $id")[0];
    unlink('../img/upload/' . $dbedukasi['gambar']);

    //query untuk menghapus data di database
    mysqli_query($conn, "DELETE FROM db_edukasi WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    die;
    echo "</pre>";
}

function uriIS($uri)
{
    return ($_SERVER["REQUEST_URI"] === BASE_URL) ? 'active' : '';
}
