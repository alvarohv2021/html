<?php
error_reporting(E_ERROR | E_PARSE);
$api="http://localhost/PHP/PHP/AHernandez/DataBases/Hoteles/Controladores/crear_api.php";
$arrayObjsHoteles=json_decode(file_get_contents($api));

include_once("../Vista/lista.php");