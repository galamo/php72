<?php

$locations = array("London", "Jerusalem", "Paris", "Beyrut");
$nights = array(2, 4, 6, 7, 9);
$response = array($nights, $locations);

echo json_encode($response);
