<?php
echo "logical operator <br/>";
$a = true;
$b = true;
if ($a && $b) {
    echo 'True';
} else {
    echo 'False';
}

if ($a || $b) {
    echo "True";
} else {
    echo 'False';
}
// output true karena $a dan $b sama-sama true;

$a = true;
$b = false;
if ($a && $b) {
    echo 'True';
} else {
    echo 'False';
}
// output false karena $b false;

if ($a || $b) {
    echo "True";
} else {
    echo 'False';
}
// output true karena salah satu dari variable true;
