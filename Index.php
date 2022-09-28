<?php

include_once('src/php/config/database.php');
$var = "Mondial fit";

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ECF décembre 2022</title>
        <meta name="ECF" content="ECF décembre 2022">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CSS-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
        <link rel="stylesheet" href="src/css/main.css">
        <!--CSS-->
    </head>
    <body>
        
        <!--Header-->

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

                                <form id="loginForm">
                                    <input type="text" class="form_control" placeholder="@utilisateur">
                                    <input type="password" class="form_control" placeholder="password">
                                    <button class="form_button">Login</button>
                                </form>

                                <form id="registerForm" class="toggle_form">
                                    <input type="text" class="form_control" placeholder="@utilisateur">
                                    <input type="password" class="form_control" placeholder="password">
                                    <input type="password" class="form_control" placeholder="confirm password">
                                    <button class="form_button">Sign in</button>
                                </form>

                            </div>  
                        </div>
                    </div>
                </div>
            </section>
            </div>
        </header>

        <!--Main-->
        <main class="columns section_container " id="mainContainer">

            <!--Stucture list section-->

            <section class="column structure_list">
                <h2 class="subtitle is-5">nombre de structures de la franchise : </h2>
                <h3 class="subtitle is-6">Liste des structures : </h3>
                <ul class="content">
                    <li><p>structure 1</p></li>
                    <li><p>structure 2</p></li>
                    <li><p>structure 3</p></li>
                    <li><p>structure 4</p></li>
                    <li><p>structure 5</p></li>
                    <li><p>structure 6</p></li>
                    <li><p></p></li>
                    <li><p></p></li>
                    <li><p></p></li>
                    <li><p></p></li>
                    <li><p></p></li>
                    <li><p></p></li>
                    
                </ul>
            </section>

            <!--Option control container-->

            <section class="column  Op_control_contain">
                <ol class="content">
                    <li><input type="checkbox" id="toggle1" name="toggle" class="switch">
                        <label for="toggle1" class="label"></label> Newsletter</li>

                    <li><input type="checkbox" id="toggle2" name="toggle" class="switch">
                        <label for="toggle2" class="label"></label> Gérer les planning des équipes</li>

                    <li><input type="checkbox" id="toggle3" name="toggle" class="switch">
                        <label for="toggle3" class="label"></label> Crée des événements</li>

                    <li><input type="checkbox" id="toggle4" name="toggle" class="switch">
                        <label for="toggle4" class="label"></label> Vendre des boissons et snacks</li>

                    <li><input type="checkbox" id="toggle5" name="toggle" class="switch">
                        <label for="toggle5" class="label"></label>1</li>
                    <li><input type="checkbox" id="toggle6" name="toggle" class="switch">
                        <label for="toggle6" class="label"></label>2</li>
                    <li><input type="checkbox" id="toggle7" name="toggle" class="switch">
                        <label for="toggle7" class="label"></label>3</li>
                    <li><input type="checkbox" id="toggle8" name="toggle" class="switch">
                        <label for="toggle8" class="label"></label>4</li>
                    <li><input type="checkbox" id="toggle9" name="toggle" class="switch">
                        <label for="toggle9" class="label"></label>5</li>
                    <li><input type="checkbox" id="toggle10" name="toggle" class="switch">
                        <label for="toggle10" class="label"></label>6</li>
                </ol>
            </div>
            </section>
        </main>
        <script type="text/javascript" src="./src/js/login.js"></script>
    </body>
</html>