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

$router->map('GET|POST', '/', 'ControllerJeu#JeuCtrl', 'choix réseaux/ecole');

//admin
$router->map('GET|POST', '/Admin', 'ControllerAdmin#InsertPhraseCtrl', 'AjouterUnePrase');


$match = $router->match();
if($match){
    list($controller, $action) = explode('#', $match['target']);
    $obj = new $controller;
     
    if(is_callable(array($obj, $action))){
        call_user_func_array(array($obj, $action), $match['params']);
    }

}


// if(empty($controller)){
//     $page =(isset($_GET['p'])) ? $_GET['p'] : 0; //operateur ternaire  ?alors :sinon
//     ControllerPost::listPosts($page);     
// } else if($controller == 'post'){
//      $action =(isset($_GET['action'])) ? $_GET['action'] : 'list';
    
//     switch($action){ //test laction
//         case 'list':
//             $page = (isset($_GET['p'])) ? $_GET['p'] : 0;
//             ControllerPost::listPosts($page);
//             break;
//         case 'read':
//             $id = $_GET['id'];
//             ControllerPost::readPosts($id);
//             break;
//         default:
//             ControllerPost::listPosts(0);
//             break;
//     }
// }