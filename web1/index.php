<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="width:500px;margin:auto">
        <h1> Cars Rental </h1>
        <?php
        require_once("header.php");
        $cars = array("Honda", "Mazda", "Skoda");
        if (array_key_exists("user", $_GET)) {
            $userName = $_GET["user"];
            echo "<h1> Hi $userName  </h1>";
        }
        // print_r($cars);
        foreach ($cars as $singleCar) {
            echo "<h3> $singleCar <button id='$singleCar' onclick='rentCar($singleCar)'>Rent</button></h3>";
        }
        $txt = "Please select your car";
        echo "<h2>" . $txt . "</h2>";



        ?>


        <a href="/php72/contact.php">Go To Contact</a>
    </div>
</body>
<script>
function rentCar(car) {
    console.log(car.id)
    window.location.href = "http://localhost/php72/car.php?cartype=" + car.id
}
</script>

</html>