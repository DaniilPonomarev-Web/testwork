<?php
    include('../db/db.php'); 
    $id = $_POST["id"];   
    $fio = $_POST["fio"];
    $tel = $_POST["telephone"];
    $who = $_POST["who"];
  
    $update = "UPDATE `directorynumbers` SET `FIO`='$fio',`telephone`='$tel',`who`='$who' WHERE `id` = '$id'";
    mysqli_query($link, $update);
    echo "ok";
?>
