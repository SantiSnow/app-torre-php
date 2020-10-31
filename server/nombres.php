<?php

$nombre = $_POST["nombre"];

$data = file_get_contents('https://torre.bio/api/bios/' . $nombre);

echo $data;

?>