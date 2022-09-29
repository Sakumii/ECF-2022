<?php
        require 'inscription.php';
?>

<header>
    <div class="header_container">
        <h1 class="title is-2 f_name" ><?php echo $var ?></h1>

        <nav class="header_menu">
            <button class="log_btn button is-info is-light" id="displayForm">login</button>
        </nav>         
            <section class="form_cont">
                <div class="form_container">
                    <div class="form_wrapper">
                        <div class="card">
                            <div class="card_header">

                                <div id="forLogin" class="form_header active">Login</div>
                                <div id="forRegister" class="form_header">Sign in</div>

                            </div>
                                <div class="card_body>" id="formContainer">

                                    <form method="post" id="loginForm">
                                        <input type="text" name="pseudo" value="" class="form_control" placeholder="Pseudo">
                                        <input type="password" name="password" value="" class="form_control" placeholder="password">
                                        <button type="submit" name="login" class="form_button"><a href="_src/php/connexion.php">Login</a></button>
                                    </form>

                                    <form method="post" id="registerForm" class="toggle_form">
                                        <?php if(isset($err_pseudo)){echo '<div>' . $err_pseudo . '</div>';} ?>
                                                <input type="text" name="pseudo" value="<?php if(isset($pseudo)){echo $pseudo;} ?>"  class="form_control" placeholder="Pseudo">
                                        <?php if(isset($err_mail)){echo '<div>' . $err_mail . '</div>';} ?>
                                                <input type="mail" name="mail" value="<?php if(isset($mail)){echo $mail;} ?>"  class="form_control" placeholder="Email">
                                        <?php if(isset($err_password)){echo '<div>' . $err_password . '</div>';} ?>
                                                <input type="password" name="password" value="<?php if(isset($password)){echo $password;} ?>"  class="form_control" placeholder="password">
                                        <?php if(isset($err_password)){echo '<div>' . $err_password . '</div>';} ?>
                                                <input type="password" name="confpass"  class="form_control" placeholder="confirm password">
                                        <button type="submit" name="signin" class="form_button"><a href="_src/php/inscription.php">Sign in</a></button>
                                    </form>
                                </div>  
                        </div>
                    </div>
                </div>
            </section>            
        </div>
    </header>