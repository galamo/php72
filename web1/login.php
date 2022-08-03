<?php

$error_username = "";
$error_password = "";

if (count($_POST) > 0 && $_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST["username"] == "") {
        $error_username = "user is required";
    }
    if ($_POST["password"] == "") {
        $error_password = "password is required";
    }
    if (validateCredentials($_POST["username"], $_POST["password"])) {
        header("Location:http://localhost/php72/contact.php");
    } else {
        header("Location:http://localhost/php72/login.php");
    }
}

function validateCredentials($u, $p)
{
    if ($u == "aviv" && $p == "aviv") {
        return true;
    } else {
        return false;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <form method="POST" action="login.php">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">@</span>
                <input name="username" type=" text" class="form-control" placeholder="Username"
                    aria-describedby="basic-addon1">
                <span style="color:red"> <?= $error_username ?> </span>
            </div>


            <div class="input-group">
                <input name="password" type="text" class="form-control" placeholder="password"
                    aria-describedby="basic-addon2">
                <span class="input-group-addon" id="basic-addon2">password</span>
                <div style="display:block">
                    <span style="color:red"> <?= $error_password ?> </span>
                </div>
            </div>

            <button class="btn btn-primary" type="submit"> Login</button>
        </form>
    </div>

</body>

</html>