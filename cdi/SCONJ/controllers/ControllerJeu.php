<?php
    // Objectif : Afficher phrase cachée à partir de la saisie de l'utilisateur 
    // Entrée : saisie de l'utilisateur $_POST
    // Sortie : affichage de la phrase
    class ControllerJeu extends ControllerTwigSconj {
    
        public static function Accueil(){
           // on va instancier le modele
           $twig = ControllerTwigSconj::twigControl();
           $manager = new Sconj_ModelJeu();

           $param1 = $manager->getClasse($_SESSION);
           $param2 = $manager->getConju_temps();
            
           echo $twig->render('Homepage.twig',['selectClasse' => $param1,'conju_temps' => $param2 ]);
        }

        public static function AfficherPhrase(){
           // on va instancier le modele
           $twig = ControllerTwigSconj::twigControl();
           $manager = new Sconj_ModelJeu();
            $conju_temps = $_POST;
            // on prépare les variables qu'on envoie au template
            $param2 = $manager->getConju_temps();

            $objetphrases = $manager->getPhrases($conju_temps);
            var_dump($objetphrases);

            $indicealeatoire=0;

            $verbe = $objetphrases[$indicealeatoire]->getConju_reponse();
            $phrasecomplete = $objetphrases[$indicealeatoire]->getConju_phrase();
            var_dump($phrasecomplete);

            $phraseavant = strstr($phrasecomplete, $verbe, true);
            $phraseafter = substr(strstr($phrasecomplete,$verbe),strlen($verbe));
            
            $reponses = $objetphrases[$indicealeatoire]->getConju_reponses();
            $reponsexplode = explode(",", $reponses);
            var_dump($reponsexplode);

            $reponse = $objetphrases[$indicealeatoire]->getConju_reponse();
            var_dump($reponse);

            


            echo $twig->render('AfficherPhrase.twig',['conju_temps' => $param2, 'phraseTps' => $phraseavant, 'phraseTpsAfter' => $phraseafter, 'objetphrase' => $objetphrases, 'reponses' => $reponsexplode, 'reponse' => $reponse, 'phrasecomplete' => $phrasecomplete]);
        }
    }