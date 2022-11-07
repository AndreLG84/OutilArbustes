<?php
    //Objectif : Inserer des phrases dans la BDD  
    class ControllerAdmin extends ControllerTwigSconj{

        public static function InsertPhraseCtrl(){
            $twig = ControllerTwigSconj::twigControl();
            // on va instancier le modele
           $manager = new Sconj_ModelAdmin();
           // on prépare les variables qu'on envoie au template

            if (isset($_POST)) $data = $manager->InsertPhrase($_POST);
            echo $twig->render('AdminAjouter.twig');
        
        }

        // suppression les phrases de sa classe pour l'admin
        public static function supPhraseCtrl(){
            $twig = ControllerTwigSconj::twigControl();
 
            $manager = new Sconj_ModelAdmin();
 
            $dataphrase = $manager->supPhrases();
            
            echo $twig->render('AdminSupprimer.twig');
        }
    }