<?php
 
$ip = $_SERVER['REMOTE_ADDR']; // Получаем ip
 
file_put_contents($ip, $ip); // записуем ip
 
?>
