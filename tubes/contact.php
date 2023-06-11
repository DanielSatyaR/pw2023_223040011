<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

if (isset($_POST['send'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

    if (mysqli_num_rows($select_message) > 0) {
        $message[] = 'message sent already!';
    } else {
        mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
        $message[] = 'message sent successfully!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="styleF.css">

</head>

<body>

    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>EduLive</a></div>
            <div class="menu">
                <ul>
                    <li><a href="school.php">Home</a></li>
                    <li><a href="school.php">Courses</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="register.php" class="tbl-biru">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="heading">
        <h3>contact us</h3>


        <<section class="contact">

            <div class="row">

                <form action="" method="post">
                    <h3>tell us something!</h3>
                    <input type="text" name="name" required placeholder="enter your name" maxlength="50" class="box">
                    <input type="number" name="number" required placeholder="enter your number" max="9999999999" min="0" class="box" onkeypress="if(this.value.length == 10) return false;">
                    <input type="email" name="email" required placeholder="enter your email" maxlength="50" class="box">
                    <textarea name="msg" placeholder="enter your message" required class="box" cols="30" rows="10" maxlength="500"></textarea>
                    <input type="submit" value="send message" class="btn" name="send">
                </form>


</body>

</html>