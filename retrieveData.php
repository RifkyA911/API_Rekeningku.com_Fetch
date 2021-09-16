<?php
date_default_timezone_set('Asia/Jakarta');
require 'konek.php';
require 'api-indodax.php';

$koin = getAllData('tbl_market');

// var_dump($koin[0]);
$regis = curl("https://indodax.com/api/tickers");
$result = json_decode($regis, true);

foreach ($result as $tickers) {
    foreach ($tickers as $aset => $a) {
        list($coin, $pair) = explode('_', $aset);
        $tgl = date("Y-m-j H:i:s", $a['server_time']);

        foreach ($koin as $key => $v) {
            // var_dump($key);
            // var_dump($v);
            if ($aset == $v['nama_market']) {
                $ambil = retrieveData($v['id'], $a['high'], $a['low'], $a["vol_$coin"], $a["vol_$pair"], $a['last'], $a['buy'], $a['sell'], $tgl);
                // echo "id koin = " . $v['id'] . "; market = " . $v['nama_market'] . "\n";
                if ($ambil) {
                    echo "Berhasil - $tgl";
                } else {
                    echo mysqli_error($conn);
                }
                break;
            }
        }
    }
}
