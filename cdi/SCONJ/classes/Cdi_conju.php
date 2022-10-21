<?php
    class Cdi_conju extends Classes {

        private $_conju_id;
        private $_conju_phrase;
        private $_conju_reponses;
        private $_conju_reponse;
        private $_conju_niveau;
        private $_conju_temps;
        private $_conju_classe;
        private $_conju_date;
        private $_conju_actif;

        public function getConju_id(){
            return $this->_conju_id;
        }
        public function getConju_phrase(){
            return $this->_conju_phrase;
        }
        public function getConju_reponses(){
            return $this->_conju_reponses;
        }
        public function getConju_reponse(){
            return $this->_conju_reponse;
        }
        public function getConju_niveau(){
            return $this->_conju_niveau;
        }
        public function getConju_temps(){
            return $this->_conju_temps;
        }
        public function getConju_classe(){
            return $this->_conju_classe;
        }
        public function getConju_date(){
            return $this->_conju_date;
        }
        public function getConju_actif(){
            return $this->_conju_actif;
        }

        public function setConju_id($conju_id){
            $this->_conju_id = $conju_id;
        }
        public function setConju_phrase($conju_phrase){
            $this->_conju_phrase = $conju_phrase;
        }
        public function setConju_reponses($conju_reponses){
            $this->_conju_reponses = $conju_reponses;
        }
        public function setConju_reponse($conju_reponse){
            $this->_conju_reponse = $conju_reponse;
        }
        public function setConju_niveau($conju_niveau){
            $this->_conju_niveau = $conju_niveau;
        }
        public function setConju_temps($conju_temps){
            $this->_conju_temps = $conju_temps;
        }
        public function setConju_classe($conju_classe){
            $this->_conju_classe = $conju_classe;
        }
        public function setConju_date($conju_date){
            $this->_conju_date = $conju_date;
        }
        public function setConju_actif($conju_actif){
            $this->_conju_actif = $conju_actif;
        }
    }