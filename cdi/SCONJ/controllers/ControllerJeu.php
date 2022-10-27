<?php

    class ControllerJeu {

    
        // Objectif : Afficher phrase cachée à partir de la saisie de l'utilisateur 
        // Entrée : saisie de l'utilisateur $_POST
        // Sortie : affichage de la phrase
        public static function AfficherPhrase(){
            
            // le dossier ou on trouve les templates
           $loader = new Twig\Loader\FilesystemLoader('./views');
           // initialiser l'environement Twig
           $twig = new Twig\Environment($loader, ['cache' => false, 'debug' => true]);
           $twig->addExtension(new \Twig\Extension\DebugExtension());

           if (isset($_POST['submit'])) {
                echo 'toto';
                var_dump($_POST);
                $conju_temps = $_POST;
                // on va instancier le modele
                $manager = new Sconj_ModelJeu();
                // on prépare les variables qu'on envoie au template
                // $param1 = $manager->getClasse($_SESSION);
                $param2 = $manager->getConju_temps();

                $objetphrases = $manager->getPhrases($conju_temps);
                var_dump($objetphrases);
                $indicealeatoire=0;

                $verbe = $objetphrases[$indicealeatoire]->getConju_reponse();
                $phrasecomplete = $objetphrases[$indicealeatoire]->getConju_phrase();

                $phrasecachee = strstr($phrasecomplete, $verbe, true);
                echo $twig->render('Homepage.twig',[/*'selectClasse' => $param1,*/ 'conju_temps' => $param2, 'phraseTps' => $phrasecachee]);
            }

        }

        // public static function Jeu (){
        //     $data = new Sconj_ModelJeu();

        //     $phrase = $data->getPhrase();
        //     require_once './views'
        // }
    }    