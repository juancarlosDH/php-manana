<?php
require_once('funciones/autoload.php');

$datos = [
    'team' => 'grupo1',
    'commission' => 'tarde'
];

$usuarios = peticionCurl('http://apiusers.juancarlosdh.dhalumnos.com/api/users', 'GET', $datos);

var_dump($usuarios['data']);

 ?>
