<?php 

require_once('./_config/include.php');

//Requete Partenaire

$req_sql = "SELECT * 
FROM user
WHERE roles = 1 ";

$req = $DB->prepare($req_sql);

if(isset($_SESSION['roles'])){
    $req->execute([$_SESSION ['roles']]);
}else{
    $req->execute();
}

$req_member = $req->fetchall();


//Requete structure

$req_sql = "SELECT * 
FROM user
WHERE roles = 0 ";

$req = $DB->prepare($req_sql);

if(isset($_SESSION['roles'])){
    $req->execute([$_SESSION ['roles']]);
}else{
    $req->execute();
}

$req_structure = $req->fetchall();

//Requete admin

$req_sql = "SELECT * 
FROM user
WHERE roles = 2 ";

$req = $DB->prepare($req_sql);

if(isset($_SESSION['roles'])){
    $req->execute([$_SESSION ['roles']]);
}else{
    $req->execute();
}

$req_admin = $req->fetchall();


?>
