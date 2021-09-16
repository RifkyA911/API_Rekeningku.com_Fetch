<?php
date_default_timezone_set('Asia/Jakarta');
require 'konek.php';
require 'api-indodax.php';

function pharseData($ref)
{
    # code...
}
$koin = getAllData('tbl_market');

// var_dump($koin[0]);
foreach ($koin as $key => $v) {
    list($coin, $pair) = explode('_', $v['nama_market']);
    $regis = curl("https://indodax.com/api/" . $v['nama_market'] . "/ticker");
    $result = json_decode($regis, true);
    $tgl = date("Y-m-d H:i:s", $result['ticker']['server_time']);
    // var_dump($result['ticker']);
    // echo $result;
    $ambil = retrieveData($v['id'], $result['ticker']['high'], $result['ticker']['low'], $result['ticker']["vol_$coin"], $result['ticker']["vol_$pair"], $result['ticker']['last'], $result['ticker']['buy'], $result['ticker']['sell'], $tgl);
    if ($ambil) {
        echo "Berhasil " . $v['nama_market'] . "- ";
    } else {
        echo mysqli_error($conn);
    }
    // sleep(5);
}

// foreach ($result as $tickers) {
//     foreach ($tickers as $aset => $a) {
//         $tgl = date("Y-m-j H:s:i", $a['server_time']);
//     }
// }
