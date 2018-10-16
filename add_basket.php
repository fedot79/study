<?php
// запуск сессии
session_start();
include_once 'admin/blocks/bd.php';
if (isset($_GET['id_good'])){
    $id_cat = $_GET['id_cat'];
    $p = $_GET['p'];
    $id_good = $_GET['id_good'];
    $customer = session_id();
    $quantity = 1;
    $datetime = time();
    $sql_add_basket = "INSERT INTO basket (customer,id_good,quantity,datetime) VALUES ('$customer','$id_good',$quantity,$datetime)";
    $query_add_basket = mysqli_query($link,$sql_add_basket) or die("Какая то ошибка");
    header("Location:index.php?id_good=$id_good&id_cat=$id_cat&p=$p");

}