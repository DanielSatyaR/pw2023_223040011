<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
    header('location:login.php');
}

?>

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
                    <li><a href="article.php">Article List</a></li>
                    <li><a href="register.php" class="tbl-biru">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home">
        <img src="../tubes/img/ling6.jpg" />
        <div class="kolom">
            <p class="deskripsi">Lingkungan</p>
            <h2>Lingkungan</h2>
            <p>Marilah kita menjaga lingkungan agar tetap bersih dan enak di pandang.Pendidikan lingkungan adalah upaya untuk meningkatkan kesadaran dan pemahaman individu mengenai isu-isu lingkungan serta mendorong tindakan yang bertanggung jawab terhadap lingkungan. Tujuan utamanya adalah membentuk sikap dan perilaku yang berkelanjutan dan ramah lingkungan.</p>
            <p><a href="school.php" class="tbl-pink">Learn More</a></p>
        </div>
    </section>