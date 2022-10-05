<?php 
    require_once('../_config/include.php');

    if(!in_array($_SESSION['role'],[1, 2])){
        header('location: index.php');
        exit;
    }

    $req = $DB->prepare("SELECT u.*, ar.libelle
        FROM user u
        LEFT JOIN admin_role ar ON ar.role = u.role
        WHERE u.id <> ?");

    $req->execute([$_SESSION['id']]);

    $req_list_user = $req->fetchAll();

    $req = $DB->prepare("SELECT *
        FROM admin_role");

    $req->execute();

    $req_list_role = $req->fetchAll();

    $tab_list_role = [];

    foreach($req_list_user as $r){
        $r['pseudo'];
        $r['libelle'];
    }

    foreach($req_list_role as $r){
        array_push($tab_list_role, [$r['role'], $r['libelle']]);
    }

    
?>