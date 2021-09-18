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

    function Index_F() {

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("ajax_body").innerHTML = this.responseText;
                startTime();
            }
        };

        xhttp.open("POST", "View_API.php", true);
        xhttp.send();
    }

    function Exchange_F() {

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("ajax_body").innerHTML = this.responseText;
                startTime();
            }
        };

        xhttp.open("POST", "View_Exchange.php", true);
        xhttp.send();
    }

    function Range_F() {

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("ajax_body").innerHTML = this.responseText;
                startTime();
            }
        };

        xhttp.open("POST", "View_Range.php", true);
        xhttp.send();
    }
</script>