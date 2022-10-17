<?php

$dir_rel="../../";
$dir_cdi="../";
$fichier="index.php";
include($dir_rel.'_init.php');

if (isset($_SESSION['outil_retour'])) $retour=$_SESSION['outil_retour']; else if (isset($_SESSION['retour_page'])) $retour=$_SESSION['retour_page']; else $retour='outil.php';
$_SESSION['outil_id'] = trouve_outil_id($_SERVER["PHP_SELF"]);
// $outil=get_outil($_SESSION['outil_id']);

require_once __DIR__ .'/../vendor/autoload.php';
require_once  __DIR__ .'/../vendor/altorouter/altorouter/AltoRouter.php';

//start alto router
$router = new AltoRouter();

$router->setBasePath($dossier_server_path.'/cdi/'.$_SESSION['outil_id']);

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