<?php
include_once "../views/AboutDoc.php";
$data = array ('page' => 'About');
$view = new AboutDoc($data);
$view -> show($data);
?>