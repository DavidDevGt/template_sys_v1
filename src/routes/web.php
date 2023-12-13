<?php
$router = new AltoRouter();
$router->map('GET', '/usuarios', 'TemplateSys\Controllers\UsuarioController@index');
