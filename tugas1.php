<?php

$kode = 'A';
$harga = 0;

switch ($kode) {
    case 'A':
        $harga = 5000;
        break;
    case 'B':
        $harga = 10000;
        break;
    case 'C':
        $harga = 20000;
        break;
    case 'D':
        $harga = 50000;
        break;
    case 'E':
        $harga = 100000;
        break;
    default:
        echo "Kode barang yang dimasukkan salah!";
        exit;
}

echo "Harga barang tersebut adalah Rp " . $harga;