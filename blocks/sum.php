<?php

$session_id = session_id();

//определение количества товара в корзине
$sql_basket = "SELECT count(*) FROM basket WHERE customer='$session_id'";
$query_basket = mysqli_query($link,$sql_basket) or die("Какая то ошибка");
$row_basket = mysqli_fetch_row($query_basket);
echo $count = $row_basket[0];
//определяем сумму товаров
$sql_sum = "SELECT goods.price_good FROM basket,goods WHERE basket.customer = '$session_id' AND basket.id_good=goods.id_good ";
$query_sum = mysqli_query($link,$sql_sum) or die("Какая то ошибка");
$sum = 0;
while ($row_sum = mysqli_fetch_assoc($query_sum)){
    $sum += $row_sum['price_good'];


}

