<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<?php
require_once("../app-pages/header.php");

?>

<div class="container">
    <form action="/php72/web2/pages/order-confirmation.php" method="POST">

        <select id="locationsSelectUi" name="location" class="form-select" aria-label="Default select example">

        </select>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">date</label>
            <input name="date" class="form-control" type="date" id="formFileMultiple">
        </div>
        <div class="mb-3">
            <label for="formFileDisabled" class="form-label">nights</label>
            <input name="nights" class="form-control" type="number" id="formFileDisabled">
        </div>
        <div>
            <button type="submit" class="btn btn-success"> Order Now </button>
        </div>

    </form>
</div>
<script src="./vacation.js"></script>
<?php require_once("../app-pages/footer.php"); ?>