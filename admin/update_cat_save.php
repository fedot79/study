
<?php
include_once 'blocks/bd.php';
if (isset($_POST['id_cat'])){
    $id_cat = $_POST['id_cat'];
    $name_cat = $_POST['name_cat'];

    // делаем запрос безопасным
    $name_cat =  trim( strip_tags($name_cat));

    $sql_cat = "UPDATE categories SET name_cat = '$name_cat' WHERE id_cat = '$id_cat'";
    $query_cat = mysqli_query($link , $sql_cat) or die("Ошибка");
    echo "<h4>Категория перезаписана. Вернуться на <a href='update_cat.php'> предыдущую страницу</a></h4>";
}