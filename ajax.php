<script>
    function Exchange_F() {

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("ajax_body").innerHTML = this.responseText;
            }
        };

        xhttp.open("POST", "Push_Batch.php", true);
        xhttp.send();
    }

    // function Range_F() {

    //     var xhttp = new XMLHttpRequest();
    //     xhttp.onreadystatechange = function() {
    //         if (this.readyState == 4 && this.status == 200) {
    //             document.getElementById("ajax_body").innerHTML = this.responseText;
    //         }
    //     };

    //     xhttp.open("POST", "View_Range.php", true);
    //     xhttp.send();
    // }
</script>