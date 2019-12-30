<?php

require'../class/sessions.php';
$objses = new Sessions();
$objses->init();

$objses->destroy();

header('Location: http://localhost:8888/CodigosVideos/8-DatosUsuario1/');

?>