<?php
require_once 'bd.php';

$avtor = $_POST["A"];
$ocenka = $_POST["B"];
$email = $_POST["D"];
$text = $_POST["text"];
$cafe_id = $_POST["cafe_id"];


echo $text"; 
         $link = mysqli_connect($host, $user, $password, $database)     or die("Ошибка " . mysqli_error($link));

        mysqli_set_charset($link, "utf8");
       $query2 = "INSERT INTO comments
        VALUES('', '$text', '$avtor', '$email', '$ocenka', '$cafe_id')";

         $result2 = MYSQLI_QUERY($link,$query2);




?>