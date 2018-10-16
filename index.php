<?php
session_start();
$session_id = session_id();
include 'admin/blocks/header.php';
include_once 'admin/blocks/bd.php';
 require 'blocks/sum.php';?>
?>
    <div class="add_cat">

        <div><!--Корзина-->
            <h4>Товаров в <a href="basket.php">корзине:</a> <span style="color:red;"><?=$count ?></span> На сумму: <span style="color: red"><?=$sum ?></span>руб.</h4>

            <!--Корзина--></div>

        <?php include_once 'blocks/menu.php';
        include_once 'blocks/content.php'

        ?>

    </div>
<?
require 'admin/blocks/footer.php';
?>