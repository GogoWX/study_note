<?php
header('Content-Type: text/event-stream');
header('Catch-control: no-catch');
header('Connection: keep-alive');
$time = date('r');
echo "data: The server time is: {$time}\n\n";
flush();
?>