<?php
include_once 'blocks/bd.php';
include 'blocks/header.php';

?>
<div style="width: 750px;margin: 0 auto;border: black thin solid;">
    <?php
    $sql_order = "SELECT * FROM orders";
    $query_order = mysqli_query($link,$sql_order) or die("Какая то ошибка");
    $num_order = mysqli_num_rows($query_order);
    for ($i = 0;$i<=$num_order;$i++){
        $row_order = mysqli_fetch_assoc($query_order);
       echo $row_order['name_order'].' '.$row_order['email'].' '.$row_order['phone'].' '.$row_order['address'];
        $id_good = $row_order['id_good'];
        $sql_good = "SELECT * FROM goods WHERE id_good = '$id_good'";
        $query_good = mysqli_query($link,$sql_good) or die("Какая то ошибка");
        while ($row_good = mysqli_fetch_assoc($query_good)){
            echo $row_good['name_good']."<br/>";
        }

    }


    ?>


</div>


<?php
require 'blocks/footer.php';
?>