<?php
include_once 'blocks/auth.php';
include 'blocks/header.php';
include_once 'blocks/bd.php';
?>
    <div class="add_cat">
        <div class="add_cat_1">
             <h3>Выбрать категорию</h3>
            <?php
            $sql_cat = "SELECT * FROM categories ORDER BY id_cat ASC ";
            $query_cat = mysqli_query($link,$sql_cat) or die("Какая то ошибка");
            while ($row_cat = mysqli_fetch_assoc($query_cat)){
                ?>
                <p><a href="add_goods.php?id_cat=<?=$row_cat['id_cat']?>&name_cat=<?=$row_cat['name_cat']?>"><?=$row_cat['name_cat']?></a></p>
                        <?php
            }
            ?>
        </div>
        <div class="input_cat">
            <h4>Выбрать категорию для добавления товаров.</h4>
            <?php
            if (isset($_GET['id_cat'])){
                $id_cat = $_GET['id_cat'];
                $name_cat = $_GET['name_cat'];

            ?>
            <h3 style="color: red"><?= $name_cat;?></h3>
                <h4>Товары в данной категории.</h4>

                <?php
                $sql_good = "SELECT name_good FROM goods WHERE id_cat = '$id_cat' ORDER BY id_good ASC ";
                $query_good = mysqli_query($link,$sql_good) or die("Какая то ошибка");
                while ($row_good = mysqli_fetch_assoc($query_good)){
                    echo "<p>".$row_good['name_good']."</p>";
                }
                ?>




            <form action="add_goods_save.php" method="post">
                <label for="">Ввести данные по товару</label> <br>
                <textarea name="name_good" id="" cols="40" rows="5"></textarea>
                <label for="">Цена товара. Копейки вводите через точку.</label><br>
                <input name="price_good" type="text"><br><br>
                <input name="cat_id" type="hidden" value="<?=$id_cat?>">
                <input name="submit" type="submit" value="Добавить товар">

            </form>
            <?php
            }
            ?>
            <p><a href="index.php">Перейти на главную страницу админ зоны</a></p>
        </div>
    </div>
<?
require 'blocks/footer.php';
?>

