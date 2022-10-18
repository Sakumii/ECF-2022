<?php 

require_once('./_config/include.php');

//Requete Partenaire

$req_sql = "SELECT *
    FROM user
    WHERE role = 1";

//if(isset($_SESSION['id'])){
    //$req_sql .= "WHERE id <> ?";
//}


$req = $DB->prepare($req_sql);


if(isset($_SESSION['role'])){
    $req->execute([$_SESSION['role']]);
}else{
    $req->execute();
}

$req_member = $req->fetchALL();

//Requete structure

$req_sql = "SELECT *
    FROM user
    WHERE role = 0";

//if(isset($_SESSION['id'])){
    //$req_sql .= "WHERE id <> ?";
//}


$req = $DB->prepare($req_sql);


if(isset($_SESSION['role'])){
    $req->execute([$_SESSION['role']]);
}else{
    $req->execute();
}

$req_structure = $req->fetchALL();

?>

