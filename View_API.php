<?php
require 'Koneksi.php';
require 'CURL_API_Rekeningku.php';
require 'Theme_Function.php';

$regis = curl("https://api.rekeningku.com/v2/price");
$result = json_decode($regis, true);
?>
<div class="content container bg-white rounded shadow-lg py-2">
    <div class="content-head container-fluid pt-3 pb-2">
        <div>
            <h3 id="content-title"><i class="fab fa-fw fa-bitcoin"></i> Markets - Pull API <a class="text-dark text-decoration-none" href="https://api.rekeningku.com/#price">Rekeningku.com</a></h3>
        </div>
        <hr>
        <!-- Btn -->
        <div class="containter bg-white py-1">
            <!-- <a href="exportData.php" target="_blank">Export Data</a> -->
            <div class="row">
                <div class="col-sm-9">
                    <div id="back_btn"></div>
                    <button type="button" onclick="Index_F()" class="btn btn-sm btn-secondary fw-bold shadow-sm disabled" disabled><i class="fas fa-fw fa-redo-alt"></i> Refresh API</button>
                    <span class="mx-1"> | </span>
                    <button type="button" onclick="Exchange_F()" class="btn btn-sm btn-success fw-bold shadow-sm"><i class="fas fa-fw fa-th-list"></i> Lihat Database</button>
                    <button type="button" onclick="Range_F()" href="range_movement.php" target="_blank" class="btn btn-sm btn-warning fw-bold shadow-sm"><i class="fab fa-fw fa-gitter"></i> Lihat Range %</button>
                    <span class="mx-1"> | </span>
                    <a href="Push_Batch.php" target="_blank" class="btn btn-sm btn-primary fw-bold shadow-sm"><i class="fas fa-fw fa-database"></i> Push Batch ke DB</a>
                </div>
                <div class="col-sm-2">
                    <h5 class="ms-4"><i class="fas fa-fw fa-clock"></i> UTC +7 (WIB) :</h5>
                </div>
                <div class="col-sm-1">
                    <h5 class=""><span id="rclock"></span></h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Table -->
    <div class="content-body bg-white">
        <table id="coins" class="table table-sm table-responsive table-hover shadow">
            <thead class="bg-dark text-light fw-bold shadow">
                <th scope="col" class="ps-2">Pair</th>
                <th scope="col">Koin</th>
                <th scope="col">Harga Terakhir</th>
                <th scope="col">Perubahan 24 Jam</th>
                <th scope="col">High</th>
                <th scope="col">Low</th>
                <th scope="col">Open Price</th>
                <th scope="col">Volume 24 Jam</th>
                <th scope="col">Market Cap</th>
                <!-- <th scope="col">Last Transaction</th> -->
                <!-- <th>Security Token</th> -->
            </thead>
            <tbody class="ps-2">
                <?php $icons = [];
                $i = 0;
                foreach ($result as $tickers => $a) { ?>
                    <tr>
                        <?php $icons[$i] = $a['cd']; ?>
                        <td>
                            <div class="d-flex align-items-center p-2 w-100">
                                <img width="23" src="<?= KIcon($icons); ?>" alt="">
                                <div class="d-flex align-items-end ms-2">
                                    <span class="fw-bold font-14px markets-primary-pair"><?= $a['cd']; ?></span>
                                    <span class="markets-second-pair font-12 ml-1"> / IDR</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center py-2 pr-3 w-100"><?= $a['n']; ?></div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center py-2 pr-3 w-100"><?= number_format($a['c'], 2, ',', '.'); ?></div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center py-2 pr-3 w-100"><?= ($a['cp'] > 0) ? "<span style='color:green;'>" . number_format($a['cp'], 2, ',', '.') . "%</span>" : "<span style='color:red;'>" . number_format($a['cp'], 2, ',', '.') . "%</span>"; ?>
                        </td>
                        <td>
                            <div class="d-flex align-items-center py-2 pr-3 w-100"><?= number_format($a["h"], 2, ',', '.'); ?></div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center py-2 pr-3 w-100"><?= number_format($a["l"], 2, ',', '.'); ?></div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center py-2 pr-3 w-100"><?= number_format($a['o'], 2, ',', '.'); ?></div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center py-2 pr-3 w-100"><?= number_format($a['v'], 2, ',', '.'); ?></div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center py-2 pr-3 w-100"><?= Simpl(number_format($a['mk'], 2, ',', '.')); ?></div>
                        </td>
                        <!-- <td class="fw-bold"><?= ($a['tt'] == 1) ? "<span style='color:red;'>Buy<span>" : "<span style='color:green;'>Sell<span>"; ?></td> -->
                        <!-- <td><?= $a['st']; ?></td> -->
                    </tr>
                <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
    <p class="fw-bold"><i class="fas fa-fw fa-table"></i> Total Data : <span id="total_data"><?= $i; ?></span> | <a href="https://api.rekeningku.com/v2/price" target="_blank"><i class="fas fa-fw fa-link"></i></a></p>
</div>