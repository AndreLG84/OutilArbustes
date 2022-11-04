<?php

    class Sconj_ModelAdmin extends Sconj_Model {

        public function InsertPhrase($param) {
            $db= $this->getDb();

            $test = 1;
            $date = date('yyyy-MM-dd');
            $actif = false;

            $insert = $db->prepare("INSERT INTO `cdi_conju`(`conju_phrase`, `conju_reponses`, `conju_reponse`, `conju_niveau`, `conju_temps`,`conju_classe`,`conju_date`, `conju_actif`) VALUES (:conju_phrase,:conju_reponses, :conju_reponse, :conju_niveau, :conju_temps, :conju_classe, :conju_date,:conju_actif)");
            
            $insert->bindParam(':conju_phrase', $param['conju_phrase'], PDO::PARAM_STR);
            $insert->bindParam(':conju_reponses', $param['conju_reponses'], PDO::PARAM_STR);
            $insert->bindParam(':conju_reponse', $param['conju_reponse'], PDO::PARAM_STR);
            $insert->bindParam(':conju_niveau', $param['conju_niveau'], PDO::PARAM_INT);
            $insert->bindParam(':conju_temps', $param['conju_temps'], PDO::PARAM_STR);
            $insert->bindParam(':conju_classe', $test, PDO::PARAM_INT);
            $insert->bindParam(':conju_date', $date, PDO::PARAM_STR);
            $insert->bindParam(':conju_actif', $actif, PDO::PARAM_INT);

            $insert -> execute(); 
            var_dump($insert);
        }

        public function getPhrases(){
            $db= $this->getDb();

            $req = $db->prepare("SELECT `conju_id`, `conju_phrase` FROM `cdi_conju` WHERE `conju_classe` = 1 ");
            $req -> execute();
            // echo json_encode($req->fetchALL(PDO::FETCH_ASSOC));

            // $arrayphrase = [];

            // while($data = $req->fetch(PDO::FETCH_ASSOC)){
            //     $arrayphrase[] = new Sconj_Cdi_conju($data);
            //     var_dump($data);
            // }
            // return $arrayphrase;

            $phrases = '';
            // permet de recuperer les donnés dans une ligne de resultat
            while ($d = $req->fetch(PDO::FETCH_ASSOC)){
            $phrases .= '<div>'.$d['conju_phrase'] . '</div>'; //on stock dans chaque tour 
            }
            echo $phrases;
            
        }
    }