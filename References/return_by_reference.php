<?php

function &myFunction()
{
    static $a = 'foo';
    return $a;
}

$bar = &myFunction();
echo myFunction(); //output foo

$bar = "updated";
echo myFunction(); //output updated
