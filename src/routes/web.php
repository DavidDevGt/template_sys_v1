<?php
$router = new AltoRouter();

// *RUTAS* //

// Rutas Usuario
$router->map('GET', '/usuarios', 'TemplateSys\Controllers\UsuarioController@index');
$router->map('POST', '/registro', 'TemplateSys\Controllers\UsuarioController@register');
$router->map('POST', '/login', 'TemplateSys\Controllers\UsuarioController@login');
