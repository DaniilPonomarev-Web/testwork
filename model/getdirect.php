<?php
    function get_direct() {
        global $link;
        $sql = "SELECT `id`, `FIO`, `telephone`, `who` FROM `directorynumbers`";
        $result = mysqli_query($link, $sql);
        $directs = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $directs;
    }
    $directorynumbers = get_direct();

    function get_direct_by_id($id) {
        global $link;
        $sql = "SELECT `FIO`, `telephone`, `who` FROM `directorynumbers` where `id` = $id ";
        $result = mysqli_query($link, $sql);
        $direct = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $direct;
    }
   
?>


