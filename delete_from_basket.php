<?php
session_start();
include_once 'admin/blocks/bd.php';
    if (isset($_GET['id_basket'])){
        $id_basket = $_GET['id_basket'];
        $sql_delete = "DELETE FROM basket WHERE id_basket = $id_basket";
        mysqli_query($link,$sql_delete) or die("Какая то ошибка");
        header('Location:basket.php');
    }