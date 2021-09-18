<footer class="py-2 bg-dark mt-5 shadow-lg">
    <div class="container pt-2">
        <p class="text-light">
            <i class="fas fa-fw fa-code"></i> 18081010126 - Rifky Akhmad Fernanda
        </p>
        <p class="text-light">
            <?php $ref_link = "https://github.com/Aris-haryanto/indodax-api"; ?>
            <i class="fab fa-fw fa-github"></i> Referensi : <a class="text-light text-decoration-none" type="button" href="<?= $ref_link; ?>"><?= $ref_link; ?></a>
            <!-- <img class="" src="Public\icon\android-chrome-192x192.png" alt="" width="28" height="28"></a> -->
        </p>
    </div>
</footer>
</body>
<?php require 'ajax.php'; ?>
<script>
    function startTime() {
        const today = new Date();
        let h = today.getHours();
        let m = today.getMinutes();
        let s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('rclock').innerHTML = h + ":" + m + ":" + s;
        setTimeout(startTime, 1000);
    }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i
        }; // add zero in front of numbers < 10
        return i;
    }
</script>
<script src="vendor\twbs\bootstrap\dist\js\bootstrap.bundle.min.js"></script>
<script src="vendor\twbs\bootstrap\dist\js\bootstrap.min.js"></script>
<!-- <script src="vendor\twbs\bootstrap\dist\js\bootstrap.min.js"></script> -->