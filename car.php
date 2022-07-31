<?php

if (isset($_GET["cartype"])) {
    $car = $_GET['cartype'];
    echo "<h1>$car</h1>";
} else {
    echo "<h1 onclick='goToCarsPage()' >No Car Selected</h1>";
}

?>
<script>
function goToCarsPage() {
    window.location.href = "/php72/index.php"
}
</script>