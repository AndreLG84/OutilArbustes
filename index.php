<?php

require_once __DIR__ .'/vendor/autoload.php';
require_once  __DIR__ .'/vendor/altorouter/altorouter/AltoRouter.php';

//start alto router
$router = new AltoRouter();

$router->setBasePath('/Stage2022MVC');

$router->map('GET|POST', '/', 'ControllerJeu#getClasseCtrl', 'choix réseaux/ecole');

$router->map('GET|POST', '/temps', 'ControllerJeu#getTempsCtrl', 'lancerJeu');

$router->map('GET|POST', '/Jeu', 'ControllerJeu#getphraseTempsCtrl', 'phrases');

//admin
$router->map('GET|POST', '/Admin', 'ControllerAdmin#InsertPhraseCtrl', 'AjouterUnePrase');

$router->map('GET', '/PhrasesEcole', 'ControllerAdmin#getPhraseCtrl', 'PhraseParClasse');


$match = $router->match();
if($match){
    list($controller, $action) = explode('#', $match['target']);
    $obj = new $controller;
     
    if(is_callable(array($obj, $action))){
        call_user_func_array(array($obj, $action), $match['params']);
    }

}