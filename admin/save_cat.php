<?php
include_once 'blocks/bd.php';
//проверяем наличие  массива post
if (isset($_POST['name_cat'])){
    $name_cat = $_POST['name_cat'];
}
if ($name_cat=='')die('Вы не ввели в поле данные.<a href="add_cat.php">  Вернуться на предыдущую страницу</a> ');

// делаем запрос к бд безопасным
// обрезаем тэги
$name_cat=strip_tags($name_cat);
// обрезаем пробелы
$name_cat=trim($name_cat);
// экранируем спецсимволы



$sql_cat = "INSERT INTO categories(name_cat)VALUES ('$name_cat')";
$query_cat = mysqli_query($link,$sql_cat) or die("Какая то ошибка");
if (isset($query_cat)){
    echo '<h4>Запрос в базу данных на добавление категории прошел. <a href="add_cat.php">  Вернуться на предыдущую страницу</a> </h4>';
}else echo "Запрос не прошел";