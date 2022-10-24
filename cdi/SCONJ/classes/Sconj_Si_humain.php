<?php
    class Sconj_Si_humain {
        private $_humain_id;
        private $_humain_login;

        public function getHumain_id(){
            return $this->_humain_id;
        }
        public function getHumain_login(){
            return $this->_humain_login;
        }

        public function setHumain_id(int $id){
            if (is_int($id)){
                $this->_humain_id = $id;
            } else {
                throw new InvalidArgumentationException('Ceci n\'est pas un nombre entier');
            }
        }
        public function setHumain_login($humain_login){
            $this->_humain_login = $humain_login;
        }
    }