<?php 

require_once('_config/include.php');

//Requete Partenaire

$req_sql = "SELECT *
    FROM user
    WHERE niveau =1 ";

//if(isset($_SESSION['id'])){
    //$req_sql .= "WHERE id <> ?";
//}


$req = $DB->prepare($req_sql);


if(isset($_SESSION['niveau'])){
    $req->execute([$_SESSION['niveau']]);
}else{
    $req->execute();
}

$req_member = $req->fetchALL();

//Requete structure

$req_sql = "SELECT *
    FROM user
    WHERE niveau =0 ";

//if(isset($_SESSION['id'])){
    //$req_sql .= "WHERE id <> ?";
//}


$req = $DB->prepare($req_sql);


if(isset($_SESSION['niveau'])){
    $req->execute([$_SESSION['niveau']]);
}else{
    $req->execute();
}

$req_structure = $req->fetchALL();

?>

