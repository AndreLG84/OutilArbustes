<?php
    $dossier_server_path = '/Stage2022MVC';

    $bdd = new PDO('mysql:host=localhost;dbname=stage_sconj;charset=utf8','root');

    $_SESSION[`classe_memo`][`id`] = 1;

    function trouve_outil_id($dossier) {
        $position1=strpos($dossier,"/cdi/"); 
        $position2=strrpos($dossier,'/');
        $outil_id=substr($dossier,$position1+5,$position2-$position1-5);
        return $outil_id;
    }

    function get_outil($id,$phone=false) {
        global $bdd;
        $req=$bdd->prepare('SELECT * FROM arbustes_outil WHERE outil_id=:id'.($phone?' AND outil_phone=:oui':''));
        $req->bindvalue('id',$id,PDO::PARAM_STR);
        if ($phone) $req->bindvalue('oui',1,PDO::PARAM_INT);
        $req->execute();
        $donnee=$req->fetch();
        $req->closeCursor();
        return $donnee;
    }

?>