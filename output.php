<?php
    $file = "text.txt";
    $current = file_get_contents($file); // открываем файл, присваеваем содержимое current
    echo $current; // выводим содержимое
    
?>
