<?php 

require_once('include.php');

    if(isset($_SESSION['id'])){
        header('Location: index.php');
        exit;
    }

    if(!empty($_POST)){
        extract($_POST);
    

        $valid = (boolean) true;

        if(isset($_POST['login'])){
            $pseudo = trim($pseudo);
            $password = trim($password);


            if(empty($pseudo)){
                $valid = false;
                $err_pseudo = "! Champ requi";
            }
            if(empty($password)){
                $valid = false;
                $err_password = "! Champ requi";

            }
            
            if($valid){
                
                $req = $DB->prepare("SELECT mdp
                    FROM user
                    WHERE pseudo = ?");

                $req->execute(array($pseudo));

                $req = $req->fetch();

            if(isset($req['mdp'])){ 
                if(!password_verify($password, $req['mdp'])){
                }else{
                    $valid = false;
                    $err_pseudo = "Le pseudo / le mot de passe est incorrecte";
                }
            }
                
            if($valid){
                $req = $DB->prepare("SELECT *
                        FROM user
                        WHERE pseudo = ?");

                $req->execute(array($pseudo));

                $req_user = $req->fetch();
    
            if(isset($req_user['id'])){

                $date_connexion = date('Y-m-d H:i:s');

                $req = $DB->prepare("UPDATE  user SET date_connexion = ? WHERE id = ?");
                $req->execute(array($date_connexion, $req_user['id']));

                $_SESSION['id'] = $req_user['id'];
                $_SESSION['pseudo'] = $req_user['pseudo'];
                $_SESSION['mail'] = $req_user['mail'];
                $_SESSION['role'] = $req_user['role'];

            header('location: index.php');
            exit;
            }else{
                    $valid = false;
                    $err_pseudo = "Le pseudo / le mot de passe est incorrecte";
                }
            }
        }
    }
}
?>