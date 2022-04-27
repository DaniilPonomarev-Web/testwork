<?php
    include('../db/db.php');    
    $fio = $_POST["fio"];
    $tel = $_POST["telephone"];
    $who = $_POST["who"];
    $add = "INSERT INTO `directorynumbers` (`FIO`, `telephone`, `who`) VALUES ( '$fio', '$tel', '$who')";
    mysqli_query($link, $add);
   
    
    $sel = "SELECT  `FIO`, `telephone`, `who` FROM `directorynumbers`";
    $res = mysqli_query($link, $sel);
    $row = mysqli_fetch_row($res);
    $result = array
        (
        'fio' =>$fio, 
        'telephone' => $tel, 
        'who' => $who, 
        );
    echo json_encode($result);
    mysqli_free_result($res);
?>
