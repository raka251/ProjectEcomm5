<?php

$conn = mysqli_connect('localhost', 'root', '', 'tikbatik');

if (!$conn) {
    die ("Koneksi gagal. " . mysqli_connect_error()); // close koneksi
}