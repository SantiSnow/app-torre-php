<?php

$oportunidad = $_POST["id"];

$data = file_get_contents('https://torre.co/api/opportunities/' . $oportunidad);

echo $data;

?>