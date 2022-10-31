<?php

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

abstract class ControllerTwigSconj {

    public static function twigControl(){
        // le dossier ou on trouve les templates
        $loader = new FilesystemLoader('views');
        // initialiser l'environement Twig
        $twig = new Environment($loader, ['cache' => false, 'debug' => true, 'auto_reload' => true]);
        $twig->addExtension(new \Twig\Extension\DebugExtension());

        return $twig;
    }
}

?>