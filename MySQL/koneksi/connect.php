<?php

$mysqli = new mysqli('localhost', 'root', '', 'belajar');
if (!$mysqli) {
    echo "koneksi mysql gagal";
    die;
}