<?php
    class Sconj_Scores {

        private $_score_id;
        private $_score_valeur;
        private $_score_outil;
        private $_score_humain_id;
        private $_score_param1;
        private $_score_param2;
        private $_score_param3;
        private $_score_param4;
        private $_score_est_actif;
        private $_score_date;

        public function getScore_id(){
            return $this->_score_id;
        }
        public function getScore_valeur(){
            return $this->_score_valeur;
        }
        public function getScore_outil(){
            return $this->_score_outil;
        }
        public function getScore_humain_id(){
            return $this->_score_humain_id;
        }
        public function getScore_param1(){
            return $this->_score_param1;
        }
        public function getScore_param2(){
            return $this->_score_param2;
        }
        public function getScore_param3(){
            return $this->_score_param3;
        }
        public function getScore_param4(){
            return $this->_score_id;
        }
        public function getScore_est_actif(){
            return $this->_score_est_actif;
        }
        public function getScore_date(){
            return $this->_score_date;
        }

       
        public function setScore_id($score_id){
            $this->_score_id = $score_id;
        }
        public function setScore_valeur($score_valeur){
            $this->_score_valeur = $score_valeur;
        }
        public function setScore_outil($score_outil){
            $this->_score_outil = $score_outil;
        }
        public function setScore_humain_id($score_humain_id){
            $this->_score_humain_id = $score_humain_id;
        }
        public function setScore_param1($score_param1){
            $this->_score_param1 = $score_param1;
        }
        public function setScore_param2($score_param2){
            $this->_score_param2 = $score_param2;
        }
        public function setScore_param3($score_param3){
            $this->_score_param3 = $score_param3;
        }
        public function setScore_param4($score_param4){
            $this->_score_param4 = $score_param4;
        }
        public function setScore_est_actif($score_est_actif){
            $this->_score_est_actif = $score_est_actif;
        }
        public function setScore_date($score_date){
            $this->_score_date = $score_date;
        }
        
    }