<?php
include_once 'blocks/auth.php';
include 'blocks/header.php';
include_once 'blocks/bd.php';
?>
<div class="add_cat">
    <div class="add_cat_1">
        &nbsp;      <h3>Удалить выбраную категорию</h3>
        <?php
        $sql_cat = "SELECT * FROM categories ORDER BY id_cat ASC ";
        $query_cat = mysqli_query($link,$sql_cat) or die("Какая то ошибка");
        while ($row_cat = mysqli_fetch_assoc($query_cat)){
            ?>
            <p><a href="?id_cat=<?=$row_cat['id_cat']?>"><?=$row_cat['name_cat'];?></a></p>
            <?php
        }
        ?>
    </div>
    <div class="input_cat">
        <?php
        if (isset($_GET['id_cat'])){
            $id_cat = $_GET['id_cat'];
           //Проверяем наличие товаров в категории
            $sql_cat = "SELECT id_good FROM goods WHERE id_cat = '$id_cat' ";
            $query_cat = mysqli_query($link,$sql_cat) or die("Какая то ошибка");
            $number_cat = mysqli_num_rows($query_cat);
            if ($number_cat>0) die('<h4>В категории есть товары. Удалите сначала их.</h4>');
                $sql_delete = "DELETE FROM categories WHERE id_cat = '$id_cat'";
                 $query_delete = mysqli_query($link,$sql_delete) or die("Какая то ошибка");
                    if ($query_delete) {echo "Категория удалена.";}else {echo "Запрос на удаление не прошел.";}
        };
        ?>
        <p><a href="index.php">Перейти на главную страницу админ зоны</a></p>
    </div>
</div>
<?
require 'blocks/footer.php';
?>
