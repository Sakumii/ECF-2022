<?php 

require_once('include.php');

    if(isset($_SESSION['id'])){
        header('Location: index.php');
        exit;
    }

    if(!empty($_POST)){
        extract($_POST);
    

        $valid = (boolean) true;

        if(isset($_POST['signin'])){
            $pseudo = trim($pseudo);
            $mail = trim($mail);
            $password = trim($password);
            $confpass = trim($confpass);

            //Pseuso

            if(empty($pseudo)){
                $valid = false;
                $err_pseudo = "! Champ requi";
            
            }elseif(mb_strlen($pseudo) < 5){
                $valid = false;
                $err_pseudo = "Le pseudo doit comporter plus de 5 caractéres";
            
            }elseif(mb_strlen($pseudo) > 25){
                $valid = false;
                $err_pseudo = "Le pseudo doit  comporter moins de 26 caractéres(". grapheme_strlen($pseudo) . "/25)";
            
            }else{
                $req = $DB->prepare("SELECT *
                    FROM user
                    WHERE pseudo = ?");
                $req->execute(array($pseudo));
                $req = $req->fetch();

                if(isset($req['id'])){
                    $valid = false;
                    $err_pseudo = "ce pseudo est déja pris";
                }
            };

            //Mail
            
            if(empty($mail)){
                $valid = false;
                $err_mail = "! Champ requi";
            
            }elseif(!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                $err_mail = "Le format de l'email est invalide";
              
            }else{
                $req = $DB->prepare("SELECT *
                    FROM user
                    WHERE mail = ?");
                $req->execute(array($mail));
                $req = $req->fetch();

                if(isset($req['id'])){
                    $valid = false;
                    $err_mail = "ce mail est déja pris";
                }

            //Password
            
            if(empty($password)){
                $valid = false;
                $err_password = "! Champ requi";

            }elseif($password <> $confpass){
                $valid = false;
                $err_password = "Le mot de passe est différent de la confirmation";
            }

            // Crypt password

            if($valid){
                
                $crypt_password = password_hash($password, PASSWORD_ARGON2ID);
                    echo $crypt_password;

                if (password_verify($password, $crypt_password)) {
                        echo 'Le mot de passe est valide.';
                } else {
                        echo 'Le mot de passe n\'est pas valide.';
                }
                $date_creation = date('Y-m-d H:i:s');

                $req = $DB->prepare("INSERT INTO user(pseudo, mail, mdp, date_creation, date_connexion) VALUES (?, ?, ?, ?, ?)");
                $req->execute(array($pseudo, $mail, $crypt_password, $date_creation, $date_creation));

                header('location: index.php');
                exit;
            }else{
                echo 'NON OK';
            }
        }
    }
}
