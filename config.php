<?php
    $dpHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword ='';
    $dbName = 'anodra';
    $ulanish = mysqli_connect($dpHost,$dbUsername,$dbPassword,$dbName);
    if(!$ulanish){
        die("Ma'lumotlar ba'zasi bilan ulanishda xatolik!");
    }
?>