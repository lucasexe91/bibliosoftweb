<?php
require_once 'libs/route.php';
require_once 'api/comentario-api.controller.php';

// crea el router
$router = new Router();
 
// define la tabla de ruteo
$router->addRoute('comentar', 'POST', 'ComentarioApiController', 'comentar');
$router->addRoute('getcommentsbybook/:ID', 'GET', 'ComentarioApiController', 'getcommentsbybook');
$router->addRoute('borrarcomentario/:ID', 'DELETE', 'ComentarioApiController','borrarComentario');

// rutea
$router->route($_REQUEST['resource'], $_SERVER['REQUEST_METHOD']);
