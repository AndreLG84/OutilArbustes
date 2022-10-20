<?php
    class ModelJeu extends Model {
        // choix phrase reseau ou classe
        // public function getClasse($conju_classe){
        //     $db= $this->getDb();
            
        //     $conju_classe = isset($_POST['conju_classe']) ? $_POST['conju_classe'] : null;

        //     $start = $db->prepare("SELECT `conju_temps` FROM `cdi_conju` WHERE `conju_classe` = :conju_classe ");

        //     $start->bindParam(':conju_classe', $conju_classe, PDO::PARAM_INT);
        //     $start -> execute();

        //     return ($start->fetchALL(PDO::FETCH_ASSOC));

        // }

        public function getConju_temps(){
            $db= $this->getDb();

            // choix du temps
            // $conju_classe = $_POST['conju_classe'];

            $req1 = $db->prepare("SELECT `conju_id`, `conju_temps` FROM `cdi_conju`");
            // $req1->bindParam('conju_classe', $conju_classe, PDO::PARAM_INT);
            $req1 -> execute();
                
            // $content = '';
            // while ($d = $req1->fetch(PDO::FETCH_ASSOC)){
            //     $content .= '<div>'.$d['conju_temps'] . '</div>'; //on stock dans chaque tour 
            // }
            // echo $content;

            // echo json_encode($req1->fetchAll(PDO::FETCH_ASSOC));
            return ($req1->fetchAll(PDO::FETCH_ASSOC));
            
        }

        public function getPhrase(){
            $db = $this->getDb();
            //phrase par temps
            if (isset($_POST['submit'])) {

                $conju_classe = $_POST['conju_classe'];
                // $conju_temps = $_POST['conju_temps'];
                $conju_temps = isset($_POST['conju_temps']) ? $_POST['conju_temps'] : null;

                $req3 = $db->prepare("SELECT `conju_phrase`,`conju_reponses`, `conju_reponse`, `conju_niveau`, `conju_temps`, `conju_classe` FROM `cdi_conju` WHERE `conju_temps` = :conju_temps AND `conju_classe` = :conju_classe ");

                $req3->bindParam(':conju_temps', $conju_temps, PDO::PARAM_STR);
                $req3->bindParam(':conju_classe', $conju_classe, PDO::PARAM_INT);
                $req3 -> execute();
                
                $array = [];

                while ($d = $req3->fetch(PDO::FETCH_ASSOC)) {
                    $array[] = new Cdi_conju($d);
                    var_dump($d);
                }
                var_dump($array);

                return array($array);

                // return ($req3->fetchALL(PDO::FETCH_ASSOC));
            }
        }
    }