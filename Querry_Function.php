<?php
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

function insert_Market($namaMarket, $coin_code, $st)
{
    global $conn;
    $query = "INSERT INTO markets (Nama, Coin_Code, st) VALUES ('$namaMarket', '$coin_code', '$st')";
    $hasil = mysqli_query($conn, $query);
    return $hasil;
}

function Push_Data($Code_Coin, $Close_Price, $Last_Transaction, $High, $Low, $Open, $Volume, $Change_Percentage, $Market_Cap)
{
    global $conn;
    $Current_Time = date("Y-m-d H:i:s");
    $query = "INSERT INTO `exchange`(`Coin_Code`, `Close_Price`, `Last_Transaction`, `High`, `Low`, `Open`, `Volume`, `Change_Percentage`, `Market_Cap`, `Retrieve_Time`) 
                VALUES ('$Code_Coin','$Close_Price','$Last_Transaction','$High','$Low','$Open','$Volume','$Change_Percentage','$Market_Cap','$Current_Time')";

    $hasil = mysqli_query($conn, $query);
    return $hasil;
}

function Push_Movement($Code_Coin, $Id_Exchange, $Range_Value, $Top_Value, $Lower_Value, $Range_Percentage, $Top_Percentage, $Low_Percentage, $Status)
{
    global $conn;
    $query = "INSERT INTO `movement`(`Code_Coin`, `id_exchange`, `Range_V`, `Top_V`, `Lower_V`, `Range_P`, `Top_P`, `Lower_P`, `Status`) 
                VALUES ('$Code_Coin','$Id_Exchange','$Range_Value','$Top_Value','$Lower_Value','$Range_Percentage','$Top_Percentage','$Low_Percentage','$Status')";
    $hasil = mysqli_query($conn, $query);
    return $hasil;
}

function get_Market($id_coin)
{
    global $conn;
    $query = "SELECT nama_market FROM tbl_market WHERE id = '$id_coin'";
    $hasil = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($hasil);
    return $row;
}
