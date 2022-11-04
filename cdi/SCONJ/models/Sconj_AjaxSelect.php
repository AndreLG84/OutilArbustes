<?php
require_once '../models/AjaxConnect.php';

$req = $db->prepare("SELECT `conju_id`, `conju_phrase` FROM `cdi_conju` WHERE `conju_classe` = 1 ");
$req -> execute();

// return ($req->fetchALL(PDO::FETCH_ASSOC));
echo json_encode($req->fetchALL(PDO::FETCH_ASSOC));

// $phrases = '';
// // permet de recuperer les donnés dans une ligne de resultat
// while ($d = $req->fetch(PDO::FETCH_ASSOC)){
// $phrases .= '<li>'.$d['conju_phrase'] . '</li>'; //on stock dans chaque tour
// }
// echo $phrases;
