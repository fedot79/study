<?php
session_start();
$session_id = session_id();
include_once 'admin/blocks/bd.php';
if (isset($_POST)){
    $cust = $_POST['cust'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    if (($cust == '')|| ($email=='')|| ($phone =='')||($address==""))  die('<h4>Вы заполнили не все поля. Вернитесь на <a href="order.php">предыдущую</a> страницу</h4>');

    $cust =  trim( strip_tags($cust));
    $email =  trim( strip_tags($email));
    $phone =  trim( strip_tags($phone));
    $address =  trim( strip_tags($address));


    $sql_from_basket = "SELECT * FROM basket WHERE customer = '$session_id'";
    $query_from_basket = mysqli_query($link,$sql_from_basket) or die("Какая то ошибка");

    while ($row_from_basket = mysqli_fetch_assoc($query_from_basket)){

        $customer = $row_from_basket['customer'];
        $id_good = $row_from_basket['id_good'];
        $quantity =$row_from_basket['quantity'];
        $datetime = $row_from_basket['datetime'];

        $sql_order = "INSERT INTO orders (name_order,email,phone,address,customer,id_good,quantity,tetime) VALUES ('$cust','$email','$phone','$address','$customer',$id_good,$quantity,$datetime)";
        mysqli_query($link,$sql_order) or die(mysqli_error($link));
    }

    $sql_del_basket = "DELETE FROM basket WHERE customer = '$session_id'";
    $query_del_basket = mysqli_query($link,$sql_del_basket) or die(mysqli_error($link));
    if ($query_del_basket) echo '<h4>Спасибо за оформление заказа. Перейти в<a href="index.php"> каталог.</a></h4>';

}
?>


