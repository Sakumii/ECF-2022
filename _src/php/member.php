<?php 

require_once('./_config/include.php');

$req_sql = "SELECT * 
FROM user ";

if(isset($_SESSION['id'])){
    $req_sql .= "WHERE id <> ?";
}

$req = $DB->prepare($req_sql);

if(isset($_SESSION['id'])){
    $req->execute([$_SESSION ['id']]);
}else{
    
}

$req_member = $req->fetchall();


//Requete Partenaire



//Requete structure



?>

