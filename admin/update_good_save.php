<?php
include_once 'blocks/bd.php';

    if (isset($_POST['id_good'])){
       // print_r($_POST);
        $id_cat = $_POST['id_cat'];
        $name_good = $_POST['name_good'];
        $price_good = $_POST['price_good'];
        $id_good = $_POST['id_good'];

        if (($id_cat=='')|| ($name_good=='')||($price_good=='')) die("Вы не заполнили все поля. '<h4>Вернитесь на <a href=\"update_goods.php\">предыдущую страницу</a></h4>'");

        $name_good =  trim( strip_tags($name_good));

        if (is_numeric($price_good)== false) die("Вы ввели цену в неправильном формате. '<h4>Вернитесь на <a href=\"add_goods.php\">предыдущую страницу</a></h4>'");

    };
    $sql_up = "UPDATE goods SET id_cat ='$id_cat',name_good = '$name_good',price_good = '$price_good' WHERE id_good = '$id_good'";
    $query_up = mysqli_query($link,$sql_up) or die("Какая то ошибка");
    if ($query_up) echo "Запрос в базу данных на обновление товара прошел. '<h4>Вернитесь на <a href=\"add_goods.php\">предыдущую страницу</a></h4>'"
    ?>

