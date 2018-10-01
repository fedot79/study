<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вход в административную зону</title>
</head>
<body>
<div style="width: 350px;margin: 0 auto;border: black thick solid;margin-top: 40px">
    <form action="login_save.php" method="post">
        <label for="">Введите логин</label><br>
        <input type="text"name="users_login"><br>
        <label for="">Введите пароль</label><br>
        <input type="password" name="users_password"><br>
        <input type="submit" name="submit" value="Вод в админ зону">

    </form>


</div>

</body>
</html>