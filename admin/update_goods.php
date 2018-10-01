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


            ?>
            <h4>Выбраная категория. <span style="color: red";><?=$name_cat?></span></h4>
            <h5>Товары из выбранной категории</h5>


            <?php

              $sql_good = "SELECT * FROM goods WHERE id_cat = '$id_cat'";
              $query_good = mysqli_query($link,$sql_good) or die("Какая то ошибка");
                while ($row_good = mysqli_fetch_assoc($query_good)){
                    ?>
                    <p><a href="?id_good=<?=$row_good['id_good']?>"><?=$row_good['name_good'];?></a></p>
                    <?php
                }

            }

            if (isset($_GET['id_good'])){
               $id_good = $_GET['id_good'];
                $sql_good = "SELECT * FROM goods WHERE id_good = '$id_good'";
                $query_good = mysqli_query($link,$sql_good) or die("Какая то ошибка");
                while ($row_good = mysqli_fetch_assoc($query_good)){



            ?>

            <form action="update_good_save.php" method="post">
                <label for="">Изменить категорию. </label> <br>
                <select name="id_cat" id="">
                    <?php
                        $sql_cat = "SELECT * FROM categories";
                        $query_cat = mysqli_query($link,$sql_cat) or die("Какая то ошибка");
                        while ($row_cat = mysqli_fetch_assoc($query_cat)) {
                            if ($row_good['id_cat'] == $row_cat['id_cat']) {
                                ?>

                                <option value="<?= $row_cat['id_cat'] ?>"selected><?= $row_cat['name_cat'] ?></option>
                                <?php
                            } else{
                                ?>

                                <option value="<?= $row_cat['id_cat'] ?>"><?= $row_cat['name_cat'] ?></option>

                                }
                                }
                                <?php

                            }
                        }
                      ?>
                </select><br>
                <label for="">Изменить выбраный товар.</label><br>
                <textarea name="name_good" id="" cols="40" rows="5"><?=$row_good['name_good']?></textarea><br>
                <label for="">Изменить цену. Копейки вводить через точку.</label>
                <input name="price_good" type="text" value="<?=$row_good['price_good']?>">руб.<br>
                <input name="id_good" type="hidden" value="<?=$row_good['id_good'] ?>">

                <input name="submit" type="submit" value="Изменить категорию">

            </form>
                <?php
                }
                }
                ?>
            <p><a href="index.php">Перейти на главную страницу админ зоны</a></p>
        </div>
    </div>
<?
require 'blocks/footer.php';
?>