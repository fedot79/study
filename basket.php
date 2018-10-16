<?php
session_start();
$session_id = session_id();
include_once 'admin/blocks/bd.php';
include 'admin/blocks/header.php';?>


<?php require 'blocks/sum.php';?>
<div><!--Корзина-->
    <h4>Товаров в корзине: <span style="color:red;"><?=$count ?></span> На сумму: <span style="color: red"><?=$sum ?></span>руб.</h4>

<!--Корзина--></div>


<?php if ($count = 0 ){
    echo '<h4>Корзина пустая! Перейти в<a href="index.php"> каталог</a> товаров</h4>';
}else{
    ?>
<table width="100%" border="1">
    <tr>
        <td>№ п/п</td>
        <td>Товар</td>
        <td>Цена,руб</td>
        <td>Количество</td>
        <td>Удалить</td>
    </tr>

    <?php
    $sql_basket = "SELECT * FROM goods,basket WHERE customer = '$session_id' AND goods.id_good = basket.id_good";
    $query_basket = mysqli_query($link,$sql_basket) or die("Какая то ошибка");

    $i=0;
    while ($row_from_basket = mysqli_fetch_assoc($query_basket)){
        ?>
        <tr>
            <td><?=++$i?></td>
            <td><?=$row_from_basket['name_good']?></td>
            <td><?=$row_from_basket['price_good']?></td>
            <td><?=$row_from_basket['quantity']?></td>
            <td><a href="delete_from_basket.php?id_basket=<?=$row_from_basket['id_basket']?>">Удалить</a></td>



        </tr>


    <?php
    }
}


?>

</table>
<h4><a href="order.php">Оформить заказ</a></h4>
<h4>Перейти в <a href="index.php">каталог</a></h4>

<?php
require 'admin/blocks/footer.php';
?>
