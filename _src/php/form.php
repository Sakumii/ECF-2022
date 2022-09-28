<?php

    if(!empty($_POST)){
        extract($_POST);

        if(isset($_POST['signin'])){
            echo 'ok';
        }else {
            echo 'il y a un probléme';
            }
        }
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

                                    <form method="POST" id="loginForm">
                                        <input type="text" name="pseudo" value="" class="form_control" placeholder="Pseudo">
                                        <input type="password" name="password" value="" class="form_control" placeholder="password">
                                        <button type="submit" name="login" class="form_button"><a href="_src/php/connexion.php">Login</a></button>
                                    </form>

                                    <form method="POST" id="registerForm" class="toggle_form">
                                        <input type="text" name="pseudo" value=""  class="form_control" placeholder="Pseudo">
                                        <input type="mail" name="mail" value=""  class="form_control" placeholder="Email">
                                        <input type="password" name="password" value=""  class="form_control" placeholder="password">
                                        <input type="password" name="confpass" value=""  class="form_control" placeholder="confirm password">
                                        <button type="submit" name="signin" class="form_button"><a href="_src/php/inscription.php">Sign in</a></button>
                                    </form>
                                </div>  
                        </div>
                    </div>
                </div>
            </section>            
        </div>
    </header>