<div class="add_cat_1">
    &nbsp;      <h3>Меню</h3>
    <menu>
        <?php
        $sql_cat = "SELECT * FROM categories ORDER BY id_cat ASC ";
        $query_cat = mysqli_query($link,$sql_cat) or die("Какая то ошибка");
        while ($row_cat = mysqli_fetch_assoc($query_cat)){
            ?>
            <li style="list-style: none"><a style="text-decoration: none" href="?id_cat=<?=$row_cat['id_cat']?>"><?=$row_cat['name_cat']?></a></li>
            <?php

        }
        ?>
    </menu>
</div>
