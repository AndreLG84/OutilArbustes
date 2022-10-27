<?php

require_once './vendor/autoload.php';

$controller = (isset($_GET['controller'])) ? $_GET['controller']: '';

if ($controller === ''){
    $action = (isset($_GET['action'])) ? $_GET['action']: 'list';

    switch($action) {
        case 'list':
            ControllerJeu::Jeu();
            break;
    }
    
}
