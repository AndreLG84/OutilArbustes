<?php
    require_once '../models/AjaxConnect.php';
    // on récupere l'identifiant
    $id = $_POST['id'];
    // $db: instance(version) de lobjet PDO
    // prepare= protege contre les requetes
    $delete = $db->prepare("DELETE FROM `cdi_conju` WHERE conju_id = :id");

    $delete->bindParam('conju_id', $id, PDO::PARAM_INT);

    $delete->execute();
    echo'L\'article a été supprimé';