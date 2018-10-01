<?php
include_once 'blocks/bd.php';

    if (isset($_GET['id_good'])){
        $id_good = $_GET['id_good'];
        $sql_delete = "DELETE FROM goods WHERE id_good = '$id_good'";
        $query_delete = mysqli_query($link,$sql_delete) or die("Какая то ошибка");

        if ($query_delete)echo "Запрос в базе данных на удаление товара прошел. '<h4>Вернитесь на <a href=\"delete_goods.php\">предыдущую страницу</a></h4>'";
    }