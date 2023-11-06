<?php

$id = '12345';

$base64 = base64_encode($id);
echo $base64.PHP_EOL;

$decode64 = base64_decode($base64);
echo $decode64;

echo PHP_EOL;

