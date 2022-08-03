<?php

require_once("../index.css.php");


if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["location"] && $_POST["date"] && $_POST["nights"]) {
?>
    <div style="width:400px; margin:auto;padding:20px ;border:1px solid black; border-radius:5px;">
        <h1> Please confirm your reservation </h1>
        <h2> Location: <?php echo $_POST["location"]  ?> </h2>
        <h2> in: <?php echo $_POST["date"]  ?> </h2>
        <h2> nights: <?php echo $_POST["nights"]  ?> </h2>
        <button class="btn btn-success" onclick="checkoutOrder()"> Checkout </button>
    </div>
    <script src="./index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.24/dist/sweetalert2.all.min.js"></script>
<?php
} else {
    echo "This Method not allowed";
}

?>