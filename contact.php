<!DOCTYPE html>
<html>

<body>

    <h2>HTML Forms</h2>
    <h1> Cars Rental </h1>
    <?php
    require_once("header.php");

    ?>
    <form action="/action_page.php">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value="John"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" value="Doe"><br><br>
        <textarea for="lname"></textarea>
        <input type="submit" value="Submit">
    </form>
    <a href="/php72/index.php">Home</a>
</body>

</html>