<?php

try{
    $db = new PDO('mysql:host=localhost;dbname=stage_sconj;charset=utf8','root');
} catch (PDOException $e) {
echo 'Echec de la connexion : ' . $e->getMessage();
}

$req = $db->prepare("SELECT `conju_id`, `conju_phrase` FROM `cdi_conju` WHERE `conju_classe` = 1 ");
$req -> execute();

// return ($req->fetchALL(PDO::FETCH_ASSOC));
// echo json_encode($req->fetchALL(PDO::FETCH_ASSOC));
$phrases = '';
// permet de recuperer les donnés dans une ligne de resultat
while ($d = $req->fetch(PDO::FETCH_ASSOC)){
$phrases .= '<li>'.$d['conju_phrase'] . '</li>'; //on stock dans chaque tour
}
echo $phrases;
