<?php
session_start();
include_once 'blocks/bd.php';

if ($_POST){
   $users_login = $_POST['users_login'];
   $users_password = $_POST['users_password'];

    $users_login =  trim( strip_tags($users_login));
    $users_password =  trim( strip_tags($users_password));

    $sql_user = "SELECT COUNT(*) FROM users WHERE users_login = '$users_login' AND user_password = '$users_password'";
    $query_up = mysqli_query($link,$sql_user) or die(mysqli_error($link));

    $num = mysqli_fetch_row($query_up);
    if ($num[0] == 0) header('location:login.php');
    else{
        $_SESSION['users_login'] = $users_login;
        header('location:index.php');
    }


}