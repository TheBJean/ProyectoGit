<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//From, To:
// Carpeta, Clase, metodo

//http://localhost/ProyectoDW202416/Login
$routes->get('/Login', 'Cindex1::index');

//http://localhost/ProyectoDW202416/Compras
$routes->get( '/Compras', 'Cindex2::index2');


