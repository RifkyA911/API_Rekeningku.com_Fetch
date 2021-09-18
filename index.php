<?php
date_default_timezone_set('Asia/Jakarta');
// require 'Koneksi.php';
// require 'CURL_API_Rekeningku.php';

// require 'Theme_Function.php';

// $regis = curl("https://api.rekeningku.com/v2/price");
// $result = json_decode($regis, true);

?>
<!DOCTYPE html>
<html lang="id">

<head>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <title>Rekeningku.com API</title>
    <?php include 'header.php' ?>
</head>


<body onload="Index_F()" class="APP_Content_Body" style="<?= $Theme_Body; ?>">
    <nav class="navbar navbar-dark bg-dark shadow-lg mb-4">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="https://www.rekeningku.com/markets">
                <img src="Public\icon\favicon-32x32.png" alt="" width="28" height="28" class="d-inline-block align-text-top me-2 rounded">
                API Rekeningku.com
            </a>
        </div>
    </nav>
    <main id="ajax_body" class="container-fluid py-3">
        <div class="position-relative" style="<?= $Load_BG; ?>">
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="spinner-grow" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
    </main>
    <!-- </body> -->
    <?php
    include 'footer.php';
    ?>

</html>