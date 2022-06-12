<?php
$dir = `ls`;
$dir = explode(PHP_EOL, $dir);
echo '<ul>';
foreach ($dir as $key => $value) {
    echo '<li><a href="References/'.$value.'">'.$value.'</a></li>';
}
echo "</ul>";
