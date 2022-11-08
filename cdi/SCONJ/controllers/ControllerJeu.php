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
            
            $indicealeatoire=0;

            $nbphrasesdansbd=count($objetphrases);
            $nbphrases=min(5,$nbphrasesdansbd);

            $verbes=array();$phrases=array();
            for ($i=0;$i<$nbphrases;$i++) :
               $verbe[$i] = $objetphrases[$i]->getConju_reponse();
               $phrase[$i] = $objetphrases[$i]->getConju_phrase();
               $before[$i] = strstr($phrase[$i], $verbe[$i], true);
               $after[$i] = substr(strstr($phrase[$i],$verbe[$i]),strlen($verbe[$i]));
               $reponsexplode[$i] = explode(", ", $objetphrases[$i]->getConju_reponses());
            endfor;

            echo $twig->render('AfficherPhrase.twig',['phrase' => $phrase, 'verbe' => $verbe,'before' => $before, 'after' => $after, 'reponses' => $reponsexplode, 'indicealeatoire' => $indicealeatoire]);
        }
    }