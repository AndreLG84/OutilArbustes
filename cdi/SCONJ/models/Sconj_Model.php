<?php
abstract class Sconj_Model {
    private static $_db;

    protected function getDb(){
        if(self::$_db === null){
            self::setDb();
        }
        return self::$_db;
    }

    private static function setDb(){
        global $bdd;
        try{
            self::$_db = &$bdd; 
        } catch (PDOException $e) {
        echo 'Echec de la connexion : ' . $e->getMessage();
        }
    }
}