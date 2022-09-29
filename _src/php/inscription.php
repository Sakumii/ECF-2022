<?php 

    if(!empty($_POST)){
        extract($_POST);
    

        $valid = (boolean) true;

        if(isset($_POST['signin'])){
            $pseudo = trim($pseudo);
            $mail = trim($mail);
            $password = trim($password);
            $confpass = trim($confpass);

            if(empty($pseudo)){
                $valid = false;
                $err_pseudo = "! Champ requi";
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
            
            if(empty($mail)){
                $valid = false;
                $err_mail = "! Champ requi";
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
            
            if(empty($password)){
                $valid = false;
                $err_password = "! Champ requi";
            }elseif($password <> $confpass){
                $valid = false;
                $err_password = "Le mot de passe est différent de la confirmation";
            }

            if($valid){
                
                $crypt_password = crypt($password, '*~|X y/4y?A4TT>Xw-o=C2q>[=.KOrQb>fh?/t~fl/;2ci{IL&4Z8a|]r;)IJJdv');
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
?>