
 <?php
        if(!isset($_SESSION['id'])){

        ?>
        <?php
        }else{
        ?>
                

<!--Stucture list section-->

    <?php require_once('member.php') ?>
    
<!--Option control container-->

    <section class="column  Op_control_contain">
        <ol class="content">
            <li><input type="checkbox" id="toggle1" name="toggle" class="switch">
                    <label for="toggle1" class="label"></label> NewsLetter</li>

            <li><input type="checkbox" id="toggle2" name="toggle" class="switch">
                    <label for="toggle2" class="label"></label> Gérer le planning des équipes</li>

            <li><input type="checkbox" id="toggle3" name="toggle" class="switch">
                    <label for="toggle3" class="label"></label> Crée des événements</li>

            <li><input type="checkbox" id="toggle4" name="toggle" class="switch">
                    <label for="toggle4" class="label"></label> Vendre des boissons et snacks</li>

            <li><input type="checkbox" id="toggle5" name="toggle" class="switch">
                    <label for="toggle5" class="label"></label> Promotion de la salle</li>
            <li><input type="checkbox" id="toggle6" name="toggle" class="switch">
                    <label for="toggle6" class="label"></label> Gestionnaire de planning de cour</li>
            <li><input type="checkbox" id="toggle7" name="toggle" class="switch">
        </ol>
        </div>
    </section>
    </main>

    <?php
        }
    ?>

