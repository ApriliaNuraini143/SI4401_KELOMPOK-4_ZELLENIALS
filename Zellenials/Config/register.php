<?php
    include 'connectdb.php';
    $before = $_SERVER['HTTP_REFERER'];
    $pass = $_POST['pass'];
    if ($pass != $_POST['pass1']) {
        header("location:".$before."?failed=passNotMatch");
        exit;
    }
    $email = $_POST['email'];
    $e = mysqli_query($conect, "SELECT email FROM `User` WHERE email='$email';");
    if (mysqli_num_rows($e)) {
        header("location:".$before."?email=EmailExist");
        exit;
    }
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $s = mysqli_query($conect, "INSERT INTO User VALUES(0,'FALSE','$name','$pass','$email','$phone')");
    if ($s) {
        header("location:".$before."?add=success");
    }else {
        header("location:".$before."?msg=failed");
    }

?>