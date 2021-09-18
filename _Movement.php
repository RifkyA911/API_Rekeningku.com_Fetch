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
            <th scope="col">Retrieve_Time</th>
            <!-- <th scope="col">Last Transaction</th> -->
            <!-- <th>Security Token</th> -->
        </thead>
        <!-- <tbody class="ps-2">
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