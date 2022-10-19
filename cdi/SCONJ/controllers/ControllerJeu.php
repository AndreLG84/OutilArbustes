<?php

    class ControllerJeu {

        public static function getClasseCtrl(){
            // le dossier ou on trouve les templates
           $loader = new Twig\Loader\FilesystemLoader('./views');
           // initialiser l'environement Twig
           $twig = new Twig\Environment($loader, ['cache' => false, 'debug' => true]);
           $twig->addExtension(new \Twig\Extension\DebugExtension());
           // on va instancier le modele
           $manager = new ModelJeu();
           // on prépare les variables qu'on envoie au template
           
           $param = $manager->getClasse($_SESSION);
           
           echo $twig->render('Homepage.twig', ['selectClasse' => $param]);

        }

        public static function getTempsCtrl(){
            // le dossier ou on trouve les templates
           $loader = new Twig\Loader\FilesystemLoader('./views');
           // initialiser l'environement Twig
           $twig = new Twig\Environment($loader, ['cache' => false, 'debug' => true]);
           $twig->addExtension(new \Twig\Extension\DebugExtension());
           // on va instancier le modele
           $manager = new ModelJeu();
           // on prépare les variables qu'on envoie au template
           
           $param = $manager->getConju_temps();
           
           echo $twig->render('Homepage.twig', ['conju_temps' => $param]);

        }

        public static function getphraseTempsCtrl(){
            $loader = new Twig\Loader\FilesystemLoader('./views');
           $twig = new Twig\Environment($loader, ['cache' => false, 'debug' => true]);
           $twig->addExtension(new \Twig\Extension\DebugExtension());

           $manager = new ModelJeu();
           
           $conju_temps = $_POST;
           $param = $manager->getphraseTemps($conju_temps);
           
           echo $twig->render('Jeu.twig', ['phrases' => $param]);
        }

        // public static function readPosts(int $id){
        //     $data = ModelJeu::select($id);
    
        //     require_once './view/post.php';
        // }
    }    