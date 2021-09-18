<?php
function Select_Exchange($limit = false)
{
    global $conn;
    $tabel = 'exchange';
    $table2 = 'markets';
    if ($limit == false) {
        $query = "SELECT * FROM $tabel INNER JOIN $table2 ON markets.Coin_Code = exchange.Coin_Code ORDER BY exchange.Retrieve_Time DESC";
    } else {
        $query = "SELECT * FROM $tabel INNER JOIN $table2 ON markets.Coin_Code = exchange.Coin_Code ORDER BY exchange.Retrieve_Time DESC LIMIT $limit";
    }
    // $query = "SELECT * FROM $tabel";
    return $conn->query($query);

    // while ($row = $exchange->fetch_assoc()) {
    //     // Data API
    //     echo $row['Coin_Code'];
    //     echo $row['Close_Price'];
    //     echo $row['Last_Transaction'];
    //     echo $row['High'];
    //     echo $row['Low'];
    //     echo $row['Open'];
    //     echo $row['Volume'];
    //     echo $row['Change_Percentage'];
    //     echo $row['Market_Cap'];
    //     // Range Movements
    //     echo $row['Range_V'];
    //     echo $row['Top_V'];
    //     echo $row['Lower_V'];
    //     echo $row['Range_P'];
    //     echo $row['Top_P'];
    //     echo $row['Lower_P'];
    //     echo $row['Status'] . "<br><br>";
    // }
}

function insert_Market($namaMarket, $coin_code, $st)
{
    global $conn;
    $query = "INSERT INTO markets (Nama, Coin_Code, st) VALUES ('$namaMarket', '$coin_code', '$st')";
    $hasil = mysqli_query($conn, $query);
    return $hasil;
}

function Push_Data($Code_Coin, $Close_Price, $Last_Transaction, $High, $Low, $Open, $Volume, $Change_Percentage, $Market_Cap, $Range_Value, $Top_Value, $Lower_Value, $Range_Percentage, $Top_Percentage, $Lower_Percentage, $Status)
{
    global $conn;
    $Current_Time = date("Y-m-d H:i:s");
    $query = "INSERT INTO `exchange`(`Coin_Code`, `Close_Price`, `Last_Transaction`, `High`, `Low`, `Open`, `Volume`, `Change_Percentage`, `Market_Cap`, `Retrieve_Time`, `Range_V`, `Top_V`, `Lower_V`, `Range_P`, `Top_P`, `Lower_P`, `Status`)
                VALUES ('$Code_Coin','$Close_Price','$Last_Transaction','$High','$Low','$Open','$Volume','$Change_Percentage','$Market_Cap','$Current_Time','$Range_Value','$Top_Value','$Lower_Value','$Range_Percentage','$Top_Percentage','$Lower_Percentage','$Status')";
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
