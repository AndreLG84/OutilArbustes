<?php
    //Objectif : Inserer, mofifier supprimer des phrases dans la BDD  
    class ControllerAdmin extends ControllerTwigSconj{

        public static function InsertPhraseCtrl(){

            $twig = ControllerTwigSconj::twigControl();
            // on va instancier le modele
           $manager = new Sconj_ModelAdmin();
           // on prépare les variables qu'on envoie au template
           $param = $_POST;
           $data = $manager->InsertPhrase($param);

           echo $twig->render('Admin.twig');
        }

        // renvoie les phrases de sa classe pour l'admin
        public static function getPhraseCtrl(){
            $twig = ControllerTwigSconj::twigControl();
 
            $manager = new Sconj_ModelAdmin();
 
            $dataphrase = $manager->getPhrases();
            
            echo $twig->render('Admin.twig', ['arrayphrase' => $dataphrase]);
        }
    }