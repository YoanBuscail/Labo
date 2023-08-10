<?php

// FrontController

require_once '../vendor/autoload.php';

session_start();

/* ------------
--- ROUTAGE ---
-------------*/

$router = new AltoRouter();

if (array_key_exists('BASE_URI', $_SERVER)) {
    
    $router->setBasePath($_SERVER['BASE_URI']);
} else { 
    $_SERVER['BASE_URI'] = '/';
}

// Déclaration des "routes" à AltoRouter,

/* HOME */

$router->map(
    'GET',
    '/',
    [
        'method' => 'home',
        'controller' => 'MainController'
    ],
    'main-home'
);

$router->map(
    'POST',
    '/',
    [
        'method' => 'contactForm',
        'controller' => 'MainController'
    ],
    'main-contactForm'
);


/* -------------
--- DISPATCH ---
--------------*/

// On demande à AltoRouter de trouver une route qui correspond à l'URL courante
$match = $router->match();

// Ensuite, pour dispatcher le code dans la bonne méthode, du bon Controller
// On délègue à une librairie externe : https://packagist.org/packages/benoclock/alto-dispatcher
// 1er argument : la variable $match retournée par AltoRouter
// 2e argument : le "target" (controller & méthode) pour afficher la page 404
$dispatcher = new Dispatcher($match, '\App\Controllers\ErrorController::error404');

// permet à altodispatcher de préfixer tous les FQCN de nos controller
$dispatcher->setControllersNamespace('App\Controllers');

// setControllerArguments permet d'envoyer des arguments aux controller instanciés.
// on en profite pour envoyer le tableau $match utilisé pour les ACL
$dispatcher->setControllersArguments($match, $router);

// Une fois le "dispatcher" configuré, on lance le dispatch qui va exécuter la méthode du controller
$dispatcher->dispatch();