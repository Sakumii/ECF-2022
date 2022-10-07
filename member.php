<?php 

require_once('_config/include.php');

$req = $DB->query("SELECT *
    FROM user
    ");

$req->execute();

$req_member = $req->fetchALL();
