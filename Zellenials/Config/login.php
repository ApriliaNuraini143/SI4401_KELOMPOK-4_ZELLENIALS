<?php
    session_start();
    include 'connectdb.php';
    $before = $_SERVER['HTTP_REFERER'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $remember = isset($_POST['remember']);

    $data = mysqli_query($conect,"SELECT * FROM user WHERE email='$email' and password='$password'");
    $d = mysqli_fetch_array($data);
    $exist = mysqli_num_rows($data);

    if ($exist > 0) {
        $_SESSION['name'] = $d['nama_user'];

        $_SESSION['email'] = $email;
        $_SESSION['uid'] = $d['id_user'];
        $_SESSION['state'] = "LoggedIn";
        if ($remember) {
            setcookie("email",$email,time()+3600,"/");
            setcookie("pass",$password,time()+3600,"/");
        }else{
            setcookie("email","");
            setcookie("pass","");
        }
        if ($_SESSION['admin']) {
            header("location: ../pages/admin/home.php");
        }else{
            header("location:".$before);
        }
    } else {
        header("location:".$before."?msg=failed");
    }
?>