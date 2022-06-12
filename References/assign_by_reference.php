<?php
$a = 'foo';
$b = &$a;
echo $b; // output foo
echo "<br />";
$a = 'foo A';
echo $b; //output foo A

echo "<br />";

function ubah_array(&$array)
{
    foreach ($array as &$value) {
        $value += 20;
    }
}

$array = [5, 10, 15];

ubah_array($array);
print_r($array); //output [25, 30, 35]
