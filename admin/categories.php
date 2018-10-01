<?php
include_once 'blocks/auth.php';
include 'blocks/header.php';
include_once 'blocks/bd.php';
include_once 'blocks/lib.php';
?>
    <div class="add_cat">
        <div class="add_cat_1">
            &nbsp;      <h3>Категории</h3>
            <?php
            getMenu()
            ?>
            <p><a href="index.php">Перейти на главную страницу админ зоны</a></p>
    </div>
<?
require 'blocks/footer.php';
?>