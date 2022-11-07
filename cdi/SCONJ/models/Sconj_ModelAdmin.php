<?php

    class Sconj_ModelAdmin extends Sconj_Model {

        public function InsertPhrase($param) {
            $db= $this->getDb();

            $classe = 1;
            $date = date('d/m/yy');
            $actif = false;

            $insert = $db->prepare("INSERT INTO `cdi_conju`(`conju_phrase`, `conju_reponses`, `conju_reponse`, `conju_niveau`, `conju_temps`,`conju_classe`,`conju_date`, `conju_actif`) VALUES (:conju_phrase,:conju_reponses, :conju_reponse, :conju_niveau, :conju_temps, :conju_classe, :conju_date,:conju_actif)");
            
            $insert->bindParam(':conju_phrase', $param['conju_phrase'], PDO::PARAM_STR);
            $insert->bindParam(':conju_reponses', $param['conju_reponses'], PDO::PARAM_STR);
            $insert->bindParam(':conju_reponse', $param['conju_reponse'], PDO::PARAM_STR);
            $insert->bindParam(':conju_niveau', $param['conju_niveau'], PDO::PARAM_INT);
            $insert->bindParam(':conju_temps', $param['conju_temps'], PDO::PARAM_STR);
            $insert->bindParam(':conju_classe', $classe, PDO::PARAM_INT);
            $insert->bindParam(':conju_date', $date, PDO::PARAM_STR);
            $insert->bindParam(':conju_actif', $actif, PDO::PARAM_INT);

            $insert -> execute();
            echo 'Phrase ajoutée';
        }

        public function supPhrases(){
            $db= $this->getDb();

            $req = $db->prepare("DELETE FROM `cdi_conju` WHERE `conju_phrase` = :id");

            // $req -> execute();
        }
    }