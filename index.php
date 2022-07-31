<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> My php Page</h1>
    <?php 
        if(array_key_exists("user",$_GET)){
            $userName = $_GET["user"];
            echo "<h1> Hi $userName </h1>";
        }
        for ($x = 0; $x <= 999999999; $x++) {
           
          }
                      
        $txt = "My new PHP website";
        echo "<h2>".$txt."</h2>";
    ?>
    <a href="/php72/app.php">Go To App</a>
</body>

</html>