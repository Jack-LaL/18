<?php

$i = $_SERVER['REMOTE_ADDR'];

$file = "i.txt";
$text = file_get_contents($file);
$text .= $i . "\n";
file_put_contents($file, $text);

?>
