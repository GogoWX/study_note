<?php
header('Content-Type: application / x-httpd-php');
header('Catch-control: no-catch');
$time = date('r');
echo 'data: The server time is: {$time}nn';
flush();
?>