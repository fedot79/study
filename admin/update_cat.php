<?php
include_once 'blocks/auth.php';
include 'blocks/header.php';
include_once 'blocks/bd.php';
?>
<div class="add_cat">
    <div class="add_cat_1">
&nbsp;      <h3>Категории</h3>
        <?php
        $sql_cat = "SELECT * FROM categories ORDER BY id_cat ASC ";
        $query_cat = mysqli_query($link,$sql_cat) or die("Какая то ошибка");
        while ($row_cat = mysqli_fetch_assoc($query_cat)){
            ?>
            <p><a href="?id_cat=<?=$row_cat['id_cat']?>&name_cat=<?=$row_cat['name_cat']?>"><?=$row_cat['name_cat'];?></a></p>
            <?php
        }
        ?>
    </div>
    <div class="input_cat">
        <?php
        if (isset($_GET['id_cat'])){
          $id_cat = $_GET['id_cat'];
          $name_cat = $_GET['name_cat'];
        }
        ?>
        <form action="update_cat_save.php" method="post">
            <label for="">Выбраная категория</label> <br>
            <input name="name_cat" type="text" size="40" value="<?=$name_cat ?>"><br><br>
            <input name="id_cat" type="hidden" value="<?=$id_cat ?>">

            <input name="submit" type="submit" value="Изменить категорию">

        </form>
        <p><a href="index.php">Перейти на главную страницу админ зоны</a></p>
    </div>
</div>
<?
require 'blocks/footer.php';
?>

