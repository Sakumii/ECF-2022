<?php
        require_once ('connexion.php');
        require_once ('inscription.php');
        require_once ('add_partner.php');
        require_once ('add_structure.php');
?>

<header>
    <div class="header_container">
        <h1 class="title is-2 f_name" ><?php echo $var ?></h1>
    <?php
        if(!isset($_SESSION['id'])){
    ?>
        <nav class="header_menu">
            
            <button class="log_btn button is-info is-light" id="displayForm">Se connecter</button>
        </nav>         
            <section class="form_cont">
                <div class="form_container">
                    <div class="form_wrapper">
                        <div class="card">
                            <div class="card_header">

                                <div id="forLogin" class="form_header active">Se connecter</div>
                                <div id="forRegister" class="form_header">S'inscrire</div>

                            </div>
                                <div class="card_body>" id="formContainer">

                                    <form method="post" id="loginForm">
                                        <?php if(isset($err_pseudo)){echo '<div>' . $err_pseudo . '</div>';} ?>
                                        <input type="text" name="pseudo" value="" class="form_control" placeholder="Pseudo">
                                        <?php if(isset($err_password)){echo '<div>' . $err_password . '</div>';} ?>
                                        <input type="password" name="password" value="" class="form_control" placeholder="Mot de passe">
                                        <button type="submit" name="login" class="form_button">Se connecter</button>
                                    </form>

                                    <form method="post" id="registerForm" class="toggle_form">
                                        <?php if(isset($err_pseudo)){echo '<div>' . $err_pseudo . '</div>';} ?>
                                                <input type="text" name="pseudo" value="<?php if(isset($pseudo)){echo $pseudo;} ?>"  class="form_control" placeholder="Pseudo">
                                        <?php if(isset($err_mail)){echo '<div>' . $err_mail . '</div>';} ?>
                                                <input type="mail" name="mail" value="<?php if(isset($mail)){echo $mail;} ?>"  class="form_control" placeholder="Email">
                                        <?php if(isset($err_password)){echo '<div>' . $err_password . '</div>';} ?>
                                                <input type="password" name="password" value="<?php if(isset($password)){echo $password;} ?>"  class="form_control" placeholder="Mot de passe">
                                        <?php if(isset($err_password)){echo '<div>' . $err_password . '</div>';} ?>
                                                <input type="password" name="confpass"  class="form_control" placeholder="confirmation du mot de passe">
                                        <button type="submit" name="signin" class="form_button">S'inscrire</button>
                                    </form>
                                    
                                </div>  
                        </div>
                    </div>
                </div>
            </section>
            <?php
                }else{
            ?>
            <nav class="header_menu">
                <button class="log_btn button is-info is-light" id="displayForm">Ajouter partenaire/ structure</button>
                <button class="log_btn button is-info is-light"><a href="deconnexion.php">Déconnexion</a></button>
            </nav>
       
            <section class="form_cont">
                <div class="form_container">
                    <div class="form_wrapper">
                        <div class="card">
                            <div class="card_header">

                                <div id="forLogin" class="form_header active">Ajouter un partenaire</div>
                                <div id="forRegister" class="form_header">Ajouter une structure</div>

                            </div>
                                <div class="card_body>" id="formContainer">

                                <form method="post" id="loginForm" class="toggle_form">
                                        <?php if(isset($err_pseudo)){echo '<div>' . $err_pseudo . '</div>';} ?>
                                                <input type="text" name="pseudo" value="<?php if(isset($pseudo)){echo $pseudo;} ?>"  class="form_control" placeholder="Nom du partenaire">
                                        <?php if(isset($err_mail)){echo '<div>' . $err_mail . '</div>';} ?>
                                                <input type="mail" name="mail" value="<?php if(isset($mail)){echo $mail;} ?>"  class="form_control" placeholder="Email du gérant">
                                        <?php if(isset($err_password)){echo '<div>' . $err_password . '</div>';} ?>
                                                <input type="password" name="password" value="<?php if(isset($password)){echo $password;} ?>"  class="form_control" placeholder="Mot de passe">
                                        <?php if(isset($err_password)){echo '<div>' . $err_password . '</div>';} ?>
                                                <input type="password" name="confpass"  class="form_control" placeholder="confirmation du mot de passe">
                                        <button type="submit" name="add_partner" class="form_button">Ajouter le partenaire</button>
                                    </form>

                                    <form method="post" id="registerForm" >
                                        <?php if(isset($err_pseudo)){echo '<div>' . $err_pseudo . '</div>';} ?>
                                                <input type="text" name="pseudo" value="<?php if(isset($pseudo)){echo $pseudo;} ?>"  class="form_control" placeholder="Nom de la structure">
                                        <?php if(isset($err_mail)){echo '<div>' . $err_mail . '</div>';} ?>
                                                <input type="mail" name="mail" value="<?php if(isset($mail)){echo $mail;} ?>"  class="form_control" placeholder="Email du gérant">
                                        <?php if(isset($err_password)){echo '<div>' . $err_password . '</div>';} ?>
                                                <input type="password" name="password" value="<?php if(isset($password)){echo $password;} ?>"  class="form_control" placeholder="Mot de passe">
                                        <?php if(isset($err_password)){echo '<div>' . $err_password . '</div>';} ?>
                                                <input type="password" name="confpass"  class="form_control" placeholder="confirmation du mot de passe">
                                        <button type="submit" name="add_structure" class="form_button">Ajouter la structure</button>
                                    </form>
                                    
                                </div>  
                        </div>
                    </div>
                </div>
            </section>
            <?php
            }
            ?>            
        </div>
    </header>