<?php

    class ControllerJeu {

        public static function JeuCtrl(){
            // le dossier ou on trouve les templates
           $loader = new Twig\Loader\FilesystemLoader('./views');
           // initialiser l'environement Twig
           $twig = new Twig\Environment($loader, ['cache' => false, 'debug' => true]);
           $twig->addExtension(new \Twig\Extension\DebugExtension());
           // on va instancier le modele
           $manager = new ModelJeu();
           // on prépare les variables qu'on envoie au template
           // $param1 = $manager->getClasse($_SESSION);

           $param2 = $manager->getConju_temps();

           $conju_classe = $_POST;
           $conju_temps = $_POST;
           $param3 = $manager->getPhrase($conju_temps, $conju_classe);
           
           echo $twig->render('Homepage.twig',[/*'selectClasse' => $param1,*/ 'conju_temps' => $param2, 'array' => $param3]);

        }
    }    