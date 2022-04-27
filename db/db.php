<?php
require_once "db_dost.php";
$link = mysqli_connect($dost['host'], $dost['user'],$dost['password'],$dost['database']) or die("Ошибка подключения к бд" . mysqli_error($link)); // подключаемся к MySQL или, в случаи  ошибки, прекращаем выполнение кода
?>