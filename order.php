<?php
include_once 'admin/blocks/bd.php';
require 'blocks/sum.php';
include 'admin/blocks/header.php';
?>
    <form action="orders_save.php" method="post">
        <label for="">Заказчик</label><br>
        <input type="text" name="cust" size="40"><br>
        <label for="">Email заказчика</label><br>
        <input type="email" size="40" name="email"><br>
        <label for="">Телефон для связи</label><br>
        <input type="text" size="40" name="phone"><br>
        <label for="">Адрес доставки</label><br>
        <textarea name="address" id="" cols="40" rows="5"></textarea><br><br>
        <input type="submit"name="submit"value="Оформить заказ">





    </form>



<?
require 'admin/blocks/footer.php';
?>