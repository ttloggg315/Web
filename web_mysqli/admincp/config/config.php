<?php
    $mysqli = new mysqli("localhost","root","","web_mysqli");
    // ktra
    if($mysqli->connect_errno){
        echo "Connect error" . $mysqli->connect_error;
        exit();
    }
?>