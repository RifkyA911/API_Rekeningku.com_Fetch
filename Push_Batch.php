<?php
date_default_timezone_set('Asia/Jakarta');
require 'Koneksi.php';
require 'CURL_API_Rekeningku.php';
require 'Querry_Function.php';

$api = curl("https://api.rekeningku.com/v2/price");
$hasil = json_decode($api, true);


// Push Data Marketplace ke DB
foreach ($hasil as $tickers => $t) {
    $Nama = $t['n'];
    // $Id_Market = $t['id'];  // Id dari Rekeningku.com
    $Code_Coin = $t['cd'];
    $Close_Price = $t['c'];
    $Last_Transaction = $t['tt'];
    $High = $t['h'];
    $Low = $t['l'];
    $Open = $t['o'];
    $Volume = $t['v'];
    $Change_Percentage = $t['cp'];
    $Market_Cap = $t['mk'];
    $st = $t['st']; // Security Key ???
    $cek_dupe = mysqli_query($conn, "SELECT Id, Coin_Code FROM markets WHERE Coin_Code = '$Code_Coin' "); // Cek Duplikasi MarketPlace Tabel `markets`  


    // ------------- Validasi Ketersediaan Data ------------- 
    if ($cek_dupe->num_rows > 0) { // Cek Jika Market Sudah Terdaftar
        echo "<pre>Market " . $Nama . "/" . $Code_Coin . " Sudah Terdaftar </pre>";
        $flag = true;
    } else { // Jika Belum Ada
        $Add_Markets = insert_Market($Nama, $Code_Coin, $st);
        if ($Add_Markets) {
            echo "<pre>Menambahkan Market Baru : " . $Nama . "/" . $Code_Coin . "</pre>";
            $flag = true;
        } else {
            echo mysqli_error($conn);
            $flag = false;
        }
    }

    // ------------- Eksekusi Query ------------- 
    if ($flag == true) {
        // Insert Kedalam DB Tabel `exchange`
        Push_Data($Code_Coin, $Close_Price, $Last_Transaction, $High, $Low, $Open, $Volume, $Change_Percentage, $Market_Cap);

        // ------------- Kalkulasi Range Tabel `movement` ------------- 
        $Id_Exchange = $cek_dupe->fetch_row();
        echo "id_market_db = " . $Id_Exchange[0];
        $Range_Value = Intval($High - $Low);
        echo "<br>range = " . $Range_Value;
        $Top_Value = Intval($High - $Close_Price);
        echo "<br>top = " . $Top_Value;
        $Lower_Zero = false;
        $Lower_Value = (Intval($Close_Price - $Low) == 0 ? $Lower_Zero = true : Intval($Close_Price - $Low));
        ($Lower_Zero == true ? $Lower_Value =  0.00001 : $Lower_Zero = false);
        echo "<br>lower = " . $Lower_Value . " - " . ($Lower_Zero == true ? "True" : "False");
        $Range_Percentage = ($Range_Value / $Lower_Value) * 100;
        echo "<br>range_p = " . $Range_Percentage . "%";
        $Top_Percentage = ($Top_Value / $Range_Value) * 100;
        echo "<br>top_p = " . $Top_Percentage . "%";
        $Lower_Percentage = ($Lower_Zero == true ? ($Lower_Value / $Range_Value) * 100 : ($Lower_Value / $Range_Value) * 100);
        echo "<br>lower_p = " . $Lower_Percentage . "%";

        try {
            if ($Id_Exchange != null) {
                $Status = ($Lower_Percentage < 1 ? 0 : 1);
                Push_Movement($Code_Coin, $Id_Exchange[0], $Range_Value, $Top_Value, $Lower_Value, $Range_Percentage, $Top_Percentage, $Lower_Percentage, $Status);
            } else {
                throw new Exception('Id_Exchange Error/Gagal Muat');
            }
        } catch (Exception $e) {
            echo "Message : " . $e->getMessage();
        }
    } elseif ($flag == false) {
        echo "Error";
        die;
    }
}
die;
