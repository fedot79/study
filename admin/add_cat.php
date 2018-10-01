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
    </div>
    <div class="input_cat">
        <form action="save_cat.php" method="post">
            <label for="">Новая категория</label> <br>
            <input name="name_cat" type="text" size="40">
            <input name="submit" type="submit" value="Добавить категорию">

        </form>
        <p><a href="index.php">Перейти на главную страницу админ зоны</a></p>
    </div>
</div>
<?
require 'blocks/footer.php';
?>

