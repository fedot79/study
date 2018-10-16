<div class="input_cat">
<?php
        if (!$_GET['id_cat'])echo '<h1>Добро Пожаловать в интернет магазин!</h1>';
                 if ($_GET['id_cat']){
                     $id_cat = $_GET['id_cat'];
                     $sql_cat = "SELECT name_cat FROM categories WHERE id_cat = '$id_cat'";
                     $query_cat = mysqli_query($link,$sql_cat) or die("Какая то ошибка");
                     $row_cat = mysqli_fetch_row($query_cat);
                     echo 'Категория : '.$row_cat[0];
                if (!$_GET['p'])$_GET['p'] = 1;
                $per_page = 5;//количество выводов товара на странице
                $sql_num = "SELECT id_good FROM goods WHERE id_cat ='$id_cat'";
                $query_num = mysqli_query($link,$sql_num) or die("Какая то ошибка");
                //количество выведенных товаров

                $rows = mysqli_num_rows($query_num);
                //делим количество товаров и округляем в большую сторону
                $pages = ceil($rows/$per_page);
                $sql_good = "SELECT * FROM goods WHERE id_cat = '$id_cat' ORDER BY id_good LIMIT ".$_GET['p'].",".$per_page;
                $query_good = mysqli_query($link,$sql_good) or die("Какая то ошибка");
                echo '<table width="100%" style="padding-top: 20px">';
                while ($row_good = mysqli_fetch_assoc($query_good)){
                    ?>
                <tr><td><?=$row_good['name_good'];?></td><td><?=$row_good['price_good']?> руб.</td><td><a href="../add_basket.php?id_good=<?= $row_good['id_good']?>&id_cat=<?=$id_cat?>&p=<?=$_GET['p']?>">в корзину</a></td></tr>
                    <?php
                }
                echo '</table>';
                echo '| ';
                for ($i=0;$i<$pages;$i++){
                    echo '<a href="?id_cat='.$id_cat.'&p='.($i*$per_page).'">'.($i+1).' </a>| ';
                }

                 }
  ?>

</div>
