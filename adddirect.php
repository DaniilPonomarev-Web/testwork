<?php
    global $link;
    /*$fio = $_POST["fio"];
    $tel = $_POST["telephone"];
    $who = $_POST["who"];
    $sql = "INSERT INTO `directorynumbers`(`FIO`, `telephone`, `who`) VALUES ($fio,$tel,$who)";
    $result = mysqli_query($link, $sql);
    $directs = mysqli_fetch_all($result, MYSQLI_ASSOC);    
    if ($sql) {
        echo "<p>Категория успешно добавлена в базу.</p>";
    } else {
        echo "<p>Произошла ошибка.</p>";
    }*/

 
    $result = array(
    	'name' => $_POST["fio"],
    	'phonenumber' => $_POST["telephone"]
    ); 

    // Переводим массив в JSON
    return json_encode($result); 
    
/*
    $sql = "SELECT `id`, `FIO`, `telephone`, `who` FROM `directorynumbers`";
    $result = mysqli_query($link, $sql);
    $directs = mysqli_fetch_all($result, MYSQLI_ASSOC);*/
?>
