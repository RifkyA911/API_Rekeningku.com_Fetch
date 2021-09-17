<?php
require 'konek.php';
require 'api-indodax.php';
// var_dump($result, true);
// $no = 0;    // indeks
// foreach ($result as $market => $value) {
//     foreach ($value as $aset => $a) {
foreach ($result as $tickers) {
    foreach ($tickers as $aset => $a) {
        list($coin, $pair) = explode('_', $aset);
        $hasil = insertMarket($aset, $pair);
        if (!$hasil) {
            echo mysqli_error($conn);
            break;
        } else {
            echo "success";
        }
    }
}
