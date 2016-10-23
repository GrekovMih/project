<?php


$host = 'localhost'; // адрес сервера
$database = 'burgers'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль

$link = mysqli_connect($host, $user, $password, $database)
or die("������ " . mysqli_error($link));
mysqli_set_charset($link, "utf8");


?>