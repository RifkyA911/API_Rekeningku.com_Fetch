<?php
require 'Koneksi.php';
require 'Querry_Function.php';
require 'Theme_Function.php';
?>
<!-- <main class="container-fluid py-3"> -->
<div class="content container bg-white rounded shadow-lg py-2">
    <div class="content-head container-fluid pt-3 pb-2">
        <div>
            <h3><i class="fab fa-fw fa-gitter"></i> View Database - Range</h3>
        </div>
        <hr>
        <!-- Btn -->
        <div class="containter bg-white py-1">
            <!-- <a href="exportData.php" target="_blank">Export Data</a> -->
            <div class="row">
                <div class="col-sm-9">
                    <button type="button" onclick="Index_F()" class="btn btn-sm btn-danger fw-bold shadow-sm"><i class="fas fa-fw fa-chevron-circle-left"></i> Kembali</button>
                    <span class="mx-1"> | </span>
                    <button type="button" onclick="Exchange_F()" class="btn btn-sm btn-success fw-bold shadow-sm"><i class="fas fa-fw fa-th-list"></i> Lihat Database</button>
                    <button type="button" class="btn btn-sm btn-warning fw-bold shadow-sm disabled" disabled><i class="fab fa-fw fa-gitter"></i> Lihat Range %</button>
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
    <div class="content-body bg-white overflow-auto" style="height:800px">
        <table id="coins" class="table table-sm table-responsive table-hover shadow">
            <thead class="bg-dark text-light fw-bold shadow">
                <th scope="col" class="ps-2">Pair</th>
                <th scope="col">Koin</th>
                <th scope="col">Harga Terakhir</th>
                <th scope="col">Perubahan<br>24 Jam</th>
                <th scope="col">Range</th>
                <th scope="col">Top</th>
                <th scope="col">Lower</th>
                <th scope="col">Range_%</th>
                <th scope="col">Top_%</th>
                <th scope="col">Lower_%</th>
                <!-- <th scope="col">Status</th> -->
                <th scope="col">Retrieve_Time</th>
                <!-- <th scope="col">Last Transaction</th> -->
                <!-- <th>Security Token</th> -->
            </thead>

            <tbody class="ps-2 shadow">

                <?php
                // konfigurasi pagination
                $batas  = 32;
                $halaman       = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;
                // echo $halaman_awal;

                $previous = $halaman - 1;
                $next = $halaman + 1;
                $num_exchange = Select_Exchange(false);
                $jumlah_data  = $num_exchange->num_rows;
                $total_halaman = ceil($jumlah_data / $batas);
                // echo "<br>" . $total_halaman;
                // query
                $exchange = Select_Exchange();
                $nomor = $halaman_awal + 1;
                $icons = [];
                $i = 0;
                while ($ex = $exchange->fetch_assoc()) { ?>
                    <tr>
                        <td>
                            <?php $icons[$i] = $ex['Coin_Code']; ?>
                            <div class="d-flex align-items-center p-2 w-100">
                                <img width="23" src="<?= KIcon($icons); ?>" alt="">
                                <div class="d-flex align-items-end ms-2">
                                    <span class="fw-bold font-14px markets-primary-pair"><?= $ex['Coin_Code']; ?></span>
                                    <span class="markets-second-pair font-12 ml-1"> / IDR</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center py-2 pr-3 w-100"><?= $ex['Nama']; ?></div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center py-2 pr-3 w-100"><?= number_format($ex['Close_Price'], 2, ',', '.'); ?></div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center py-2 pr-3 w-100"><?= ($ex['Change_Percentage'] > 0) ? "<span style='color:green;'>" . number_format($ex['Change_Percentage'], 2, ',', '.') . "%</span>" : "<span style='color:red;'>" . number_format($ex['Change_Percentage'], 2, ',', '.') . "%</span>"; ?>
                        </td>
                        <td>
                            <div class="d-flex align-items-center py-2 pr-3 w-100"><?= number_format($ex["Range_V"], 2, ',', '.'); ?></div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center py-2 pr-3 w-100"><?= number_format($ex["Top_V"], 2, ',', '.'); ?></div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center py-2 pr-3 w-100"><?= number_format($ex['Lower_V'], 2, ',', '.'); ?></div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center py-2 pr-3 w-100"><?= number_format($ex['Range_P'], 2, ',', '.') . "%</span>"; ?></div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center py-2 pr-3 w-100"><?= number_format($ex['Top_P'], 2, ',', '.') . "%</span>"; ?></div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center py-2 pr-3 w-100"><?= number_format($ex['Lower_P'], 2, ',', '.') . "%</span>"; ?></div>
                        </td>
                        <!-- <td>
                            <div class="d-flex align-items-center py-2 pr-3 w-100"><?= Simpl(number_format($ex['Market_Cap'], 2, ',', '.')); ?></div>
                        </td> -->
                        <!-- <td>
                            <div class="d-flex align-items-center py-2 pr-3 w-100"><?= $ex["Status"]; ?></div>
                        </td> -->
                        <td>
                            <div class="d-flex align-items-center py-2 pr-3 w-100"><?= $ex["Retrieve_Time"]; ?></div>
                        </td>
                    </tr>
                <?php
                    $i++;
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
        <!-- navigasi halaman -->
        <!-- <nav>
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php
                                            if ($halaman > 1) {
                                                echo "href='?halaman=$previous'";
                                            }
                                            ?>>Previous</a>
                </li>
                <?php
                for ($x = 1; $x <= $total_halaman; $x++) {
                ?>
                    <li class="page-item"><a class="page-link" href="?halaman=<?= $x ?>"><?= $x; ?></a></li>
                <?php
                }
                ?>
                <li class="page-item">
                    <a class="page-link" <?php if ($halaman < $total_halaman) {
                                                echo "href='?halaman=$next'";
                                            } ?>>Next</a>
                </li>
            </ul>
        </nav> -->
    </div>
    <p class="mt-2 fw-bold"><i class="fas fa-fw fa-table"></i> Tampil Data : <span id="total_data"><?= $i . " Dari " . $jumlah_data; ?></span></p>
</div>
<!-- </main> -->