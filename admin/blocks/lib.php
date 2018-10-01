<?php
include_once 'bd.php';
    function getMenu(){
        $link = mysqli_connect('study','root','','myShop1') or die("Подключение к серверу не удалось");
        $sql_cat = "SELECT name_cat FROM categories ORDER BY id_cat";
        $query_cat = mysqli_query($link,$sql_cat) or die("Какая то ошибка");
        while ($row_cat = mysqli_fetch_assoc($query_cat)){
            echo "<p>".$row_cat['name_cat']."</p>";
        }
        return 0;
    }