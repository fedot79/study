<?php
require_once 'blocks/bd.php';
if (isset($_POST)){
  $name_good = $_POST['name_good'];
  $price_good = $_POST['price_good'];
  $cat_id = $_POST['cat_id'];

  if ($name_good==''||$price_good=='')die('<h4>Вы заполнили не все поля. Вернитесь на <a href="add_goods.php">предыдущую страницу</a></h4>');

    $name_good =  trim( strip_tags($name_good));
    if (is_numeric($price_good)== false) die("Вы ввели цену в неправильном формате. '<h4>Вернитесь на <a href=\"add_goods.php\">предыдущую страницу</a></h4>'");

    $sql_good = "INSERT INTO goods(id_cat,name_good,price_good) VALUE ('$cat_id','$name_good','$price_good')";
    $query_good = mysqli_query($link,$sql_good) or die("Ошибка записи");
    if ($query_good) echo "Товар добавлен.'<h4>Вернитесь на <a href=\"add_goods.php\">предыдущую страницу</a></h4>' ";
}

?>

