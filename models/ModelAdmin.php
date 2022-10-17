<?php

    class ModelAdmin extends Model {

        public function InsertPhrase() {
            $db= $this->getDb();

            if (isset($_POST['submit'])) {

                $conju_id = $_POST['conju_id'];
                $conju_phrase = $_POST['conju_phrase'];
                $conju_reponses = $_POST['conju_reponses'];
                $conju_reponse = $_POST['conju_reponse'];
                $conju_niveau = $_POST['conju_niveau'];
                $conju_temps = $_POST['conju_temps'];
                $conju_classe = $_POST['conju_classe'];
                $conju_date = $_POST['conju_date'];
                $conju_actif = $_POST['conju_actif'];

                $req = $db->prepare("INSERT INTO `cdi_conju`(`conju_id`, `conju_phrase`, `conju_reponses`, `conju_reponse`, `conju_niveau`, `conju_temps`, `conju_classe`, `conju_date`, `conju_actif`) VALUES (:conju_id, :conju_phrase, :conju_reponses, :conju_reponse, :conju_niveau, :conju_temps, :conju_class, :conju_date, :conju_actif)");

                $req->bindParam('conju_id', $conju_id, PDO::PARAM_INT);
                $req->bindParam('conju_phrase', $conju_phrase, PDO::PARAM_STR);
                $req->bindParam('conju_reponses', $conju_reponses, PDO::PARAM_STR);
                $req->bindParam('conju_reponses', $conju_reponse, PDO::PARAM_INT);
                $req->bindParam('conju_niveau', $conju_niveau, PDO::PARAM_INT);
                $req->bindParam('conju_temps', $conju_temps, PDO::PARAM_STR);
                $req->bindParam('conju_classe', $conju_class, PDO::PARAM_INT);
                $req->bindParam('conju_date', $conju_date, PDO::PARAM_STR);
                $req->bindParam('conju_actif', $conju_actif, PDO::PARAM_INT);

                $req -> execute();
            }
        }

        public function getPhrases(){
            $db= $this->getDb();

            $req = $db->prepare("SELECT `conju_id`, `conju_phrase` FROM `cdi_conju` WHERE `conju_classe` = 1 ");
            $req -> execute();

            // return ($req->fetchALL(PDO::FETCH_ASSOC));

            $arrayphrase = [];

            while($data = $req->fetch(PDO::FETCH_ASSOC)){
                $arrayphrase[] = new Cdi_conju($data);
            }
            return array($arrayphrase);
            
        }
    }