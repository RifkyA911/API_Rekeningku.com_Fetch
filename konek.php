<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$db       = 'koin';

$conn = mysqli_connect($hostname, $username, $password, $db);

function getAllData($tabel, $limit = false)
{
    global $conn;
    if ($limit == false) {
        $query = "SELECT * FROM $tabel";
    } else {
        $query = "SELECT * FROM $tabel LIMIT $limit";
    }
    $hasil = mysqli_query($conn, $query);

    $rows = [];

    while ($row = mysqli_fetch_assoc($hasil)) {
        $rows[] = $row;
    }

    return $rows;
}

function insertMarket($namaMarket, $pair)
{
    global $conn;
    $query = "INSERT INTO tbl_market (nama_market, pair) VALUES ('$namaMarket', '$pair')";
    $hasil = mysqli_query($conn, $query);
    return $hasil;
}

function retrieveData($id_coin, $high, $low, $vol_coin, $vol_pair, $last, $buy, $sell, $time)
{
    global $conn;
    $query = "INSERT INTO tbl_data (id_coin, high, low, vol_coin, vol_pair, last, buy, sell, server_time) 
            VALUES ('$id_coin', '$high', '$low', '$vol_coin', '$vol_pair', '$last', '$buy', '$sell', '$time')";

    $hasil = mysqli_query($conn, $query);
    return $hasil;
}

function getNamaMarket($id_coin)
{
    global $conn;
    $query = "SELECT nama_market FROM tbl_market WHERE id = '$id_coin'";
    $hasil = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($hasil);
    return $row;
}
