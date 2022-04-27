<?php
    include('../db/db.php');  
    if($_POST['del'] != '') {  
        $del = $_POST['del'];
        $sel_for_del =  "SELECT * FROM directorynumbers WHERE id='".$del."'";
        $result = mysqli_query($link, $sel_for_del);
        if(mysqli_num_rows($result) != 0) {
            while ($row = mysqli_fetch_array($result)) {
                $del = "DELETE FROM directorynumbers WHERE id='".$del."'";
                mysqli_query($link, $del);
            }
        } else {
            exit('error');
        }
    } else {
        exit('error');
    } ?>