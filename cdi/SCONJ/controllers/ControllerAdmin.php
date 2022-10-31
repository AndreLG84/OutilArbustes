<?php

    class ControllerAdmin extends ControllerSconj{

        public static function InsertPhraseCtrl(){

            $twig = ControllerTwigSconj::twigControl();
        // on va instancier le modele
           $manager = new Sconj_ModelAdmin();
           // on prépare les variables qu'on envoie au template
           $inserer = $manager->InsertPhrase();
           echo $twig->render('Admin.twig', ['insererPhrase' => $inserer]);
        }

        // renvoie les phrases de sa classe pour l'admin
        public static function getPhraseCtrl(){
            $twig = ControllerTwigSconj::twigControl();
 
            $manager = new Sconj_ModelAdmin();
 
            $dataphrase = $manager->getPhrases();
            
            echo $twig->render('Admin.twig', ['arrayphrase' => $dataphrase]);
        }

        public static function UpdatePhraseCtrl(){
        //     // le dossier ou on trouve les templates
        //    $loader = new Twig\Loader\FilesystemLoader('./views');
        //    // initialiser l'environement Twig
        //    $twig = new Twig\Environment($loader, ['cache' => false, 'debug' => true]);
        //    $twig->addExtension(new Twig\Extension\DebugExtension());

        }
    }