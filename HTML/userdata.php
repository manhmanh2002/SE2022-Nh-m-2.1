<?php

@include 'config.php';

session_start();

if (isset($_POST['submit'])) {

    $account = $_POST['account'];

    $password = $_POST['password'];

    $select = " select * from users where account = '$account' and password = '$password'";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        header('location:admin_web.php');
    } else {
        $error[] = 'Incorrect account or password!';
    }
}
?>